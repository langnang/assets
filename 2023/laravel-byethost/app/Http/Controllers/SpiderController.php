<?php

namespace App\Http\Controllers;

use App\Helpers\PhpSpiderHelper;
use Illuminate\Http\Request;

class SpiderController extends BaseController
{
  use \App\Traits\Modules\SpiderTrait;

  protected $MetaModel = \App\Models\Spider\SpiderMeta::class;
  protected $ContentModel = \App\Models\Spider\SpiderContent::class;
  protected $LinkModel = \App\Models\Spider\SpiderLink::class;

  use SpiderView;

  private function construct_spider($config = [])
  {
    if ($config instanceof $this->ContentModel) {
      $config = $config->toArray();
    }
    // var_dump('construct_spider', [$config]);
    $spider = new PhpSpiderHelper($config);
    /**
     * 爬虫初始化时调用, 用来指定一些爬取前的操作
     */
    $spider->on_start = function ($phpspider) {
      // var_dump('on_start', []);
    };

    /**
     * URL采集前调用
     * 比如有时需要根据某个特定的URL，来决定这次的请求是否使用代理 / 或使用哪个代理
     */
    $spider->on_before_download_page = function ($url, $link, $phpspider) {
      // var_dump('on_before_download_page', []);
    };

    /**
     * 网页状态码回调
     * 判断当前网页是否被反爬虫了, 需要开发者实现
     * @param $status_code 当前网页的请求返回的HTTP状态码
     * @param $url 当前网页URL
     * @param $content 当前网页内容
     * @param $phpspider 爬虫对象
     * @return $content 返回处理后的网页内容，不处理当前页面请返回false
     */
    $spider->on_status_code = function ($status_code, $url, $content, $phpspider) {
      // var_dump('on_status_code', []);
      // 如果状态码为429，说明对方网站设置了不让同一个客户端同时请求太多次
      if ($status_code == '429') {
        // 将url插入待爬的队列中,等待再次爬取
        $phpspider->add_url($url);
        // 当前页先不处理了
        return false;
      }
      // 不拦截的状态码这里记得要返回，否则后面内容就都空了
      return $content;
    };

    /**
     * 判断当前网页是否被反爬虫, 需要开发者实现
     * @param string $url 当前网页的url
     * @param string $content 当前网页内容
     * @param object $phpspider 爬虫对象
     * @return boolean 如果被反爬虫了, 返回true, 否则返回false
     */
    $spider->is_anti_spider = function ($url, $content, $phpspider) {
      // var_dump('is_anti_spider', []);
      // $content中包含"404页面不存在"字符串
      if (strpos($content, "404页面不存在") !== false) {
        // 如果使用了代理IP，IP切换需要时间，这里可以添加到队列等下次换了IP再抓取
        // $phpspider->add_url($url);
        return true; // 告诉框架网页被反爬虫了，不要继续处理它
      }
      // 当前页面没有被反爬虫，可以继续处理
      return false;
    };

    /**
     * 在一个网页下载完成之后调用, 主要用来对下载的网页进行处理
     * @param $page 当前下载的网页页面的对象
     * * @param $page ['url'] 当前网页的URL
     * * @param $page ['raw'] 当前网页的内容
     * * @param $page ['request'] 当前网页的请求对象
     * @param $phpspider 爬虫对象
     * @return object 返回处理后的网页内容
     */
    $spider->on_download_page = function ($page, $phpspider) {
      // var_dump('on_download_page', []);
      return $page;
    };

    /**
     * 在一个attached_url对应的网页下载完成之后调用. 主要用来对分页网页进行处理
     * @param $content 当前下载的网页内容
     * @param $phpspider 爬虫对象
     * @return string 返回处理后的网页内容
     */
    $spider->on_download_attached_page = function ($content, $phpspider) {
      // var_dump('on_download_attached_page', []);
      return $content;
    };

    /**
     * 当前页面抽取到URL
     * @param $url 当前获取到的URL
     * @param $phpspider 爬虫对象
     * @return string 返回处理后的URL，为false则此URL不入采集队列
     */
    $spider->on_fetch_url = function ($url, $phpspider) {
      return true;
    };
    /**
     * URL属于规则
     */
    $spider->on_add_url = function ($url, $link, $phpspider) use ($config) {
      // var_dump('on_add_url', [$url, $link, $config]);
      $this->replace_collect_url_item(new Request(["cid" => $config['cid'], "url" => $link['url'], 'status' => 'collect', 'type' => $link['url_type']]));
      return true;
    };

    /**
     * URL属于入口页
     * 在爬取到入口url的内容之后, 添加新的url到待爬队列之前调用
     * 主要用来发现新的待爬url, 并且能给新发现的url附加数据
     * @param $page 当前下载的网页页面的对象
     * @param $page ['url'] 当前网页的URL
     * @param $page ['raw'] 当前网页的内容
     * @param $page ['request'] 当前网页的请求对象
     * @param $content 当前网页内容
     * @param $phpspider 当前爬虫对象
     * @return boolean 返回false表示不需要再从此网页中发现待爬url
     */
    $spider->on_scan_page = function ($page, $html, $phpspider) {
      // var_dump('on_scan_page', []);
      return true;
    };

    /**
     * URL属于列表页
     * 在爬取到列表页url的内容之后, 添加新的url到待爬队列之前调用
     * 主要用来发现新的待爬url, 并且能给新发现的url附加数据
     * @param $page 当前下载的网页页面的对象
     * @param $page ['url'] 当前网页的URL
     * @param $page ['raw'] 当前网页的内容
     * @param $page ['request'] 当前网页的请求对象
     * @param $content 当前网页内容
     * @param $phpspider 当前爬虫对象
     * @return boolean 返回false表示不需要再从此网页中发现待爬url
     */
    $spider->on_list_page = function ($page, $html, $phpspider) {
      // var_dump('on_list_page', []);
      return true;
    };

    /**
     * URL属于内容页
     * 在爬取到内容页url的内容之后, 添加新的url到待爬队列之前调用
     * 主要用来发现新的待爬url, 并且能给新发现的url附加数据
     * @param $page 当前下载的网页页面的对象
     * @param $page ['url'] 当前网页的URL
     * @param $page ['raw'] 当前网页的内容
     * @param $page ['request'] 当前网页的请求对象
     * @param $content 当前网页内容
     * @param $phpspider 当前爬虫对象
     * @return boolean 返回false表示不需要再从此网页中发现待爬url
     */
    $spider->on_content_page = function ($page, $html, $phpspider) {
      // var_dump('on_content_page', []);
      return true;
    };

    /**
     * 在抽取到field内容之后调用, 对其中包含的img标签进行回调处理
     * @param $fieldname 当前field的name. 注意: 子field的name会带着父field的name, 通过.连接.
     * @param $img 整个img标签的内容
     * @return object 返回处理后的img标签的内容
     */
    // $spider->on_handle_img = function ($fieldname, $data) {
    //     var_dump('on_handle_img', []);
    //     return $data;
    // };

    /**
     * 当一个field的内容被抽取到后进行的回调, 在此回调中可以对网页中抽取的内容作进一步处理
     * @param $fieldname 当前field的name. 注意: 子field的name会带着父field的name, 通过.连接.
     * @param $data 当前field抽取到的数据. 如果该field是repeated, data为数组类型, 否则是String
     * @param $page 当前下载的网页页面的对象
     * @param $page ['url'] 当前网页的URL
     * @param $page ['raw'] 当前网页的内容
     * @param $page ['request'] 当前网页的请求对象
     * @return object 返回处理后的数据, 注意数据类型需要跟传进来的$data类型匹配
     */
    $spider->on_extract_field = function ($fieldname, $data, $page) {
      // var_dump('on_extract_field', []);
      return $data;
    };

    /**
     * 在一个网页的所有field抽取完成之后, 可能需要对field进一步处理, 以发布到自己的网站
     * @param $page 当前下载的网页页面的对象
     * @param $page ['url'] 当前网页的URL
     * @param $page ['raw'] 当前网页的内容
     * @param $page ['request'] 当前网页的请求对象
     * @param $data 当前网页抽取出来的所有field的数据
     * @return object 返回处理后的数据, 注意数据类型需要跟传进来的$data类型匹配
     */
    $spider->on_extract_page = function ($page, $data) use ($config) {
      // var_dump('on_extract_page', [$page, $data]);
      $this->replace_collect_url_item(new Request(["cid" => $config['cid'], "url" => $page['url'], 'status' => 'collected', 'fields' => $data]));
      return $data;
    };

    /**
     * 如果抓取的页面是一个附件文件, 比如图片、视频、二进制文件、apk、ipad、exe
     * 就不去分析他的内容提取field了, 提取field只针对HTML
     */
    $spider->on_attachment_file = function () {
      // var_dump('on_attachment_file', []);
    };
    return $spider;
  }


