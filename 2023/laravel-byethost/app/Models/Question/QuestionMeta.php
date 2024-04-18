<?php

namespace App\Models\Question;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuestionMeta extends Meta
{
    use \App\Traits\Modules\QuestionTrait;
}
