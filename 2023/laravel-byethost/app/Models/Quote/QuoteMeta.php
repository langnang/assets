<?php

namespace App\Models\Quote;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuoteMeta extends Meta
{
  use \App\Traits\Modules\QuoteTrait;
}
