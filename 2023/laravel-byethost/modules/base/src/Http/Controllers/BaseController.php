<?php

namespace App\Modules\Base;

use App\Models\Model;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class Controller extends \Illuminate\Routing\Controller
{
  use \Illuminate\Foundation\Auth\Access\AuthorizesRequests;
  use \Illuminate\Foundation\Bus\DispatchesJobs;
  use \Illuminate\Foundation\Validation\ValidatesRequests;

  // use \App\Traits\Modules\BaseTrait;
  use \App\Traits\Crud\BaseCrudTrait;
  use \App\Traits\Crud\MetaCrudTrait;
  use \App\Traits\Crud\ContentCrudTrait;
  use \App\Traits\Crud\LinkCrudTrait;
  use \App\Traits\Crud\FieldCrudTrait;

  use BaseResponse, BaseRequest, BaseClauses, BaseDecouple, BaseCall, BaseImportTree, BaseView, BaseCron;

  protected $BaseModel;
  protected $MetaModel = \App\Models\Base\Meta::class;
  protected $ContentModel = \App\Models\Base\Content::class;
  protected $FieldModel = \App\Models\Base\Field::class;
  protected $CommentModel = \App\Models\Base\Comment::class;
  protected $LinkModel = \App\Models\Base\Link::class;
  protected $RelationshipModel = \App\Models\Base\Relationship::class;
  protected $UserModel = \App\Models\Base\User::class;
  protected $OptionModel = \App\Models\Base\Option::class;
  protected $LogModel = \App\Models\Base\Log::class;
  /**
   * 函数组对象
   */
  protected $keyMap = [
    'mid' => 'upsert_meta_item',
    'meta' => 'upsert_meta_item',
    'mids' => 'upsert_meta_list',
    'metas' => "upsert_meta_list",
    'cid' => 'upsert_content_item',
    'content' => 'upsert_content_item',
    'cids' => 'upsert_content_list',
    'contents' => "upsert_content_list",
    'lid' => 'upsert_link_item',
    'link' => 'upsert_link_item',
    'lids' => 'upsert_link_list',
    'links' => "upsert_link_list",
    'relationships' => '',
    'coid' => 'upsert_comment_item',
    'comment' => 'upsert_comment_item',
    'coids' => 'upsert_comment_list',
    'comments' => 'upsert_comment_list',
    'uid' => 'upsert_user_item',
    'user' => 'upsert_user_item',
    'uids' => 'upsert_user_list',
    'users' => 'upsert_user_list',
    'id' => 'upsert_field_item',
    'field' => 'upsert_field_item',
    'ids' => 'upsert_field_list',
    'fields' => 'upsert_field_list',
  ];

  /**
   * 检测API路由
   */
  public function isApiRoute()
  {
    $header = request()->header();
    // $isFromOpenAPI=substr($header['refer']);
    return Route::current()->computedMiddleware[0] === 'api';
  }

  public function getKeyMap($key = null)
  {
    $return = [];
    $parent = get_parent_class($this);
    // 调用的控制器非当前控制器
    // 且
    //
    if (__CLASS__ !== get_class($this) && get_class($this) !== $parent) {
      $return = array_merge($return, (new $parent)->getKeyMap());
    }
    $return = array_merge($return, $this->keyMap);
    return $return;
  }

  public function getModelPrefix()
  {
  }

  /**
   * @description 检测类中是否定义 Model
   * @param string $name
   * @return bool|string
   * @throws Exception
   */
  public function issetModel(string $name)
  {
    switch ($name) {
      case 'base':
      case $this->BaseModel:
        if (!$this->BaseModel) {
          throw new \Exception(Lang::get('validation.unset_model.base'));
        }

        return $this->BaseModel;
        break;
      case 'meta':
      case $this->MetaModel:
        if (!$this->MetaModel) {
          throw new \Exception(Lang::get('validation.unset_model.meta'));
        }

        return $this->MetaModel;
        break;
      case 'content':
      case $this->ContentModel:
        if (!$this->ContentModel) {
          throw new \Exception(Lang::get('validation.unset_model.content'));
        }

        return $this->ContentModel;
        break;
      case 'link':
      case $this->LinkModel:
        if (!$this->LinkModel) {
          throw new \Exception(Lang::get('validation.unset_model.link'));
        }

        return $this->LinkModel;
        break;
      case 'relationship':
      case $this->RelationshipModel:
        if (!$this->RelationshipModel) {
          throw new \Exception(Lang::get('validation.unset_model.relationship'));
        }

        return $this->RelationshipModel;
        break;
      case 'field':
      case $this->FieldModel:
        if (!$this->FieldModel) {
          throw new \Exception(Lang::get('validation.unset_model.relationship'));
        }

        return $this->FieldModel;
        break;
      default:
        break;
    }
    return true;
  }

  /**
   * @description 检测类中是否使用 Trait
   * @param string $name
   * @return bool
   * @throws Exception
   */
  public function isuseCrudTrait(string $name)
  {
    $traits = class_uses($this);
    switch ($name) {
      case 'base':
        if (!in_array('App\Traits\Crud\BaseCrudTrait', $traits)) {
          throw new \Exception(Lang::get('validation.unset_model.base'));
        }

        break;
      case 'meta':
        if (!in_array('App\Traits\Crud\MetaCrudTrait', $traits)) {
          throw new \Exception(Lang::get('validation.unset_model.meta'));
        }

        break;
      case 'content':
        if (!in_array('App\Traits\Crud\ContentCrudTrait', $traits)) {
          throw new \Exception(Lang::get('validation.unset_model.content'));
        }

        break;
      case 'link':
        if (!in_array('App\Traits\Crud\LinkCrudTrait', $traits)) {
          throw new \Exception(Lang::get('validation.unset_model.link'));
        }

        break;
      default:
        break;
    }
    return true;
  }
}

