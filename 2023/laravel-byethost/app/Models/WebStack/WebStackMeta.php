<?php

namespace App\Models\WebStack;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WebStackMeta extends Meta
{
    use \App\Traits\Modules\WebStackTrait;
}
