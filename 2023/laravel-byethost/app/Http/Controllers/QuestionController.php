<?php

namespace App\Http\Controllers;

use App\Models\Spider\SpiderContent;
use App\Support\Helpers\PhpSpiderHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class QuestionController extends BaseController
{
  use \App\Traits\Modules\QuestionTrait;
  use QuestionEmbody;

  protected $MetaModel = \App\Models\Question\QuestionMeta::class;
  protected $ContentModel = \App\Models\Question\QuestionContent::class;
  protected $LinkModel = \App\Models\Question\QuestionLink::class;

  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []),);
    // $tree = $this->select_meta_tree(new Request(['parent' => 0]));
    // $branches = $this->select_meta_list(new Request(['type' => 'category', 'parent' => 0]));
    $return['counts'] = array_reduce(['radio', 'checkbox', 'switch', 'input', 'markdown', 'code',], function ($total, $type) {
      $total[$type] = $this->select_content_count(new Request(['$whereNotNull' => ['release_at'], 'type' => $type]));
      return $total;
    }, []);
    if (isset($return['content']) || $request->filled('cid')) {
      if (!isset($return['content']) && $request->filled('cid')) {
        $return['content'] = $this->getReturn($this->select_content_item(new Request(['cid' => $request->input('cid')])));
      }
    } else if (!isset($return['contents'])) {
      $return['contents'] = $this->getReturn($this->select_content_list(new Request([
        'title' => $request->input('title'),
        'mid' => $request->input('mid'),
        'mids' => explode(',', $request->input('mids', '')),
        'type' => $request->input('type'),
        'status' => $request->input('status'),
        'page_size' => $request->input('page_size', 30),
        '$order' => ['updated_at'],
      ])));
      unset($return['query']['mid'], $return['query']['mids']);
      // var_dump($return['contents']);
    }
    // $branch = $this->MetaModel::where([['type', 'branch']])->find(1);
    // $categories = $this->MetaModel::with(['children', 'contents'])->where([['type', 'category']])->get();
    // var_dump($branches->toArray());
    // dump($tree->toArray());
    // dump($count);
    // return redirect('/Question/' . $branch->slug);
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }
  public function view_meta_item(Request $request, $mid)
  {
    $contents = $this->select_content_list(new Request([]));
    dump($contents->toArray());
  }
  public function view_meta_slug(Request $request, $slug)
  {
    $branch = $this->select_meta_item(new Request(['slug' => $slug]));
    $tree = $this->select_meta_tree(new Request(['parent' => $branch->mid]));
    return view('question.tree', [
      'tree' => $tree
    ]);
  }
  public function view_content_type(Request $request, $type)
  {
    $content = $this->select_random_content_item(new Request(['type' => $type]));
    // dump($content);
    return view('question.content', [
      'content' => $content,
    ]);
  }
  public function view_embody(Request $request)
  {
    $return = array_merge($request->input('$return', []), [
      "prefix" => $this->prefix ?? 'home',
      "view" => View::exists($this->prefix . '.embody') ? $this->prefix . '.embody' : 'home.embody',
    ]);
    $content = new $this->ContentModel;
    // dump($request->method());
    // dump($request->all());
    if ($request->method() === 'POST') {
      if ($request->input('embody-type') === 'input') {
        $content->fill($request->all());
        if (!empty($content->options)) $content->options = explode('\\r\\n', $content->options);
        $content->save();
      } else if ($request->input('embody-type') === 'url') {
        $source = new SpiderContent();
        $url = $request->input("slug");
        // dump($url);
        $fields = $source->get_source_fields($request->all(), ['_token', 'embody-type', 'url', 'slug']);
        // dump($fields);
        $spider = new PhpSpiderHelper(["fields" => $fields]);
        $values = $spider->unit($url);
        // dump($values);
      } else if ($request->input('embody-type') === 'markdown') {
        $contents = $this->question_embody_markdown($request);
        // dump($contents);
        $contents = $this->insert_content_list(new Request(["data" => $contents]));
        // dump($contents);
      }
    }

    $return["content"] = $content;
    echo "<script>console.log(" . json_encode($return, JSON_UNESCAPED_UNICODE) . ")</script>";
    return view($return['view'], $return);
  }
}

trait QuestionEmbody
{
  function question_embody_markdown(Request $request)
  {
    $text = $request->input('text', '');
    $text = array_filter(explode("\r\n", $text));
    // dump($text);
    // 题目标签
    $title_tag = '';
    foreach (['##### ', '#### ', '### ', '## ', '# ', '**'] as $tag) {
      // dump(stripos($text[0], $tag,));
      if (stripos($text[0], $tag,) === 0) {
        $title_tag = $tag;
        break;
      }
    }
    if (empty($title_tag)) return [];
    // dump($title_tag);
    $return = [];
    // 当前提取的 Qusetion Content
    $item = ['title' => "", 'text' => '', 'type' => "markdown"];
    foreach ($text as $t) {
      if (stripos($t, $title_tag,) === 0) {
        // 插入
        array_push($return, $item);
        // 重置
        $item = ['title' => "", 'text' => '', 'type' => "markdown"];
        if ($title_tag === '**') {
          $t = substr($t, 0, -2);
        }
        $item['title'] = substr($t, strlen($title_tag));
      } else {
        $item['text'] .=  $t . "\r\n";
      }
    }
    // 插入最后一个元素
    array_push($return, $item);
    return array_slice($return, 1);
  }
}
