<?php

namespace App\Models\Book;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BookContent extends Content
{
  use \App\Traits\Modules\BookTrait;
}
