<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class VideoController extends BaseController
{
  use \App\Traits\Modules\VideoTrait;
  protected $MetaModel = \App\Models\Video\VideoMeta::class;
  protected $ContentModel = \App\Models\Video\VideoContent::class;
  protected $LinkModel = \App\Models\Video\VideoLink::class;

  protected $extendImportMapping = [
    "episode" => ["upsert_field_item", "object", ['$model' => \App\Models\Video\VideoEpisode::class]],
    "episodes" => ["upsert_field_list", "array", ['$model' => \App\Models\Video\VideoEpisode::class]],
  ];
}
