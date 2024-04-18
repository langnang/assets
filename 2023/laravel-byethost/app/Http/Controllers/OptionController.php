<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionController extends BaseController
{
  protected $prefix = "";
  protected $BaseModel = \App\Models\Option::class;

  public function delete_item(Request $request)
  {
    $request->merge(['$where' => [['name', $request->input('name', '')]]]);
    return parent::delete_item($request);
  }

  public function delete_list(Request $request)
  {
    $request->merge(['$whereIn' => ['name', $request->input('names', [])]]);
    return parent::delete_list($request);
  }

  public function select_item(Request $request)
  {
    $request->merge(['$where' => [['name', $request->input('name', '')]]]);
    return parent::select_item($request);
  }

  public function select_list(Request $request)
  {
    $request->merge(['$whereIn' => [['name', $request->input('names', [])]]]);
    return parent::select_list($request);
  }
}
