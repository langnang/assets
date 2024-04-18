<?php
$GLOBALS["ROUTER_PARAMS"]["select_website_list"] = array(
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
$router->addRoute("POST", "/website/list", "select_website_list");
function select_website_list($data)
{
  $_data = $data["post"];
  $_data["id"] = null;
  foreach (["url", "title", "keywords", "description"] as $param) {
    if (array_key_exists($param, $_data) && $_data[$param] !== '') {
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
  $site = new WebSiteModel($_data);
  return [
    "total" => (new WebSiteController())->count($site),
    "page" => $_data["page"],
    "size" => $_data["size"],
    "rows" => (new WebSiteController())->select($site, ["update_time DESC"], $_data["size"], $_data["page"]),
  ];
}
