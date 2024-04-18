<?php

namespace App\Models\News;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NewsContent extends Content
{
  use \App\Traits\Modules\NewsTrait;
}
