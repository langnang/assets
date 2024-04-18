<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class QuoteController extends BaseController
{
  use \App\Traits\Modules\QuoteTrait;
  protected $MetaModel = \App\Models\Quote\QuoteMeta::class;
  protected $ContentModel = \App\Models\Quote\QuoteContent::class;
  protected $LinkModel = \App\Models\Quote\QuoteLink::class;
}