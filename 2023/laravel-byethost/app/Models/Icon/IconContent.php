<?php

namespace App\Models\Icon;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class IconContent extends Content
{
    use \App\Traits\Modules\IconTrait;
}
