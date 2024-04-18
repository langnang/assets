<?php

namespace App\Models\OpenApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class OpenApiMeta extends \App\Models\Meta
{
    use HasFactory;
    use \App\Traits\Modules\OpenApiTrait;
}
