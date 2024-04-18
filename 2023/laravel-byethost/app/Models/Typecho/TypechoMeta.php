<?php

namespace App\Models\Typecho;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Dcat\Admin\Show;
use Dcat\Admin\Form;
use Dcat\Admin\Contracts\Repository;

class TypechoMeta extends \App\Models\Typecho\Typecho
{
    use HasFactory;
    use \Dcat\Admin\Traits\ModelTree;
    protected $prefix = "typecho";
    protected $ucPrefix = "Typecho";
    protected $table = "typecho_metas";

    protected $primaryKey = "mid";

    protected $parentColumn = 'parent';
    protected $columns = [
        [
            "name" => "mid",
            "label" => "编号",
            "form" => ['display'],
            "table" => [true, ['link', '/api/{{getPrefix}}/metas/{{mid}}'], 'bold', 'sortable'],
            "tree" => [],
        ],
        [
            "name" => "name",
            "label" => "名称",
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
    public function get(\Dcat\Admin\Grid\Model $model)
    {
        // 获取当前页数
        $currentPage = $model->getCurrentPage();
        // 获取每页显示行数
        $perPage = $model->getPerPage();

        // 获取筛选参数
        $city = $model->filter()->input(\Dcat\Admin\Grid\Filter\Scope::QUERY_NAME, '广州');

        $start = ($currentPage - 1) * $perPage;

        $client = new \GuzzleHttp\Client();

        $response = $client->get("{$this->api}?{$this->apiKey}&city=$city&start=$start&count=$perPage");
        $data = json_decode((string)$response->getBody(), true);

        return $model->makePaginator(
            $data['total'] ?? 0, // 传入总记录数
            $data['subjects'] ?? [] // 传入数据二维数组
        );
    }

    public function detail($mid)
    {
        $show = Show::make($mid, new $this->model());

        $show->mid('编号');
        $show->name();
        $show->slug();
        $show->description('内容');
        $show->type();
        $show->status("状态");
        $show->order();
        $show->count();
        $show->parent();
        $show->release_at("发布时间");
        $show->created_at();
        $show->updated_at();

        return $show;
    }

    public function contents()
    {
        return $this
            ->hasMany("App\Models\\" . $this->ucPrefix . "\\" . $this->ucPrefix . "RelationShip", "mid", "mid")
            ->leftJoin($this->prefix . "_contents", $this->prefix . "_relationships.cid", '=', $this->prefix . "_contents.cid");
    }
}
