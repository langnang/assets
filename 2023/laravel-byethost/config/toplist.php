<?php

return [
  [
    "name" => "综合", "slug" => "news", "groups" => [
      ["name" => "推荐", "collections" => [\App\Http\ControllersNewsController::class, 'collection']]
    ]
  ]
];