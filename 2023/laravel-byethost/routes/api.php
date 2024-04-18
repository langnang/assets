<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/routes', function () {
  $return = [];
  $controller = new \App\Http\Controllers\BaseController();
  foreach (Route::getRoutes() as $route) {
    array_push($return, [
      'uri' => $route->uri,
    ]);
  }
  return $controller->success($return);
});
Route::group(['prefix' => "user"], function () {
  Route::post('/login', "App\Http\Controllers\UserController@login");
});
array_map(function ($item, $prefix) {
  Route::group(['prefix' => $prefix], function () use ($item) {
    foreach ([
      'insert_item',
      'insert_list',
      'delete_item',
      'delete_list',
      'update_item',
      'update_list',
      'upsert_item',
      'upsert_list',
      'select_item',
      'select_list',
    ] as $func) {
      Route::match(['get', 'post'], '/' . $func, "App\Http\Controllers\\" . $item . "@" . $func);
    }
  });
}, [
  "OptionController",
  "UserController",
], [
  "option",
  "user",
]);
foreach (config('app.controllers') as $prefix => $controller) {
  if (in_array($prefix, ['user', 'option'])) continue;
  Route::group(['prefix' => $prefix], function () use ($controller) {
    foreach ([
      'insert_meta_item',
      'insert_meta_list',
      'delete_meta_item',
      'delete_meta_list',
      'update_meta_item',
      'update_meta_list',
      'upsert_meta_item',
      'upsert_meta_list',
      'release_meta_item',
      'release_meta_list',
      'select_meta_item',
      'select_meta_list',
      'select_meta_page',
      'select_meta_tree',
      'import_meta',
      'export_meta',


      'insert_content_item',
      'insert_content_list',
      'delete_content_item',
      'delete_content_list',
      'update_content_item',
      'update_content_list',
      'upsert_content_item',
      'upsert_content_list',
      'select_content_item',
      'select_content_list',
      'select_content_page',
      'select_content_tree',

      'staging_content_item',
      'staging_content_list',
      'release_content_item',
      'release_content_list',

      'import_content',
      'export_content',

    ] as $func) {
      Route::match(['post'], '/' . $func, $controller . "@" . $func);
    }
  });
}
Route::group(['prefix' => "icon"], function () {
  Route::match(['get', 'post'], '/select_meta_item', "App\Http\Controllers\IconController@select_meta_item");
  Route::match(['get', 'post'], '/import', "App\Http\Controllers\IconController@import");
});

Route::group(['prefix' => "webstack"], function () {
  Route::match(['get', 'post'], '/branches', "App\Http\Controllers\WebStackController@branches");
  Route::match(['get', 'post'], '/tree', "App\Http\Controllers\WebStackController@tree");
});

Route::group(['prefix' => "spider"], function () {
  Route::match(['get', 'post'], '/origin', "App\Http\Controllers\SpiderController@origin");
  Route::match(['get', 'post'], '/info/{slug?}', "App\Http\Controllers\SpiderController@tree");
});
Route::group(['prefix' => "openapi"], function () {
  Route::match(['get', 'post'], '/', "App\Http\Controllers\OpenApiController@index");
  Route::match(['get', 'post'], '/select_tree', "App\Http\Controllers\OpenApiController@select_tree");
  Route::match(['get', 'post'], '/select_content_item/{cid}', "App\Http\Controllers\OpenApiController@select_content_item");
  Route::match(['get', 'post'], '/import', "App\Http\Controllers\OpenApiController@import");
});
Route::get('/software/{slug?}', function (Request $request) {
  $slug = $request->slug;
  $summary = 'summary.json';
  $result = [];
  $client = new \Github\Client();
  $client->authenticate(env('GITHUB_TOKEN'), null, \Github\AuthMethod::JWT);
  $path = 'SoftInstaller/';
  if (empty($slug)) {
    $path .= $summary;
  } else {
    $path .= $slug . '.json';
  }
  // var_dump($client);
  // $contents = $client->api('repo')->contents()->show(env('GITHUB_USER'), 'langnang', 'README.md', env('GITHUB_BRANCH'));
  // var_dump($contents);
  $contents = $client->api('repo')->contents()->show(env('GITHUB_USER'), env('GITHUB_REPO'), $path, env('GITHUB_BRANCH'));
  $result = json_decode(base64_decode($contents['content']), true);
  return response()->json($result, \Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
});

Route::get('/phpspider/{slug?}', function (Request $request) {
  $slug = $request->slug;
  $summary = 'summary.json';
  $result = [];
  $client = new \Github\Client();
  $client->authenticate(env('GITHUB_TOKEN'), null, \Github\AuthMethod::JWT);
  $path = 'owner888.phpspider/';
  if (empty($slug)) {
    $path .= $summary;
  } else {
    $path .= $slug . '.json';
  }
  // var_dump($client);
  // $contents = $client->api('repo')->contents()->show(env('GITHUB_USER'), 'langnang', 'README.md', env('GITHUB_BRANCH'));
  // var_dump($contents);
  $contents = $client->api('repo')->contents()->show(env('GITHUB_USER'), env('GITHUB_REPO'), $path, env('GITHUB_BRANCH'));
  $result = json_decode(base64_decode($contents['content']), true);
  return response()->json($result, \Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
});
Route::group(['prefix' => "faker"], function () {
  Route::match(['get', 'post'], '/', "App\Http\Controllers\FakerController@index");
  Route::match(['get', 'post'], '/select_item/{method}', "App\Http\Controllers\FakerController@select_item");
});
// ftp
// database
// public-api
// cheatsheet
// question
// leetcode
// interview
// post

// 系统支持
Route::group(['prefix' => 'support'], function () {
  // 导入文件类型
  Route::match(['get', 'post'], '/import/extension', function () {
  });
});
