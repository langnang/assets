<?php

namespace App\Models\Question;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class QuestionLink extends Link
{
    use \App\Traits\Modules\QuestionTrait;
}
