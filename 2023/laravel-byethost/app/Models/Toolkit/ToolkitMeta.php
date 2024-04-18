<?php

namespace App\Models\Toolkit;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ToolkitMeta extends Meta
{
    use \App\Traits\Modules\ToolkitTrait;
}
