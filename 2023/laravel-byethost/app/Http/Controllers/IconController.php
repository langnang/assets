<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends BaseController
{
  use \App\Traits\Modules\IconTrait;
  protected $MetaModel = \App\Models\Icon\IconMeta::class;
  protected $ContentModel = \App\Models\Icon\IconContent::class;
  protected $LinkModel = \App\Models\Icon\IconLink::class;

  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []),);
    $branches = $this->select_meta_list(new Request(['type' => 'category', 'parent' => 0]));
    // $branch = $this->MetaModel::where([['type', 'branch']])->find(1);
    // $categories = $this->MetaModel::with(['children', 'contents'])->where([['type', 'category']])->get();
    // var_dump($branches->toArray());
    // return redirect('/icon/' . $branch->slug);
    return view('icon.index', ['branches' => $branches]);
  }

  public function view_meta_slug(Request $request, $slug)
  {
    $branch = $this->select_meta_item(new Request(['slug' => $slug]));
    $tree = $this->select_meta_tree(new Request(['parent' => $branch->mid]));
    return view('icon.tree', [
      'tree' => $tree
    ]);
  }
}
