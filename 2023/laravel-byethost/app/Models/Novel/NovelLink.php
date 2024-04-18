<?php

namespace App\Models\Novel;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class NovelLink extends Link
{
    use \App\Traits\Modules\NovelTrait;
}
