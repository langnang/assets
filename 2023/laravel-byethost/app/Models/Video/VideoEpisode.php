<?php

namespace App\Models\Video;

use App\Models\Base\Field;
use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class VideoEpisode extends Field
{
  use \App\Traits\Modules\VideoTrait;
  public $table = '_episodes';
  public $uniqueIndex = 'slug';
}
