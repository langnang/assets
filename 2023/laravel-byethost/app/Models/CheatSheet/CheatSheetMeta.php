<?php

namespace App\Models\CheatSheet;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CheatSheetMeta extends Meta
{
    use \App\Traits\Modules\CheatSheetTrait;
}
