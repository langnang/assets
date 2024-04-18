<?php

namespace Langnang\Component;

require_once __DIR__ . '/../../vendor/autoload.php';

use QL\QueryList;


/**
 * class CrawlerComponent
 * @package Component
 * 
 * @method get_html_content 获取页面内容
 * @method set 设置编码
 * @method 递归深度
 * @method 递归长度
 */
class CrawlerComponent
{
  // private $url;
  // private $html;
  // private $fields;
  // public $result = array();
  // private $export;

  function __construct($config)
  {
  }

  static function get_html_content($url)
  {
    return QueryList::get($url);
  }
  function export()
  {
  }
  static function get_fields($html, $fields)
  {
    $result = array();
    foreach ($fields as $field) {
      if ($field["attr"] == 'text') {
        $result[$field["name"]] = $html->find($field["selector"])->{$field["attr"]}();
      } else {
        $result[$field["name"]] = $html->find($field["selector"])->{$field["attr"]};
      }
    }
    return $result;
  }

  static function start($config)
  {
    $html = self::get_html_content($config["url"]);
    $result = self::get_fields($html, $config["fields"]);
    return $result;
  }
  function print()
  {
    return $this->result;
  }
  function get_element_attr()
  {
  }
  function get_element_text()
  {
  }
}
