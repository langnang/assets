<?php

namespace App\Models\Typecho;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Facades\DB;

class TypechoContent extends \App\Models\Typecho\Typecho
{
    use HasFactory;
    protected $prefix = "typecho";
    protected $ucPrefix = "Typecho";
    protected $table = "typecho_contents";

    protected $columns = [
        [
            "name" => "cid",
            "label" => "编号",
            "form" => ['display'],
            "table" => [true, ['link', '/api/{{getPrefix}}/contents/{{cid}}'], 'bold', 'sortable'],
            "tree" => [],
        ],
        [
            "name" => "title",
            "label" => "标题",
            "form" => ['text'],
            "table" => [true,],
        ],
        [
            "name" => "slug",
            "label" => "标识",
            "form" => ['text'],
            "table" => [true,],
        ],
        [
            "name" => "text",
            "label" => "内容",
            "form" => ['markdown'],
        ],
        [
            "name" => "type",
            "label" => "类型",
            "form" => ['select', ['options', ["branch" => "分支", "category" => "类别", "tag" => "标签"]]],
            "table" => [true, ['using', ["branch" => "分支", "category" => "类别", "tag" => "标签"]]],
        ],
        [
            "name" => "status",
            "label" => "状态",
            "form" => ['select', ['default', 'draft'], ['options', ["draft" => "草稿", "private" => "私有", 'publish' => "公开"]]],
            "table" => [true, ['using', ["draft" => "草稿", "private" => "私有", 'publish' => "公开"]]],
        ],
        [
            "name" => "count",
            "label" => "计数",
            "table" => [true,],
        ],
        [
            "name" => "order",
            "label" => "排序",
            "form" => ['number'],
            "table" => [true,],
        ],
        [
            "name" => "parent",
            "label" => "父本",
            "table" => [true,],
        ],
        [
            "name" => "release_at",
            "label" => "发布时间",
            "form" => ['datetime', ['format', 'YYYY-MM-DD HH:mm:ss']],
            "table" => [true,],
        ],
        [
            "name" => "created_at",
            "label" => "创建时间",
            "table" => [true,],
        ],
        [
            "name" => "updated_at",
            "label" => "修改时间",
            "table" => [true, 'sortable'],
        ],
    ];

    protected $primaryKey = "cid";

    /**
     *
     */
    public function fields()
    {
        return $this->hasMany("App\Models\\" . ucfirst($this->prefix) . "\\" . ucfirst($this->prefix) . "Field", "cid", "cid")
            ->with(['children'])
            ->where("parent", 0);
    }
    /**
     *
     */
    public function metas()
    {
        return $this->hasMany("App\Models\\" . $this->ucPrefix . "\\" . $this->ucPrefix  . "RelationShip", "cid", "cid")
            ->leftJoin($this->prefix . "_metas", $this->prefix . "_relationships.mid", '=', $this->prefix . "_metas.mid");
    }
    /**
     *
     */
    public function comments()
    {
        return $this->hasMany("App\Models\\" . ucfirst($this->prefix) . "\\" . ucfirst($this->prefix) . "Comment", "cid", "cid");
    }
    /**
     *
     */
    public function relationships()
    {
        return $this->hasMany("App\Models\\" . $this->ucPrefix . "\\" . $this->ucPrefix . "RelationShip", "cid", "cid");
    }
    /**
     *
     */
    public function replace_field($where, $row, $name = "Field")
    {
        $field_model = "App\Models\\" . ucfirst($this->prefix) . "\\" . ucfirst($this->prefix) . $name;
        $field_model = new $field_model();
        return DB::table($field_model->getTable())->updateOrInsert($where, $row);
    }

    public function insert($values)
    {
    }
}
