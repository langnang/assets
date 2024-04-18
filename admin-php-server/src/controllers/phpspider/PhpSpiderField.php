<?php


class PhpSpiderFieldModel
{
  public $name;
  public $selector;
  public $selector_type = "xpath"; // 抽取规则的类型:xpath, jsonpath, regex
  public $required = false; // 定义该field的值是否必须, 默认false
  public $repeated = false; // 定义该field抽取到的内容是否是有多项, 默认false
  public $children; // 为此field定义子项  子项的定义仍然是一个fields数组
  public $source_type = "url_context"; // 该field的数据源, 默认从当前的网页中抽取数据:url_context, attached_url
  function __construct($data = [])
  {
    foreach ($data as $key => $value) {
      if (is_null($value))  continue;
      if (!property_exists($this, $key)) continue;
      $this->{$key} = $value;
    }
  }
}

class PhpSpiderFieldController
{
}
