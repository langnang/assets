<?php

namespace App\Modules\Base\Models;


use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;


class Content extends Model
{
  use \Illuminate\Database\Eloquent\SoftDeletes;
  public $table = '_contents';
  public $primaryKey = "cid";
  public $parentColumn = 'parent';
  // 关联字段表的方法
  public $fieldColumns = ['fields'];
  protected $fillable = [
    'title',
    'slug',
    'ico',
    'url',
    'description',
    'text',
    'type',
    'status',
    'user',
    'parent',
    'count',
    'order',
    'options',
    'suggestion',
    'release_at',
  ];
  protected $casts = [
    'release_at' => 'datetime',
    'options' => 'array',
  ];

  public function fields($name = "Field")
  {
    $FieldModel = str_replace("Content", $name, static::class);
    if (!class_exists($FieldModel)) $FieldModel = \App\Models\Base\Field::class;
    return $this->hasMany($FieldModel, $this->primaryKey, $this->primaryKey);
  }

  public function comments()
  {
    $CommentModel = str_replace("Content", "Comment", static::class);
    if (!class_exists($CommentModel)) $CommentModel = \App\Models\Base\Comment::class;
    return $this->hasMany($CommentModel, $this->primaryKey, $this->primaryKey);
  }

  public function collection(Collection $rows)
  {
    $rows = parent::collection($rows);
    if (request()->filled('mids')) {
      $mids = explode(',', request()->input('mids'));
      // dump($mids);
      foreach ($mids as $mid) {
        $this->relationships()->insert(array_map(function ($row) use ($mid) {
          return [
            $this->prefix . '_cid' => $row->cid,
            $this->prefix . '_mid' => $mid,
          ];
        }, (array)$rows));
      }
    }
  }
}
