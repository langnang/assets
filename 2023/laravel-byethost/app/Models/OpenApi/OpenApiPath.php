<?php

namespace App\Models\OpenApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class OpenApiPath extends  \App\Models\Field
{
    use HasFactory;
    use \App\Traits\Modules\OpenApiTrait;
    public $table = 'paths';

    protected $casts = [
        'tags' => 'array'
    ];
}
