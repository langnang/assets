<?php

namespace App\Models\Awesome;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AwesomeMeta extends Meta
{
    use \App\Traits\Modules\AwesomeTrait;
}
