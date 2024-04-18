<?php

namespace App\Http\Controllers;

use App\Models\Awesome\AwesomeContent;
use App\Models\OpenApi\OpenApiContent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AwesomeController extends BaseController
{
  use \App\Traits\Modules\AwesomeTrait;

  protected $MetaModel = \App\Models\Awesome\AwesomeMeta::class;
  protected $ContentModel = \App\Models\Awesome\AwesomeContent::class;
  protected $LinkModel = \App\Models\Awesome\AwesomeLink::class;
}
