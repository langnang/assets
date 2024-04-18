<?php
$GLOBALS["ROUTER_PARAMS"]["insert_script"] = array(
  "post" => array(
    "title" => array(
      "desc" => "任务名称",
      "type" => "string",
      "required" => true,
    ),
    "domains" => array(
      "type" => ["array", "null"],
    ),
    "scan_urls" => array(
      "type" => ["array", "null"],
    ),
    "list_url_regexes" => array(
      "type" => ["array", "null"],
    ),
    "content_url_regexes" => array(
      "type" => ["array", "null"],
    ),
    "fields" => array(
      "type" => ["array", "null"],
    ),
  )
);
$router->addRoute("POST", "/script/insert", "insert_script");
function insert_script($data)
{
  $_data = $data["post"];
  $item = new scriptModel($_data);
  return (new scriptController())->insert($item);
}
