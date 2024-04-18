<?php
$GLOBALS["ROUTER_PARAMS"]["insert_phpspider"] = array(
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
$router->addRoute("POST", "/phpspider/insert", "insert_phpspider");
function insert_phpspider($data)
{
  $_data = $data["post"];
  $item = new PhpSpiderModel($_data);
  return (new PhpSpiderController())->insert($item);
}
