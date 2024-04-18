<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ToolkitController extends BaseController
{
  use \App\Traits\Modules\ToolkitTrait;
  use ToolkitView;
  protected $MetaModel = \App\Models\Toolkit\ToolkitMeta::class;
  protected $ContentModel = \App\Models\Toolkit\ToolkitContent::class;
  protected $LinkModel = \App\Models\Toolkit\ToolkitLink::class;
}
trait ToolkitView
{
  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []),);
    if (!isset($return['content']) && $request->filled('cid')) {
    } elseif (!isset($return['contents'])) {
      $return['contents'] = $this->getReturn($this->select_content_list(new Request([
        'title' => $request->input('title'),
        'type' => $request->input('type', 'page'),
        'mid' => $request->input('mid'),
        'mids' => explode(',', $request->input('mids', '')),
        'status' => $request->input('status'),
        'parent' => 0,
        'page_size' => $request->input('page_size', 30),
        '$order' => ['updated_at'],
      ])));
      unset($return['query']['mid'], $return['query']['mids']);
    }
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }
}
