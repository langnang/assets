<?php

namespace App\Models\Video;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class VideoMeta extends Meta
{
  use \App\Traits\Modules\VideoTrait;
}
