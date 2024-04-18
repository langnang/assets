<?php

namespace App\Models\CheatSheet;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CheatSheetLink extends Link
{
    use \App\Traits\Modules\CheatSheetTrait;
}
