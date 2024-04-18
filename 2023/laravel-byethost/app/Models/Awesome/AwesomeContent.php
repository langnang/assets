<?php

namespace App\Models\Awesome;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AwesomeContent extends Content
{
  use \App\Traits\Modules\AwesomeTrait;
}
