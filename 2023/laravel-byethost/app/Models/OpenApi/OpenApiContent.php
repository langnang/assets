<?php

namespace App\Models\OpenApi;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class OpenApiContent extends \App\Models\Content
{
    use HasFactory;
    use \App\Traits\Modules\OpenApiTrait;

    protected $casts = [
        "contact" => "array",
        "license" => "array"
    ];

    public function tags()
    {
        return $this->metas([['type', 'tag']]);
    }
    public function paths()
    {
        return $this->fields("Path");
    }
    public function toArray()
    {
        return [
            "openapi" => $this->openapi,
            "info" => [
                "title" => $this->title,
                "description" => $this->description,
                "contact" => $this->contact,
                "license" => $this->license,
                "version" => $this->version,
            ],
            "tags" => $this->tags,
            "paths" => array_reduce($this->paths->toArray(), function ($total, $item) {
                if (!isset($total[$item['url']])) $total[$item['url']] = [];
                // $item['tags'] = explode(',', $item['tags']);
                $total[$item['url']][$item['method']] = $item;
                return $total;
            }, []),
        ];
    }
}