  // 爬取页面信息
  public function origin(Request $request)
  {
    try {
      $content = $this->select_content_item(new Request(['slug' => "basic_siteinfo"]))->original['data'];
      $_url = $request->url;
      $parse_url = parse_url($_url);
      $content->domains = [$parse_url['host']];
      $content->scan_urls = [$_url];
      $content->content_url_regexes = [$parse_url['scheme'] . '://' . $parse_url['host'] . '/.+'];
      $content->max_depth = 1;
      $spider = $this->construct_spider($content);
      $return = [];
      // $spider->on_add_url = function ($url, $link, $phpspider) use ($_url) {
      //     return $url == $_url;
      // };
      $spider->on_extract_page = function ($page, $data) use (&$return, $content) {
        $this->replace_collect_url_item(new Request(["cid" => $content['cid'], "url" => $page['url'], 'status' => "collected", "fields" => $data]));
        $return = [
          'title' => $data['original_title'],
          'url' => $page['url'],
          'meta_attributess' => $data['meta_attributess'],
          'keywords' => $data['keywords'],
          'description' => $data['description'],
          'link_attributes' => $data['link_attributes'],
          'icons' => $data['icons'],
          'html' => $data['body'],
          'markdown' => html_to_markdown($data['body']),
        ];
        return $return;
      };
      $spider->start();
      return $this->success($return);
    } catch (\Exception $e) {
      return $this->error($e);
    }
  }

  public function run(Request $request)
  {
    $content = $this->select_content_item($request);
    $spider = $this->construct_spider($content);
    $spider->start();
  }

  public function search(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function descover(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function detail(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function catalog(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function content(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function download(Request $request)
  {
    $content = $this->select_content_item($request);
  }

  public function replace_collect_url_item(Request $request)
  {
    try {
      $this->CollectUrlModel::updateOrInsert(['cid' => $request->cid, 'url' => $request->url], $request->all());
    } catch (\Exception $e) {
      return $this->error($e);
    }
  }
}

trait SpiderView
{
  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []));
    $return['$query'] = [
      'contents' => ['type' => 'post_']
    ];
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }

  public function view_content_item(Request $request, $cid = 0)
  {
    $return = array_merge([], $request->input('$return', []));
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request, $cid);
  }

  public function view_content_start(Request $request, $cid)
  {
    // 避免 dump：Cannot modify header information - headers already sent by
    $return = $request->input('$return', []);
    // var_dump(['set_time_limit', disable_functions('set_time_limit')]);
    $request->merge(['$return' => $return]);
    return parent::view_content_item($request, $cid);
  }
}

trait SpiderExecute
{
}

trait SpiderConstruct
{
}