trait BaseResponse
{
  public function success($data = [], $message = '成功')
  {
    // var_dump(debug_backtrace());
    // Log::info('[' . request()->method() . '] ' . request()->fullUrl(), [
    //   // "attributes" => request()->attributes(),
    //   "request" => request()->all(),
    //   "query" => request()->query(),
    //   "server" => request()->server(),
    //   // "files" => request()->files() ?? [],
    //   "cookies" => request()->cookie(),
    //   "headers" => request()->header(),
    //   'response' => $data,
    //   'debug' => array_map(function ($item) {
    //     return ($item['class'] ?? '') . '::' . $item['function'] . '->' . $item['line'];
    //   }, debug_backtrace()),
    // ]);
    if ($this->isApiRoute()) {
      $return = [
        'status' => 200,
        'message' => $message,
        'data' => $data,
      ];
      // if ($data instanceof \Illuminate\Pagination\Paginator || $data instanceof \Illuminate\Contracts\Pagination\Paginator) {
      //     $return = array_merge($return, $data->toArray());
      //     unset($return['first_page_url']);
      //     unset($return['next_page_url']);
      //     unset($return['path']);
      //     unset($return['prev_page_url']);
      //     unset($return['last_page_url']);
      //     unset($return['links']);
      //     unset($return['prev_page_url']);
      // }
      return response()->json($return);
    } else {
      return $data;
    }
  }

  public function error($message = '失败')
  {
    // Log::info('[' . request()->method() . '] ' . request()->fullUrl(), [
    //   // "attributes" => request()->attributes(),
    //   "request" => request()->all(),
    //   "query" => request()->query(),
    //   "server" => request()->server(),
    //   // "files" => request()->files() ?? [],
    //   "cookies" => request()->cookie(),
    //   "headers" => request()->header(),
    //   'response' => $message,
    //   'debug' => array_map(function ($item) {
    //     return ($item['class'] ?? '') . '::' . $item['function'] . '->' . $item['line'];
    //   }, debug_backtrace()),
    // ]);
    if ($this->isApiRoute() && $message instanceof \Exception) {
      //            $message = '[' . $message->getFile() . '::' . $message->getCode() . '::' . $message->getLine() . ']  ' . $message->getMessage();
      return response()->json([
        'status' => 400,
        'message' => $message->getMessage(),
        'file' => $message->getFile(),
        'code' => $message->getCode(),
        'line' => $message->getLine(),
      ]);
    }
    return $message;
  }

  public function debug($data = [], $message = '调试')
  {
    Log::debug(request()->fullUrl());
    return response()->json([
      'status' => 500,
      'message' => $message,
      'data' => $data,
      // 'debug' => debug_backtrace(),
      // 'debug' => array_map(function ($item) {
      //     return ($item['class'] ?? '') . '::' . $item['function'] . '->' . $item['line'];
      // }, debug_backtrace()),
    ]);
  }
}

trait BaseRequest
{
}

/**
 * 生成语句
 */
trait BaseClauses
{
  public function selectClauses(Request $request)
  {
    return $request->input('$select', []);
  }

  /**
   * @description with 语句
   * @param Request $request
   * @return mixed
   */
  public function withClauses(Request $request)
  {
    [
      '$with',
      '$without',
      '$withCount',
      '$withPivot',
      '$withTimestamps',
      '$morphWith',
      '$morphWithCount',
      '$withDefault',
      '$syncWithoutDetaching',
      // 获取包括软删除模型在内的模型
      '$withTrashed',
      '$onlyTrashed',
      // 对当前查询取消全局作用域
      '$withoutGlobalScope',
      // 暂时「禁用」模型触发的所有事件
      '$withoutEvents',
    ];
    return $request->input('$with', []);
  }

