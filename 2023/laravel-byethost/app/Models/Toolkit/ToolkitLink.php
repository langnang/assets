<?php

namespace App\Models\Toolkit;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ToolkitLink extends Link
{
    use \App\Traits\Modules\ToolkitTrait;
}
