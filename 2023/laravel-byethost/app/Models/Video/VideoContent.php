<?php

namespace App\Models\Video;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;


class VideoContent extends Content
{
  use \App\Traits\Modules\VideoTrait;
  static $fields = [
    'episodes' => VideoEpisode::class,
  ];
  public function episodes()
  {
    return $this->fields('Episode')->with(['children']);
  }
}