<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends BaseController
{
  use \App\Traits\Modules\NewsTrait;
  protected $MetaModel = \App\Models\News\NewsMeta::class;
  protected $ContentModel = \App\Models\News\NewsContent::class;
  protected $LinkModel = \App\Models\News\NewsLink::class;
}
