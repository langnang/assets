<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenApiController extends BaseController
{
  use \App\Traits\Modules\OpenApiTrait;

  protected $MetaModel = \App\Models\OpenApi\OpenApiMeta::class;
  protected $ContentModel = \App\Models\OpenApi\OpenApiContent::class;
  protected $LinkModel = \App\Models\OpenApi\OpenApiLink::class;
  protected $PathModel = \App\Models\OpenApi\OpenApiPath::class;

  public function index()
  {
    $categories = $this->select_tree(new Request());
    return view('swagger.index', ["categories" => $categories]);
    return [
      [
        "name" => "example/3.0",
        "path" => "/api/openapi/example_3_0"
      ],
      [
        "name" => "example/3.1",
        "path" => "/api/openapi/example_3_1"
      ]
    ];
  }

  public function slug($slug)
  {
    // var_dump($slug);
    // var_dump(request()->all());
    // request()->all();
    if ($slug === 'example_3_0') return response()->json(json_decode(Storage::get('public/openapi3_0.json')));
    if ($slug === 'example_3_1') return response()->json(json_decode(Storage::get('public/openapi3_1.json')));

    return $this->ContentModel::with(['tags', 'paths'])->first();
  }
  public function insert_path_item($data = [])
  {
    if (isset($data['tags']) && is_array($data['tags'])) $data['tags'] = json_encode($data['tags'], JSON_UNESCAPED_UNICODE);
    $id = $this->PathModel::insertGetId($data);
    $return = $data;
    $return['id'] = $id;
    return $this->success($return);
  }
  public function insert_path_list($data = [])
  {
    $return = array_map(function ($item) {
      return $this->insert_path_item($item)->original['data'];
    }, $data);
    return $this->success($return);
  }
  public function insert_content_item($data = [])
  {
    $paths = $data['paths'] ?? [];
    unset($data['paths']);

    if (isset($data['contact']) && is_array($data['contact'])) $data['contact'] = json_encode($data['contact'], JSON_UNESCAPED_UNICODE);
    if (isset($data['license']) && is_array($data['license'])) $data['license'] = json_encode($data['license'], JSON_UNESCAPED_UNICODE);
    $return = parent::insert_content_item(new Request($data))->original['data'];
    $cid = $return['cid'];
    if (!empty($paths)) {
      $return['paths'] = $this->insert_path_list(array_map(function ($item) use ($cid) {
        return array_merge($item, ['cid' => $cid]);
      }, $paths))->original['data'];
    }

    return $this->success($return);
  }
}