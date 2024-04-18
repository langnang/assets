<?php

namespace App\Models\WebStack;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WebStackContent extends Content
{
    use \App\Traits\Modules\WebStackTrait;
}
