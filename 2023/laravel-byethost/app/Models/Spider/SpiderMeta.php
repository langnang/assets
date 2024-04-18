<?php

namespace App\Models\Spider;

use App\Models\Base\Meta;
use App\Traits\SpiderTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SpiderMeta extends Meta
{
    use \App\Traits\Modules\SpiderTrait;
}
