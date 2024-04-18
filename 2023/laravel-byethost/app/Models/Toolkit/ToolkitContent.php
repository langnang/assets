<?php

namespace App\Models\Toolkit;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ToolkitContent extends Content
{
  use \App\Traits\Modules\ToolkitTrait;
}