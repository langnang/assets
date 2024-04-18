<?php
$GLOBALS["ROUTER_PARAMS"]["select_website_keywords"] = array(
  "post" => array(
    "keyword" => array(
      "type" => "string",
      "required" => true,
      "default" => "",
    ),
    "page" => array(
      "desc" => "页码",
      "type" => "int",
      "required" => true,
      "default" => 1,
    ),
    "size" => array(
      "desc" => "每页条数",
      "type" => "int",
      "required" => true,
      "default" => 9999999,
    ),
  )
);
$router->addRoute("POST", "/website/keywords", "select_website_keywords");
function select_website_keywords($data)
{
  $_data = $data["post"];
  $keywords = (new WebSiteController())->keywords($_data["keyword"]);
  return [
    "total" => sizeof($keywords),
    "rows" => $keywords,
  ];
}
