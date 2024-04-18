<?php

use Langnang\Component\Template\TemplateModel;

require_once __DIR__ . "/../../modules/mysql/MySQL.php";
require_once __DIR__ . "/../../modules/template/Template.php";

class ScriptModel extends TemplateModel
{
  public $id;
  public $title;
  public $keywords;
  public $description;
  public $language;
  public $content;
  public $parent;
  public $type; // 类别：
  public $status; // 状态
  public $create_time;
  public $update_time;
}


class ScriptController extends MySQLModule
{
  function __construct()
  {
    $config = array_merge($GLOBALS["env_config"]["__cloud__"], $GLOBALS["env_config"]["script"]);
    $config["tbname"] = "script";
    $this->init($config);
  }
  function before_insert($item)
  {
    $item->create_time = date('Y-m-d H:i:s');
    $item->update_time = date('Y-m-d H:i:s');
    return $item;
  }
  function inserted($result, $item)
  {
    return $this->select($item, ["create_time DESC"], 1)[0];
  }

  function before_update($old_item, $new_item)
  {
    $new_item->update_time = date('Y-m-d H:i:s');
    return $new_item;
  }
  function updated($result, $old_item, $new_item)
  {
    $new_item->update_time = null;
    return $this->select(new ScriptModel(["id" => $new_item->id]), ["update_time DESC"], 1)[0];
  }
}
