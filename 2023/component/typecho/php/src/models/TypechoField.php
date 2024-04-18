<?php

class TypechoFieldModel
{
  public $cid;
  public $name;
  public $type = "str";
  public $str_value = "";
  public $int_value = 0;
  public $float_value = 0;
  function __construct($params)
  {
    $this->cid = (int)$params["cid"];
    $this->name = $params["name"];
    if (is_string($params["value"])) {
      $this->type = "str";
      $this->str_value = (string)$params["value"];
    } else if (is_integer($params["value"])) {
      $this->type = "int";
      $this->int_value = (int)$params["value"];
    } else if (is_float($params["value"])) {
      $this->type = "float";
      $this->float_value = (float)$params["value"];
    }
  }
}
