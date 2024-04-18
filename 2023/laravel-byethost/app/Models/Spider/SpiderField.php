<?php

namespace App\Models\Spider;

use App\Models\Base\Field;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SpiderField extends Field
{
  use \App\Traits\Modules\SpiderTrait;
}
