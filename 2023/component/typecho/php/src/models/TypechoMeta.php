<?php
class TypechoMetaModel
{
  public $mid = 0;
  public $name;
  public $slug;
  public $type;
  public $description;
  public $count;
  public $order;
  public $parent;
  function __construct($params)
  {
    $this->mid = (int) (isset($params["mid"]) ? $params["mid"] : 0);
    $this->name = isset($params["name"]) ? $params["name"] : "";
    $this->slug = isset($params["slug"]) ? $params["slug"] : $this->name;
    $this->type = isset($params["type"]) ? $params["type"] : "";
  }
}
