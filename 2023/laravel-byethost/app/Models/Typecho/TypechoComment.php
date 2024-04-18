<?php

namespace App\Models\Typecho;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class TypechoComment extends \App\Models\Typecho\Typecho
{
    use HasFactory;

    protected $prefix = "typecho";
    protected $ucPrefix = "Typecho";
    protected $table = "typecho_comments";
}
