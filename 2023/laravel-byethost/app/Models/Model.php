<?php

namespace App\Models;

use \Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class Model extends \Illuminate\Database\Eloquent\Model implements \Maatwebsite\Excel\Concerns\ToCollection
{
  use \Illuminate\Database\Eloquent\Factories\HasFactory;

  use FamilyTree, TableRelationship, StatusDraft, MaatwebsiteToCollection;

  // deleted_at 软删除
  // use \App\Traits\Modules\BaseTrait;
  /**
   * 与模型关联的表名
   *
   * @var string
   */
  // protected $table;
  /**
   * 与表关联的主键
   *
   * @var string
   */
  // protected $primaryKey;
  /**
   * 主键是否主动递增
   *
   * @var bool
   */
  // public $incrementing = true;
  /**
   * 自动递增主键的「类型」
   *
   * @var string
   */
  // protected $keyType = 'string';
  /**
   * 是否主动维护时间戳
   *
   * @var bool
   */
  // public $timestamps = false;
  // protected $UserModel = \App\Models\User::class;
  // protected $OptionModel = \App\Models\Option::class;
  protected $dates = [
    'created_at',
    'updated_at',
    'release_at',
    'deleted_at'
  ];
  protected $fillable = [
    'created_at',
    'updated_at',
    'release_at',
    'deleted_at'
  ];

  protected static $unguarded = false;

  public $uniqueIndex;
  /**
   * 获取数据表名称
   */
  public function getTable()
  {
    if (empty($this->prefix)) return $this->table;
    if (substr($this->table, 0, strlen($this->prefix)) === $this->prefix) return $this->table;
    return $this->prefix . $this->table;
  }


  /**
   * 为数组 / JSON 序列化准备日期。
   *
   * @param \DateTimeInterface $date
   * @return string
   */
  protected function serializeDate(\DateTimeInterface $date)
  {
    return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
  }
}

/**
 * 族谱
 */
trait FamilyTree
{
  /**
   * 父类
   */
  public function parent()
  {
    return $this->hasOne(static::class, $this->primaryKey, $this->parentColumn,);
  }

  public function parent_exists()
  {
  }
  public function parents()
  {
    return $this->hasOne(static::class, $this->primaryKey, $this->parentColumn,)->with('parent');
  }
  public function root()
  {
    return $this->hasOne(static::class, $this->primaryKey, $this->parentColumn,)->with('root');
  }
  /**
   * Retrieve the root parent of the current category.
   * The root parent of a category that has no parent is that category itself.
   *
   * @return \App\Models\Category
   */
  public function getRoot()
  {
    $bubble_keys = [$this[$this->getKeyName()]];
    // $this->bubbule_keys = $this->active_keys ?? [$this[$this->getKeyName()]];
    if ($this->root) {
      if ($this->root->root) {
        $this->root = $this->root->getRoot();
        // dump($this->root->active_keys);
      }
      // array_unshift($bubble_keys);
      $this->root->bubble_keys = array_merge($this->root->bubble_keys ?? [$this->root[$this->getKeyName()]], $bubble_keys);
      return $this->root;
    }
    $this->bubble_keys = array_merge($this->bubble_keys ?? [], $bubble_keys);
    return $this;
    // if ($this->root && $this->root->root) {
    //   return $this->getRoot();
    // }
    // return $this->root;
  }
  /**
   * 子集
   */
  public function children()
  {
    return $this->hasMany(static::class, $this->parentColumn, $this->primaryKey);
  }

  public function children_count()
  {
  }
}

trait TableRelationship
{
  public function metas()
  {
    return $this
      ->hasMany(\App\Models\Relationship::class, $this->prefix . '_' . $this->primaryKey, $this->primaryKey)
      ->leftJoin($this->prefix . "_metas", "_relationships." . $this->prefix . "_mid", '=', $this->prefix . "_metas.mid");
  }

  public function contents()
  {
    return $this
      ->hasMany(\App\Models\Relationship::class, $this->prefix . '_' . $this->primaryKey, $this->primaryKey)
      ->leftJoin($this->prefix . "_contents", "_relationships." . $this->prefix . "_cid", '=', $this->prefix . "_contents.cid");
  }

  public function links()
  {
    return $this
      ->hasMany(\App\Models\Relationship::class, $this->prefix . '_' . $this->primaryKey, $this->primaryKey)
      ->leftJoin($this->prefix . "_links", "_relationships." . $this->prefix . "_lid", '=', $this->prefix . "_links.lid");
  }

  public function relationships()
  {
    return $this->hasMany(\App\Models\Relationship::class, $this->prefix . '_' . $this->primaryKey, $this->primaryKey);
  }

  public function logs()
  {
  }
}

/**
 * 草稿
 */
trait StatusDraft
{
  /**
   * 草稿
   */
  public function draft()
  {
    return $this->hasOne(static::class, $this->parentColumn, $this->primaryKey)->with($this->fieldColumns ?? [])->where([['status', 'draft']]);
  }

  /**
   * 草稿列表，草稿记录
   */
  public function drafts()
  {
    return $this->hasMany(static::class, $this->parentColumn, $this->primaryKey)->with($this->fieldColumns ?? [])->where([['status', 'draft']]);
  }

  /**
   * 检测是否存在草稿记录
   */
  public function draft_exists()
  {
  }
}

/**
 * maatwebsite/excel
 */
trait MaatwebsiteToCollection
{
  /**
   * 使用 ToCollection
   * @param array $row
   *
   * @return User|null
   */
  public function collection(Collection $rows)
  {
    // dump([__METHOD__, $rows]);
    // 去除表格标题行
    unset($rows[0]);
    $data = [];
    // 处理数据
    foreach ($rows as $row) {
      // 将实例对象转为数组
      $row = $this->model($row->all());
      // dump($row);
      if (empty($row)) continue;
      $row = $row->toArray();
      // $key = $row[$this->primaryKey];
      $row = $this->updateOrCreate([$this->primaryKey => $row[$this->primaryKey] ?? null], $row,);

      array_push($data, $row);
    }
    return $data;
    // dump(request()->all());
    // $return = $this->upsert($data, [$this->primaryKey], []);
    // dump($return);
  }

  public function array($rows)
  {
    // 去除表格标题行
    unset($rows[0]);
    $data = [];
    // 处理数据
    foreach ($rows as $row) {
      $row = $this->model($row);
      if (empty($row)) continue;
      $row = $row->toArray();
      $row = $this->updateOrCreate([$this->primaryKey => $row[$this->primaryKey] ?? null], $row,);
      // array_push($data, $this->model($row)->toArray());
      array_push($data, $row);
    }
    // $this->upsert($data, [$this->primaryKey], []);
    return $data;
  }

  /**
   * 将Excel表格中行数据转为实例对象
   */
  public function model(array $row)
  {
    return new $this($row);
  }
}
