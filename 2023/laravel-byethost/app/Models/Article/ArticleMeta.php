<?php

namespace App\Models\Article;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ArticleMeta extends Meta
{
    use \App\Traits\Modules\ArticleTrait;
}
