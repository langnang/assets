<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class NovelController extends BaseController
{
  use \App\Traits\Modules\NovelTrait;
  protected $MetaModel = \App\Models\Novel\NovelMeta::class;
  protected $ContentModel = \App\Models\Novel\NovelContent::class;
  protected $LinkModel = \App\Models\Novel\NovelLink::class;
}
