<?php

namespace App\Models\WebStack;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WebStackLink extends Link
{
    use \App\Traits\Modules\WebStackTrait;
}
