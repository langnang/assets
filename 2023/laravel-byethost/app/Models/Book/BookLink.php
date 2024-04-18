<?php

namespace App\Models\Book;

use App\Models\Base\Link;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BookLink extends Link
{
    use \App\Traits\Modules\BookTrait;
}
