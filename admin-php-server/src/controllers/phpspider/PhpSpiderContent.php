<?php

use Langnang\Component\Template\TemplateModel;

class PhpSpiderContentModel extends TemplateModel
{
  public $id;
  public $phpspider;
  public $url;
  public $title;
  public $content;
  public $create_time;
  public $update_time;

  function getContent()
  {
    return is_null($this->content) ? null : json_decode($this->content, true);
  }
}

class PhpSpiderContentController extends MySQLModule
{
  function __construct()
  {
    $config = array_merge($GLOBALS["env_config"]["__cloud__"], $GLOBALS["env_config"]["phpspider"]);
    $config["tbname"] = $config["prefix"] . "content";
    $this->init($config);
    $this->selected = function ($result, $item, $order, $size, $page) {
      return array_map(function ($value) {
        $_item = new PhpSpiderContentModel($value);
        $_item->content = $_item->getContent();
        return (array)$_item;
      }, $result);
    };
  }
}
