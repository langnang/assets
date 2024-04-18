<?php

namespace App\Models\CheatSheet;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CheatSheetContent extends Content
{
  use \App\Traits\Modules\CheatSheetTrait;
}
