<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SpiderController;
use App\Http\Controllers\WebStackController;
use App\Support\Helpers\PhpSpiderHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('/home');
});

Route::get('/about', function () {
  return view('about.index');
});
Route::get('/404', "App\Http\Controllers\BaseController@view_404");
Route::group(['prefix' => 'home'], function () {
  Route::get('/{slug?}', function ($slug = 'news') {
    $map = [
      "news" => ["App\Http\Controllers\NewsController"],
      "tech" => ["App\Http\Controllers\NewsController"],
      "ent" => [
        "App\Http\Controllers\NewsController",
        "App\Http\Controllers\StoryController",
        "小说" => "App\Http\Controllers\NovelController",
        "App\Http\Controllers\AudioController",
        "App\Http\Controllers\VideoController",
      ],
      "design" => ["App\Http\Controllers\NewsController"],
      "epaper" => ["App\Http\Controllers\NewsController"],
      "software" => ["App\Http\Controllers\NewsController"],
    ];
    $controller = "App\Http\Controllers\\" . ucfirst($slug) . "Controller";
    $collections = (new $controller)->select_meta_list(new Request(['type' => "collection", '$with' => ['contents']]));
    // dump($collections->toArray());
    // exit;
    // dump($slug);
    // $html = QueryList::get('https://tophub.today/c/news')->rules([
    //   "_html" => ['', 'html'],
    //   "name" => ['.cc-cd-lb', 'text'],
    //   "subname" => ['.cc-cd-sb-st', 'text'],
    //   'ico' => ['.cc-cd-lb>img', 'src'],
    // ])->range('.cc-cd')->query()->getData(function ($item) {
    //   $item['children'] = QueryList::html($item['_html'])->rules([
    //     'title' => ['.t', 'text']
    //   ])->range('.cc-cd-cb-ll')->queryData();
    //   return $item;
    // });
    // dump($html);
    $article = new ArticleController();
    $webstack = new WebStackController();
    // $article_latest = $article->select_content_list(new Request(['$order' => ['views']]));
    // var_dump($article_latest);
    $return = [
      'slug' => $slug,
      'tophub' => [
        $slug => $collections
      ],
      'article' => [
        'toplist' => $article->select_content_list(new Request(['type' => 'post', 'status' => 'publish', '$order' => ['count']])),
        'latest' => $article->select_content_list(new Request(['type' => 'post', 'status' => 'publish', '$order' => ['release_at']])),
      ],
      'collection' => [
        'toplist' => [],
        'latest' => [],
      ],
      'webstack' => [
        'toplist' => $webstack->select_content_list(new Request(['type' => 'post', 'status' => 'publish', '$order' => ['count']])),
        'latest' => $webstack->select_content_list(new Request(['type' => 'post', 'status' => 'publish', '$order' => ['release_at']])),
      ],
    ];
    // dump($return);
    return view('home.index', $return);
  })->where('slug', 'news|tech|ent|community|shopping|finance|adademic|developer|design|university|organization|blog|epaper|software');
  Route::get('/changelog', function () {
    $return = [
      "prefix" =>  $this->prefix ?? 'home',
      "view" => ($this->prefix ?? 'home') . ".changelog",
    ];
    $return['text'] = markdown_to_html(app('files')->get('CHANGELOG.md'));
    return view($return['view'], $return);
  });
});
/**
 * Base
 */
foreach (config('app.controllers') as $prefix => $controller) {
  Route::group(['prefix' => $prefix], function () use ($prefix, $controller) {
    foreach ([
      '' => 'view_index',
      '/meta/{mid}' => 'view_meta_item',
      '/meta-form' => 'view_meta_list_form',
      '/meta-form/{mid}' => 'view_meta_item_form',
      '/content/{cid}' => 'view_content_item',
      '/content-form' => 'view_content_list_form',
      '/content-form/{mid}' => 'view_content_item_form',
      '/tree/{slug}' => 'view_tree',
      '/discover' => 'view_spider_discover_list',
      '/discover/{spider_cid}/{discover_index?}' => 'view_spider_discover_item',
      '/sourceSearch' => 'view_spider_search_list',
      '/options' => 'view_options',
      '/404' => 'view_404'
    ] as $path => $func) {
      Route::match(['get'], $path, $controller . "@" . $func);
    }
    if (!empty(config('app.fields.' . $prefix))) {
      Route::match(['get'], "/{field}/{id}", $controller . '@view_field_item')->where('field', implode("|", config('app.fields.' . $prefix)));
    }
  });
}
// array_map(function ($controller, $prefix) {
// }, array_values(config('app.controllers')), array_keys(config('app.controllers')));
/**
 * Spider
 */
Route::group(['prefix' => 'echarts'], function () {
  Route::get('/', function () {
    return view('echarts.index');
  });
});
Route::group(['prefix' => 'resume'], function () {
  Route::get('/', function () {
    return view('resume.template');
  });
});
Route::group(['prefix' => "webstack"], function () {
  //  Route::get('', '\App\Http\Controllers\WebStackController@index');
  //  Route::get('about', '\App\Http\Controllers\WebStackController@about');
  // Route::get('404', '\App\Http\Controllers\WebStackController@not_found');
  //  Route::get('tree/{slug?}', '\App\Http\Controllers\WebStackController@tree');
  //  Route::get('content/{cid?}', '\App\Http\Controllers\WebStackController@content_item');
});

Route::group(['prefix' => 'software'], function () {
  Route::get('/', function () {
    return view('software.template');
  });
});

Route::group(['prefix' => 'module'], function () {
  Route::get('/', function () {
    return view('module.index');
  });
});
Route::group(['prefix' => 'icon'], function () {
  Route::get('', '\App\Http\Controllers\IconController@view_index');
  Route::get('/{slug}', '\App\Http\Controllers\IconController@view_meta_slug');
});
Route::group(['prefix' => 'spider'], function () {
  Route::get('/content/start/{cid}', '\App\Http\Controllers\SpiderController@view_content_start');
});

// Route::get('content/insert', '');
// Route::get('content/list', '');
// Route::get('content/{cid}', '');
// Route::get('content/update/{cid}', '');

//Route::group(['prefix' => 'user'], function () {
//  Route::get('', '\App\Http\Controllers\UserController@view_content_item');
//});


Route::match(['get', 'post', 'POST'], '/question/content/embody', '\App\Http\Controllers\QuestionController@view_embody');
Route::match(['get'], '/question/content/random', '\App\Http\Controllers\QuestionController@view_content_item');

// Route::match(['get'], '/novel/{field}/{id}', '\App\Http\Controllers\NovelController@view_field_item')->where('field', 'chapter|chapters');
// Route::match(['get'], '/video/{field}/{id}', '\App\Http\Controllers\VideoController@view_field_item')->where('field', 'episode|episodes');
Route::group(['prefix' => 'help'], function () {
  Route::get('/usage', function () {
    return view('help.usage', []);
  });
  Route::get('/development', function () {
    return view('help.development', []);
  });
  Route::get('/templates', function () {
    return view('help.templates', []);
  });
});
Route::group(['prefix' => 'roadmap'], function () {
  Route::get('', function () {
    return view('roadmap.index', []);
  });
  Route::get('/frontend', function () {
    return view('roadmap.frontend', []);
  });
});
Route::group(['prefix' => 'test'], function () {
  Route::get('', function () {
    return view('test.index', []);
  });
});
Route::group(['prefix' => 'wiki'], function () {
  Route::get('', '\App\Http\Controllers\WikiController@view_index');
});