  /**
   * @description where 语句
   * @param Request $request
   * * $where [[key, value]]
   * * $orWhere
   * * $whereIn [key => value]
   * * $orWhereIn
   * * $whereNotIn
   * * $orWhereNotIn
   * * $whereBetween
   * * $whereNotBetween
   * @param $return
   * @param array $ignores 过滤的列
   * @return mixed
   */
  public function whereClauses(Request $request, $return, array $ignores = [])
  {
    foreach ([
      '$where',
      '$orWhere',

      '$whereBetween',
      '$orWhereBetween',
      '$whereNotBetween',
      '$orWhereNotBetween',

      '$whereIn',
      '$orWhereIn',
      '$whereNotIn',
      '$orWhereNotIn',

      '$whereNull',
      '$whereNotNull',
      '$orWhereNull',
      '$orWhereNotNull',

      '$whereDate',
      '$whereMonth',
      '$whereDay',
      '$whereYear',
      '$whereTime',

      '$whereColumn',
      '$orWhereColumn',

      '$whereHasMorph',
    ] as $clause) {
      if (!$request->filled($clause)) {
        continue;
      }

      if (empty($request->input($clause))) {
        continue;
      }

      $args = $request->input($clause, []);
      if (in_array($clause, ['$where'])) {
        $args = $request->input($clause, []);
        // dump($args);
        foreach ($args as $index => $arg) {
          // dump($arg[0]);
          if (in_array($arg[0], $ignores)) {
            unset($args[$index]);
          }
        }
        // dump($args);
        $args = [$args];
      }
      if (in_array($clause, ['$whereIn'])) {
        foreach ($request->input($clause) as $key => $value) {
          $return = $return->{substr($clause, 1)}($key, $value);
        }
      } else {
        $return = $return->{substr($clause, 1)}(...$args);
      }
    }
    // 存在 relationships 并非前置方法存入的空数据
    if ($request->filled('relationships') && !empty($request->input('relationships'))) {
      $return = $return->whereHas('relationships', function (Builder $query) use ($request) {
        foreach ($request->input('relationships') as $key => $value) {
          if (is_array($value)) {
            $query = $query->whereIn($key, $value);
          } else {
            $query = $query->where($key, $value);
          }
        }
      });
    }
    return $return;
  }

  public function orderByClauses(Request $request, $return)
  {
    if ($request->filled('$order') && !empty($request->input('$order'))) {
      $order = $request->input('$order');
      if (is_array($order)) {
        foreach ($order as $args) {
          if (is_string($args)) {
            $return = $return->orderBy($args);
          } else {
            $return = $return->orderBy(...$args);
          }
        }
      } else {
        $return = $return->orderBy($order);
      }
      unset($order);
    }
    return $return;
  }

  public function groupByClauses(Request $request, $return)
  {
    return $return;
  }
}

/**
 * 解耦
 */
trait BaseDecouple
{
  /**
   * 由于请求接口调用的方法，可能嵌套调用，会造成多层结构，需清除
   */
  public function getReturn($return)
  {
    if ($this->isApiRoute() && $return instanceof JsonResponse) {
      if (isset($return->original['data'])) {
        return $return->original['data'];
      } else {
        return null;
      }
    }
    return $return;
  }
}

trait BaseCall
{
  public function each_key_method()
  {
  }

  public function call_self_method($key, ...$values)
  {
    if (!array_key_exists($key, $this->getKeyMap())) {
      return;
    }

    $method = $this->getKeyMap()[$key];
    if (!method_exists($this, $method)) {
      return;
    }

    return $this->{$method}(...$values);
  }

  public function each_item_func($method, Request $request)
  {
    try {
      // dump(__METHOD__);
      $model = $this->issetModel($request->input('$model', $this->BaseModel));
      $primaryKey = (new $model())->getKeyName();
      $parentColumn = (new $model())->parentColumn;
      // dump(__METHOD__, $primaryKey, $parentColumn);
      // dump(__METHOD__, $method);
      $return = [
        'data' => [],
        'success_count' => 0,
        'failed_count' => 0,
      ];
      foreach ($request->input('data', []) as $item) {
        $result = $this->getReturn($this->$method(new Request(array_merge($item, ['$model' => $model]))));
        if (isset($item['children']) && sizeof($item['children']) > 0 && !empty($parentColumn)) {
          // var_dump(["call children each_item_func", $item['children']]);
          // 递归调用 传参为子类数据
          $resultChildren = $this->getReturn($this->each_item_func($method, new Request([
            '$model' => $model,
            'data' => array_map(function ($child) use ($result, $primaryKey, $parentColumn) {
              return array_merge($child, [
                $parentColumn => $result[$primaryKey],
              ]);
            }, $item['children']),
          ])));
          $result['children'] = $resultChildren['data'];
        }
        if (empty($result)) {
          array_push($return['data'], null);
          $return['failed_count']++;
        } else {
          array_push($return['data'], $result);
          $return['success_count']++;
        }
        unset($result);
      }
      return $this->success($return);
    } catch (Exception $e) {
      $this->error($e);
    }
  }
}

