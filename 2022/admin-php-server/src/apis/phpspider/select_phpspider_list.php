<?php
$GLOBALS["ROUTER_PARAMS"]["select_phpspider_list"] = array(
  "post" => array(
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
$router->addRoute("POST", "/phpspider/list", "select_phpspider_list");
function select_phpspider_list($data)
{
  $_data = $data["post"];
  $_data["id"] = null;
  foreach (["title", "domains"] as $param) {
    if (array_key_exists($param, $_data) && !is_null($_data[$param]) && $_data[$param] !== '') {
      $_data[$param] = "%" . $_data[$param] . "%";
    } else {
      $_data[$param] = null;
    }
  }
  foreach (["status", "type"] as $param) {
    if (array_key_exists($param, $_data) && $_data[$param] == '') {
      $_data[$param] = null;
    }
  }
  $item = new PhpSpiderModel($_data);
  $item->fields = null;
  return [
    "total" => (new PhpSpiderController())->count($item),
    "page" => $_data["page"],
    "size" => $_data["size"],
    "rows" => (new PhpSpiderController())->select($item, ["update_time DESC"], $_data["size"], $_data["page"]),
  ];
}
