<?php

namespace App\Models\Spider;

use App\Models\Base\Field;


class SpiderCollectUrl extends Field
{
  use \App\Traits\Modules\SpiderTrait;

  public $table = '_collect_urls';

  protected $casts = [
    "fields" => "array"
  ];
  protected $fillable = [
    "cid",
    "url",
    "title",
    "type",
    "fields",
    "status",
  ];

  function collect_urls()
  {
  }
  function collect_scan_urls()
  {
  }
  function collect_list_urls()
  {
  }
  function collect_content_urls()
  {
  }
}