trait BaseImportTree
{
  public function import_tree(Request $request)
  {
    // TODO 集中其它方法至此方法
    try {
      // dump(__METHOD__);
      $return = [];
      // if ($request->hasAny(['mid', 'mids', 'meta', 'metas'])) {
      // }
      // if ($request->hasAny(['cid', 'cids', 'content', 'contents'])) {
      //   $this->import_content_tree($request);
      // }
      if ($request->hasAny(['id', 'ids', 'field', 'fields'])) {
      }
      if ($request->filled('mid')) {
        $return = array_merge($return, $this->getReturn($this->upsert_meta_item($request)));
      } elseif ($request->filled('cid')) {
        if ($request->filled('id')) {
          // Field
          $return = array_merge($return, $this->getReturn($this->upsert_field_item($request)));
        } else {
          // Content
          $return = array_merge($return, $this->getReturn($this->upsert_content_item($request)));
        }
      } elseif ($request->filled('lid')) {
        $return = $request->input('lid');
      }
      if ($request->filled('relationships')) {
        $return['relationships'] = [];
      }
      if ($request->filled('meta')) {
        $return['meta'] = $this->getReturn($this->upsert_meta_item(new Request($request->input('meta'))));
      }
      if ($request->filled('metas')) {
        $return['metas'] = $this->getReturn($this->upsert_meta_list(new Request(["data" => $request->input('metas')])))['data'];
      }
      if ($request->filled('content')) {
        $return['content'] = $this->getReturn($this->upsert_content_item(new Request($request->input('content'))));
      }
      if ($request->filled('contents')) {
        $return['contents'] = $this->getReturn($this->upsert_content_list(new Request(["data" => $request->input('contents')])))['data'];
        if (isset($return['mid'])) {
          $relationships = array_map(function ($content) use ($return) {
            return [
              $this->prefix . '_cid' => $content['cid'],
              $this->prefix . '_mid' => $return['mid'],
            ];
          }, $return['contents']);
          $this->RelationshipModel::insertOrIgnore($relationships);
        }
        if (isset($return['lid'])) {
        }
      }
      if ($request->filled('link')) {
        $return['link'] = [];
      }
      if ($request->filled('links')) {
        $return['links'] = [];
      }
      return $this->success($return);
    } catch (Exception $e) {
      $this->error($e);
    }
  }

  public function import_meta_tree()
  {
  }

  public function import_content_tree(Request $request)
  {
    try {
      dump(__METHOD__, $request);
    } catch (Exception $e) {
      $this->error($e);
    }
  }

  public function import_field_tree()
  {
  }
}

trait BaseView
{

  /**
   * OPEN /{prefix}
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_index(Request $request)
  {
    $return = $request->input('$return', []);
    $return['app'] = app();
    $return['categories'] = $return['categories'] ?? $this->select_meta_tree(new Request(['parent' => 0, 'type' => 'category']));
    $return['tags'] = $return['tags'] ?? $this->select_meta_list(new Request(['type' => 'tag', 'page_size' => 999]));
    $return['contents'] = $return['contents'] ?? $this->select_content_list(new Request());
    return view(($this->prefix ?? 'home') . '.index', $return);
  }

  /**
   * OPEN /{prefix}/meta/{mid}
   * @param Request $request
   * @param $mid
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_meta_item(Request $request, $mid)
  {
    $return = $request->input('$return', []);
    return view(($this->prefix ?? 'home') . '.meta', $return);
  }

  /**
   * OPEN /{prefix}/content/{cid}
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_content_item(Request $request, $cid)
  {
    $return = $request->input('$return', []);
    $return['content'] = $this->select_content_item(new Request(['cid' => $cid]));
    $return['pages'] = [];
    $return['categories'] = [];
    return view(($this->prefix ?? 'home') . '.content', $return);
  }

  /**
   * OPEN /{prefix}/404
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_404(Request $request)
  {
    $return = $request->input('$return', []);
    return view(($this->prefix ?? 'home') . '.404', $return);
  }

  /**
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_exists(Request $request)
  {
  }

  /**
   * OPEN /{prefix}/tree/{slug}
   * @param Request $request
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function view_tree(Request $request)
  {
  }
}

trait BaseCron
{
  /**
   * Undocumented function
   *
   * @param Request $request
   * @return void
   */
  public function cron(Request $request)
  {
  }
}
