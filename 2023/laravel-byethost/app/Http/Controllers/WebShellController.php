<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WebShellController extends BaseController
{
  use \App\Traits\Modules\WebShellTrait;

  use WebShellView;
}

trait WebShellView
{
  public function view_index(Request $request)
  {
    return parent::{__FUNCTION__}($request);
  }
}
