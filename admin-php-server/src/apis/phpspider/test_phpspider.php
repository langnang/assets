<?php

use phpspider\core\requests;
use phpspider\core\selector;

$router->addRoute("POST", "/phpspider/test", "test_phpspider");

$GLOBALS["ROUTER_PARAMS"]["test_phpspider"] = array(
  "post" => array(
    "scan_urls" => array(
      "type" => "array",
      "required" => true,
    ),
  )
);

/**
 * @param 根据URL爬取网页基本信息
 */
function test_phpspider($data)
{
  $_data = $data["post"];
  $item = new PhpSpiderModel($_data);
  $result = [];
  foreach ($item->scan_urls as $url) {
    $html = requests::get($url);
    if (!$html) {
      array_push($result, null);
      continue;
    }

    $content = new PhpSpiderContentModel(array("url" => $url));
    $title = selector::select($html, "//title");
    $content->title = is_array($title) ? $title[0] : $title;
    $content->content = array();

    foreach ($item->fields as $field) {
      $field = new PhpSpiderFieldModel($field);
      $field_value = selector::select($html, $field->selector);
      if (is_array($field_value) && !$field->repeated) {
        $content->content[$field->name] = $field_value[0];
      } else {
        $content->content[$field->name] = $field_value;
      }
    }
    array_push($result, $content);
  }
  return $result;
}
