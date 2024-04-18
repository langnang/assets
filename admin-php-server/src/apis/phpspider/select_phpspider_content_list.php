<?php
$GLOBALS["ROUTER_PARAMS"]["select_phpspider_content_list"] = array(
  "post" => array(
    "phpspider" => array(
      "type" => "int",
      "required" => true,
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
      "default" => 10,
    ),
  )
);
$router->addRoute("POST", "/phpspider/content/list", "select_phpspider_content_list");
function select_phpspider_content_list($data)
{
  $_data = $data["post"];
  $item = new PhpSpiderContentModel(array("phpspider" => $_data["phpspider"]));
  return [
    "total" => (new PhpSpiderContentController())->count($item),
    "page" => $_data["page"],
    "size" => $_data["size"],
    "rows" => (new PhpSpiderContentController())->select($item, ["update_time DESC"], $_data["size"], $_data["page"]),
  ];
}
