<?php

namespace App\Models\Video;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class VideoLink extends Link
{
    use \App\Traits\Modules\VideoTrait;
}
