<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends BaseController
{
  use \App\Traits\Modules\ArticleTrait;

  protected $MetaModel = \App\Models\Article\ArticleMeta::class;
  protected $ContentModel = \App\Models\Article\ArticleContent::class;
  // protected $RelationshipModel = \App\Models\Article\ArticleRelationship::class;
  protected $LinkModel = \App\Models\Article\ArticleLink::class;
  protected $keyMap = [
    'mid' => '',
    'meta' => '',
    'mids' => '',
    'metas' => "insert_meta_list",
    'lid' => '',
    'link' => '',
    'lids' => '',
    'links' => "insert_content_list",
    'relationships' => '',
    'coid' => '',
    'comment' => '',
    'coids' => '',
    'comments' => '',
    'uid' => '',
    'user' => '',
    'uids' => '',
    'users' => '',
    'id' => '',
    'field' => '',
    'ids' => '',
    'fields' => '',
  ];

  public function view_index(Request $request)
  {
    $request->merge(['page_size' => 10]);
    return parent::{__FUNCTION__}($request);
  }
}
