<?php

namespace App\Support\Helpers;

use phpspider\core\requests;

class PhpCrawlerHelper
{
  /**
   * 配置
   */
  public static $configs = array();

  function __construct($config)
  {
    $configs['name'] = isset($configs['name']) ? $configs['name'] : 'phpcrawler';
    self::$configs = $configs;
  }
  function extract_page($url = null)
  {
    $html = requests::get($url);
  }
}
