<?php

namespace App\Models\Book;

use App\Models\Base\Meta;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BookMeta extends Meta
{
    use \App\Traits\Modules\BookTrait;
}
