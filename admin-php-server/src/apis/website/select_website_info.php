<?php
$GLOBALS["ROUTER_PARAMS"]["select_website_info"] = array(
  "post" => array(
    "id" => array(
      "desc" => "网站编号",
      "type" => "int",
    ),
    "ids" => array(
      "desc" => "网站编号组",
      "type" => "array",
      "required" => true,
      "default" => []
    )
  )
);
/**
 * 
 */
$router->addRoute("POST", "/website/info", "select_website_info");
function select_website_info($data)
{
  $_data = $data["post"];
  if (!array_key_exists("id", $_data) && (!array_key_exists("ids", $_data) || sizeof($_data["ids"]) == 0)) {
    return "缺少必要的参数（id, ids）";
  }

  $site = new WebSiteModel();
  $site->id = array_merge($_data["ids"], [$_data["id"]]);
  return [
    "total" => (new WebSiteController())->count($site),
    "rows" => (new WebSiteController())->select($site),
  ];
}
