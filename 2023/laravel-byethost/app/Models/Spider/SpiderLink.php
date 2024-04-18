<?php

namespace App\Models\Spider;

use App\Models\Base\Link;
use App\Traits\SpiderTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SpiderLink extends Link
{
    use \App\Traits\Modules\SpiderTrait;
}
