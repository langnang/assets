<?php

require_once __DIR__ . "/../../modules/mysql/MySQL.php";
require_once __DIR__ . "/../../modules/template/Template.php";

class PhpSpiderModel
{
  public $id;
  public $title;
  public $domains; // 域名
  public $scan_urls; // 入口链接
  public $list_url_regexes; // 列表页URL规则
  public $content_url_regexes; // 内容页URL规则
  public $fields; // 规则
  public $type; // 类别：
  public $status; // 状态
  public $create_time;
  public $update_time;
  function __construct($data = [])
  {
    foreach ($data as $key => $value) {
      if (is_null($value))  continue;
      if (!property_exists($this, $key)) continue;
      $this->{$key} = $value;
    }
  }
}


class PhpSpiderController extends MySQLModule
{

  function __construct()
  {
    $config = array_merge($GLOBALS["env_config"]["__cloud__"], $GLOBALS["env_config"]["phpspider"]);
    $config["tbname"] = "phpspider";
    $this->init($config);
    $this->before_insert = function ($item) {
      $item->create_time = date('Y-m-d H:i:s');
      $item->update_time = date('Y-m-d H:i:s');
      return $item;
    };

    $this->inserted = function ($result, $item) {
      return $this->select(new PhpSpiderModel(["title" => $item->title]), ["create_time DESC"], 1)[0];
    };
    $this->selected = function ($result, $item, $order, $size, $page) {
      return array_map(function ($v) {
        foreach (["domains", "scan_urls", "list_url_regexes", "content_url_regexes", "fields"] as $name) {
          if (!is_null($v[$name])) {
            // $tmp = $v[$name];
            $v[$name] = json_decode($v[$name], true);
            // if (is_null($v[$name]))  $v[$name] = $tmp;
          }
        }
        $v["content_count"] = (new PhpSpiderContentController())->count(new PhpSpiderContentModel(array("phpspider" => $v["id"])));
        return $v;
      }, $result);
    };

    $this->before_update = function ($old_item, $new_item) {
      $new_item->update_time = date('Y-m-d H:i:s');
      return $new_item;
    };

    $this->updated = function ($result, $old_item, $new_item) {
      $new_item->update_time = null;
      return $this->select(new PhpSpiderModel(["id" => $new_item->id]), ["update_time DESC"], 1)[0];
    };
  }
}

require_once __DIR__ . "/PhpSpiderContent.php";
require_once __DIR__ . "/PhpSpiderField.php";
