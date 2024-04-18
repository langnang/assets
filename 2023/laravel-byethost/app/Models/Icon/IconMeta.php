<?php

namespace App\Models\Icon;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class IconMeta extends Meta
{
    use \App\Traits\Modules\IconTrait;
}
