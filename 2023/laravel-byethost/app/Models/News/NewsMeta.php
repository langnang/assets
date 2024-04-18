<?php

namespace App\Models\News;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NewsMeta extends Meta
{
  use \App\Traits\Modules\NewsTrait;
}
