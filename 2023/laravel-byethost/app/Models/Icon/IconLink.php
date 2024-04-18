<?php

namespace App\Models\Icon;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class IconLink extends Link
{
    use \App\Traits\Modules\IconTrait;
}
