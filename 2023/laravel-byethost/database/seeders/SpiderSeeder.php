<?php

namespace Database\Seeders;

class SpiderSeeder extends BaseSeeder
{
  use \App\Traits\Modules\SpiderTrait;
  public $Controller = \App\Http\Controllers\SpiderController::class;
}
