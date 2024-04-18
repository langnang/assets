<?php

namespace App\Models\Article;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ArticleLink extends Link
{
    use \App\Traits\Modules\ArticleTrait;
}
