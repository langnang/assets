<?php

namespace App\Models\Novel;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;


class NovelContent extends Content
{
  use \App\Traits\Modules\NovelTrait;
  static $fields = [
    'chapters' => NovelChapter::class,
  ];
  public function chapters()
  {
    return $this->fields('Chapter')->with(['children']);
  }
}
