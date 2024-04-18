<?php

$router->addRoute("GET", "/script/options", "select_script_options");
function select_script_options($data)
{
  return [
    "PhpSpiderModel" => new PhpSpiderModel(),
    "PhpSpiderContentModel" => new PhpSpiderContentModel(),
    "PhpSpiderFieldModel" => new PhpSpiderFieldModel(),
    "type_options" => array(
      "draft" => "草稿",
      "post" => "正文",
    ),
    "status_options" => array(
      // "public" => "公共",
      // "protected" => "受限",
      // "private" => "私有",
      "queue" => "队列",
      "running" => "运行",
      "off" => "停止",
    ),
    "field_selector_type_options" => array(
      "xpath",
      "jsonpath",
      "regex"
    ),
    "field_source_type_options" => array(
      "url_context",
      "attached_url"
    ),
  ];
}
