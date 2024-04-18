<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WikiController extends BaseController
{
  use \App\Traits\Modules\WikiTrait;
  use WikiView;
  // protected $MetaModel = \App\Models\News\NewsMeta::class;
  // protected $ContentModel = \App\Models\News\NewsContent::class;
  // protected $LinkModel = \App\Models\News\NewsLink::class;
}

trait WikiView
{
  public function view_index(Request $request)
  {
    $return = $request->input('$return', []);
    $directories = array_map(function ($item) {
      return new $this->MetaModel([
        "name" => $item,
        "type" => "category",
        "ico" => "",
      ]);
    }, Storage::directories('wiki'));
    $files = array_map(function ($item) {
      return new $this->MetaModel([
        "name" => $item,
        "type" => "category",
        "ico" => "",
      ]);
    }, Storage::files('wiki'));
    $return['categories'] = array_merge($directories, $files);
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }

  public function view_content_item(Request $request, $cid)
  {
    $return = $request->input('$return', []);
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request, $cid);
  }

  public function view_content_start(Request $request, $cid)
  {
    // 避免 dump：Cannot modify header information - headers already sent by
    $return = $request->input('$return', []);
    // var_dump(['set_time_limit', disable_functions('set_time_limit')]);
    $request->merge(['$return' => $return]);
    return parent::view_content_item($request, $cid);
  }
}