<?php

namespace App\Models\Novel;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NovelMeta extends Meta
{
  use \App\Traits\Modules\NovelTrait;
}
