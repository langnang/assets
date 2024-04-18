<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserController extends BaseController
{
  protected $prefix = "";
  protected $BaseModel = \App\Models\User::class;

  use UserView;

  public function login(Request $request)
  {
    try {
      $user = $this->BaseModel::where([['name', $request->input('name') ?? $request->input('username')], ['password', $request->input('password')]])->first();
      if (empty($user)) return $this->error('登录失败，账号或密码错误！');
      $token = md5(json_encode(array_merge($request->all(), $request->header())));
      $user->token = $token;
      $user->save();
      // dump($user);
      Auth::login($user);
      $user = $user->toArray();
      $user['token'] = $token;
      // var_dump(Auth::check());
      return $this->success($user, '登录成功');
    } catch (Exception $e) {
      // dump($e);
      return $this->error($e);
    }
  }

  public function logout(Request $request)
  {
    try {
    } catch (Exception $e) {
      return $this->error($e);
    }
  }
}

trait UserView
{
  public function view_index(Request $request)
  {
    $return = array_merge([
      "prefix" => 'user',
      "view" => View::exists('user.index') ?  'user.index' : '_view.index',
      'categories' => [],
      'tags' => [],
      'latest_contents' => [],
      'toplist_contents' => [],
      'links' => [],
    ], $request->input('$return', []),);
    if ($request->filled('cid')) {
      $return['content'] = $this->getReturn($this->select_item(new Request(['$model' => $this->BaseModel, 'uid' => $request->input('cid')])));
    } else if (!isset($return['contents'])) {
      $return['contents'] = $this->getReturn($this->select_list(new Request(['$model' => $this->BaseModel])));
      unset($return['query']['mid'], $return['query']['mids']);
      // var_dump($return['contents']);
    }
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }

  public function view_content_item(Request $request, $cid = 0)
  {
    $return = [
      "prefix" => 'user',
      "view" => View::exists('user.content') ?  'user.content' : '_view.content',
    ];
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request, $cid);
  }
  public function view_content_form_item(Request $request, $cid = 0)
  {
    $return = [
      "prefix" => 'user',
      "view" => View::exists('user.content-form') ?  'user.content-form' : '_view.content-form',
    ];
    if (!isset($return['content'])) {
      if ($cid == 0) {
        $return['content'] = new $this->BaseModel;
      } else {
        $return['content'] = $this->getReturn($this->select_item(new Request(['$model' => $this->BaseModel, 'uid' => $cid])));
      }
      $return['content']['insert_content_item'] = 'insert_item';
      $return['content']['update_content_item'] = 'update_item';
      $return['content']['upsert_content_item'] = 'upsert_item';
      $return['content']['staging_content_item'] = 'staging_item';
      $return['content']['publish_content_item'] = 'publish_item';
    }
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request, $cid);
  }
  public function view_404(Request $request)
  {
    $return = array_merge($request->input('$return', []), [
      "prefix" => 'user',
      "view" => View::exists('user.404') ? 'user.404' : '_view.404',
    ]);
    echo "<script>window.\$data=" . json_encode($return, JSON_UNESCAPED_UNICODE) . "</script>";
    return view($return['view'], $return);
  }
}
