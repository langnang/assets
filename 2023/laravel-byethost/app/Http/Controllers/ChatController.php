<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ChatController extends BaseController
{
  use \App\Traits\Modules\ChatTrait;
}