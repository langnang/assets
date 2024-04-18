<?php

namespace App\Models\Article;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ArticleContent extends Content
{
  use \App\Traits\Modules\ArticleTrait;
}
