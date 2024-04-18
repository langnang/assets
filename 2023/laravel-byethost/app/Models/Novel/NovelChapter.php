<?php

namespace App\Models\Novel;

use App\Models\Base\Field;
use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NovelChapter extends Field
{
  use \App\Traits\Modules\NovelTrait;
  public $table = '_chapters';
}
