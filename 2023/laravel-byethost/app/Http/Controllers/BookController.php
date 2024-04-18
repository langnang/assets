<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends BaseController
{
  use \App\Traits\Modules\BookTrait;
  use BookView;

  protected $MetaModel = \App\Models\Book\BookMeta::class;
  protected $ContentModel = \App\Models\Book\BookContent::class;
  protected $LinkModel = \App\Models\Book\BookLink::class;
  public function index(Request $request)
  {
    $page = $request->page;
    $categories = $this->select_meta_tree(new Request([
      'type' => 'category',
      'parent' => 0,
    ]));
    $tags = $this->select_meta_list(new Request([
      'type' => 'tag',
      'parent' => 0,
    ]));
    $contents = $this->select_content_list(new Request());
    return view('article.index', [
      'categories' => $categories,
      'tags' => $tags,
      'contents' => $contents
    ]);
  }
  public function content(Request $request)
  {
    $categories = $this->select_meta_tree(new Request([
      'type' => 'category',
      'parent' => 0,
    ]));
    $tags = $this->select_meta_list(new Request([
      'type' => 'tag',
      'parent' => 0,
    ]));
    $content = $this->select_content_item(new Request(['cid' => $request->cid]));
    return view('article.content', [
      'categories' => $categories,
      'tags' => $tags,
      'content' => $content
    ]);
  }
}
trait BookView
{
  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []),);
    if (!isset($return['content']) && $request->filled('cid')) {
      $return['content'] = $this->getReturn($this->select_content_item(new Request(['cid' => $request->input('cid'), '$with' => ['parent', 'root']])));
      $return['root_content'] = $return['content']->getRoot();
      $return['root_content']['children'] = $this->getReturn($this->select_content_tree(new Request(['parent' => $return['root_content']['cid']])));
    } elseif (!isset($return['contents'])) {
      $return['contents'] = $this->getReturn($this->select_content_list(new Request([
        'title' => $request->input('title'),
        'type' => $request->input('type', 'post'),
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
