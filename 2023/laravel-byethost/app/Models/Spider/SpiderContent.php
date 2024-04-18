<?php

namespace App\Models\Spider;

use App\Http\Controllers\SpiderController;
use App\Support\Helpers\PhpSpiderHelper;
use App\Models\Base\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SpiderContent extends Content
{
  use \App\Traits\Modules\SpiderTrait;
  use SpiderSourceDiscover;
  protected $casts = [
    "domains" => "array",
    "scan_urls" => "array",
    "list_url_regexes" => "array",
    "content_url_regexes" => "array",
    "text" => "array",
  ];

  protected $fillable = [
    'title',
    'slug',
    'ico',
    'text',
    'type',
    'status',
    'domains',
    'scan_urls',
    'list_url_regexes',
    'content_url_regexes',
    'export_table',
    'user',
    'parent',
    'count',
    'order',
  ];

  public $spider = null;

  public function setSpider()
  {
    $config = $this->toArray();
    $config['name'] = $config['title'];
    $config['export'] = [
      'type' => 'db',
      'table' => 'news_contents',
      'unique_column' => 'slug',
    ];

    // $config['max_fields'] = 1;
    $config['db_config'] = config('database.connections.mysql');
    $config['db_config']['user'] = $config['db_config']['username'];
    $config['db_config']['pass'] = $config['db_config']['password'];
    $config['db_config']['name'] = $config['db_config']['database'];
    $config['fields'] = array_map(function ($field) {
      return $field['value'];
    }, $config['fields'] ?? []);

    // var_dump($config);
    // var_dump($spider);
    $this->spider = $this->setSpiderCallback($config);
  }

  public function setSpiderCallback($config)
  {
    $spider = new PhpSpiderHelper($config);
    /**
     * 爬虫初始化时调用, 用来指定一些爬取前的操作
     * @param $phpspider
     */
    $spider->on_start = function ($phpspider) use ($config) {
      //      var_dump(['on_start']);
      // 避免历史已采集过，导致程序终止
      $collect_urls = SpiderCollectUrl::where([['cid', $config['cid']], ['status', 'collect']])->paginate(15);
      foreach ($collect_urls->items() as $collect_url) {
        $phpspider->add_url($collect_url['url']);
      }
    };
    /**
     * URL属于规则
     */
    $spider->on_add_url = function ($url, $link, $phpspider) use ($config) {
      //      var_dump(['on_add_url', $url, $link]);
      // 如果存在则检测状态是否是已提取
      $return = SpiderCollectUrl::firstOrCreate(
        ['cid' => $config['cid'], 'url' => $link['url'], 'type' => $link['url_type'], 'deleted_at' => null],
        ['status' => 'collect']
      );
      return $return->status === 'collect';
      //      var_dump($return);
      //      echo ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
      //      flush();
      //      $this->replace_collect_url_item(new Request(["cid" => $config['cid'], "url" => $link['url'], 'status' => 'collect', 'type' => $link['url_type']]));
      //      return true;
    };
    /**
     * URL采集前调用
     * 比如有时需要根据某个特定的URL，来决定这次的请求是否使用代理 / 或使用哪个代理
     * @param $url
     * @param $link
     * @param $phpspider
     */
    $spider->on_before_download_page = function ($url, $link, $phpspider) {
      //      var_dump(['on_before_download_page', $url, $link]);
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
      //      var_dump(['on_status_code', $status_code, $url, $content,]);
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
      //      var_dump(['is_anti_spider', $url, $content,]);
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
    $spider->on_download_page = function ($page, $phpspider) use ($config) {
      SpiderCollectUrl::updateOrInsert(
        ['cid' => $config['cid'], 'url' => $page['url']],
        ['status' => 'collected']
      );
      return $page;
    };

    /**
     * 在一个attached_url对应的网页下载完成之后调用. 主要用来对分页网页进行处理
     * @param $content 当前下载的网页内容
     * @param $phpspider 爬虫对象
     * @return string 返回处理后的网页内容
     */
    $spider->on_download_attached_page = function ($content, $phpspider) {
      //      var_dump(['on_download_attached_page', $content]);
      return $content;
    };

    /**
     * 当前页面抽取到URL
     * @param $url 当前获取到的URL
     * @param $phpspider 爬虫对象
     * @return string 返回处理后的URL，为false则此URL不入采集队列
     */
    $spider->on_fetch_url = function ($url, $phpspider) {
      //      var_dump(['on_fetch_url', $url]);
      $script = '<script>
          updateNumTable("%u", "%u", "%u", "%u", "%u", "%u", "%u", "%u", );
        </script>';
      echo sprintf($script, $phpspider::$collect_scan_urls_num, $phpspider::$collected_scan_urls_num, $phpspider::$collect_list_urls_num, $phpspider::$collected_list_urls_num, $phpspider::$collect_content_urls_num, $phpspider::$collected_content_urls_num, $phpspider::$collect_urls_num, $phpspider::$collected_urls_num);
      echo ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
      flush(); //刷新缓冲区的内容，输出
      return $url;
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
      // var_dump(['on_scan_page', $page, $html,]);
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
      // var_dump(['on_list_page', $page, $html,]);
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
      // var_dump(['on_content_page', $page, $html,]);
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
      // var_dump(['on_extract_field', $fieldname, $data,]);
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
      // var_dump(['on_extract_page', $page, $data]);
      // $this->replace_collect_url_item(new Request(["cid" => $config['cid'], "url" => $page['url'], 'status' => 'collected', 'fields' => $data]));
      $script = '<script>
          prependTableRow(\'%s\');
        </script>';
      echo sprintf($script, json_encode($data, JSON_UNESCAPED_UNICODE));
      echo ob_get_clean(); //获取当前缓冲区内容并清除当前的输出缓冲
      flush(); //刷新缓冲区的内容，输出
      return $data;
    };

    /**
     * 如果抓取的页面是一个附件文件, 比如图片、视频、二进制文件、apk、ipad、exe
     * 就不去分析他的内容提取field了, 提取field只针对HTML
     */
    // $spider->on_attachment_file = function () {
    //   var_dump(['on_attachment_file',]);
    // };
    return $spider;
  }
}
trait SpiderSource
{
}
trait SpiderSourceDiscover
{
  function get_source_fields($text, $expect_keys = [], $replace_array = [])
  {
    $keys = array_filter(array_keys($text), function ($item) use ($expect_keys) {
      return !in_array($item, $expect_keys);
    });
    // 排序
    sort($keys);

    $max_exp_key_nums = array_reduce($keys, function ($max, $item) {
      $size = sizeof(explode("_", $item));
      return $max < $size ? $size : $max;
    }, 0);
    $fields = array_reduce($keys, function ($total, $key) use ($text, $replace_array) {
      $text[$key] = str_replace(array_keys($replace_array), array_values($replace_array), $text[$key]);
      $exps = explode("|", $text[$key]);
      $repeated = false;
      $default = null;
      if (substr($exps[0], 0, 8) === "repeated") {
        $repeated = true;
        $exps[0] = substr($exps[0], 8);
      }
      if (substr($exps[0], 0, 1) === '{') {
        $default = substr($exps[0], 1, strpos($exps[0], '}',) - 1);
        $exps[0] = substr($exps[0], strpos($exps[0], '}',) + 1);
      }
      $total[$key] = [
        "name" => $key,
        "selector" => $exps[0],
        "filter" => implode("|", array_slice($exps, 1)),
        "repeated" => $repeated,
        "default" => $default,
        "children" => []
      ];
      return $total;
    }, []);
    for ($size = $max_exp_key_nums - 1; $size > 0; $size--) {
      foreach ($fields as $key => $field) {
        $exps = explode("_", $key);
        $parent_key = implode("_", array_slice($exps, 0, $size));
        // dump([$key, $field, $parent_key]);
        if (array_key_exists($parent_key, $fields) && $key !== $parent_key) {
          // dump($parent_key);
          $field['name'] = substr($field['name'], strlen($parent_key) + 1);
          // $fields[$parent_key]['repeated'] = true;
          array_push($fields[$parent_key]['children'], $field);
          unset($fields[$key]);
        }
      }
    }
    $fields = array_values($fields);
    return $fields;
  }
  function get_source_discover_urls()
  {
    $_logs = [__METHOD__];
    $text = $this->text;
    if (!isset($this->text['discover'])) return [];
    $discover = $this->text['discover'];
    if (empty($discover['urls'])) {
      $text['discover']['urls'] = array_reduce($discover['groups'] ?? [], function ($total, $group) use ($discover) {
        $return = $total;
        foreach ($group['options'] as $indexOfGroupOption => $itemOfGroupOption) {
          $option = $itemOfGroupOption['label'] ?? $itemOfGroupOption['value'] ?? $itemOfGroupOption;
          if (sizeof($total) === 0) $return[$indexOfGroupOption] = ($option);
          foreach ($total as $indexOfTotal => $itemOfTotal) {
            $return[$indexOfGroupOption . $indexOfTotal] = $itemOfTotal . ' - ' . ($option);
          }
        }
        return $return;
      }, []);
      $text['discover']['urls'] = array_map(function ($item) use ($discover) {
        return $item . '::' . $discover['url'];
      }, $text['discover']['urls']);
      $this->text = $text;
    }
    // var_dump($text);
    return $this->text['discover']['urls'];
  }

  function get_source_discover_url($index = 0)
  {
    $_logs = [__METHOD__, $index];
    $urls = $this->get_source_discover_urls();
    $discover = $this->text['discover'];

    $url = (explode("::", $urls[$index])[1]);
    // dump($url);
    foreach ($discover['groups'] ?? [] as $indexOfGroup => $group) {
      // dump($index[$indexOfGroup] ?? '');
      $url = str_replace('{{' . $group['value'] . '}}', isset($index[$indexOfGroup]) ? $group['options'][$index[$indexOfGroup]]['value'] : ($group['default'] ?? ''), $url);
    }
    return $url;
  }
}