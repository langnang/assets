<?php

namespace App\Models\News;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NewsLink extends Link
{
  use \App\Traits\Modules\NewsTrait;
}
