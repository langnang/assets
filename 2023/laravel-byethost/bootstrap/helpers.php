<?php

/**
 * 查看禁用函数
 */

use Illuminate\Console\Command;
use Illuminate\Console\OutputStyle;

if (!function_exists('disable_functions')) {
  function disable_functions($func = '')
  {
    $return = explode(',', ini_get('disable_functions'));
    if (empty($func)) return $return;
    return in_array($func, $return);
  }
}

/**
 * Markdown 转 HTML
 */
if (!function_exists('markdonw_to_html')) {
  function markdown_to_html($mark)
  {
    return Parsedown::instance()->text($mark);
  }
}
/**
 * HTML 转 Markdown
 */
if (!function_exists('html_to_markdown')) {
  function html_to_markdown($html)
  {
    $converter = new \League\HTMLToMarkdown\HtmlConverter(['strip_tags' => true]);
    return $converter->convert($html);
  }
}
/**
 * 爬虫获取网页基本信息
 */
if (!function_exists('get_site_info')) {
  function get_site_info($url)
  {
    $return = [
      'url' => $url,
      'raw' => null,
      'title' => null,
      'metas' => null,
      'icons' => null,
    ];
    $html = phpspider\core\requests::get($url);
    $return['raw'] = $html;
    $return['title'] = phpspider\core\selector::select($html, '//head//title');
    $metas = phpspider\core\selector::select($html, '//head//meta');
    if (!empty($metas)) {
      $return['metas'] = [];
      for ($i = 0; $i < count((array)$metas) + 1; $i++) {
        $name = phpspider\core\selector::select($html, "//head//meta[$i]/@name");
        $content = phpspider\core\selector::select($html, "//head//meta[$i]/@content");
        $return['metas'][$name] = $content;
      }
    }
    $return['icons'] = phpspider\core\selector::select($html, "//head//link[contains(@rel,'icon')]/@href");
    return $return;
  }
}
/**
 * 过滤，数据处理
 */
if (!function_exists('filter')) {
  function filter($data, $filters)
  {
  }
}


/**
 * 存储视图变量
 */
if (!function_exists('variable')) {
  function variable($view = null, $data = [], $mergeData = [])
  {
    Storage::put('variables/' . pathinfo($view)['basename'] . '.json', json_encode(array_merge($data, $mergeData), JSON_UNESCAPED_UNICODE));
  }
}
/**
 * 检测是否是 artisan 命令行
 */
if (!function_exists('is_artisan_cli')) {
  function is_artisan_cli()
  {
    return request()->server('PHP_SELF') === 'artisan';
  }
}
if (!function_exists('artisan_dump')) {
  function artisan_dump(...$values)
  {
    if (is_artisan_cli()) {
      foreach ($values as $value) {
        dump($value);
      }
    }
  }
}
if (!function_exists('artisan_echo')) {
  function artisan_echo($message, $func = null)
  {
    if (!empty($func)) $message = "[$func] $message";
    if (is_artisan_cli()) {
      dump("[" . date('Y-m-d H:i:s') . "] " . $message);
    }
  }
}
if (!function_exists('artisan_info')) {
  function artisan_info($message)
  {
    if (is_artisan_cli()) {
    }
  }
}

/**
 * 字符串前拼接
 */
if (!function_exists('str_json_prefix')) {
  function str_join_prefix($str1, $str2)
  {
    return $str2 . $str1;
  }
}
/**
 * 字符串后拼接
 */
if (!function_exists('str_json_suffix')) {
  function str_join_suffix($str1, $str2)
  {
    return $str2 . $str1;
  }
}

/**
 *
 */
if (!function_exists('to_array')) {
  function to_array($value)
  {
    return (array)$value;
  }
}
