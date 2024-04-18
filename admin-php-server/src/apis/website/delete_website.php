<?php
$GLOBALS["ROUTER_PARAMS"]["delete_website"] = array(
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
$router->addRoute("POST", "/website/delete", "delete_website");
function delete_website($data)
{
  $_data = $data["post"];
  if (!array_key_exists("id", $_data) && (!array_key_exists("ids", $_data) || sizeof($_data["ids"]) == 0)) {
    return "缺少必要的参数（id, ids）";
  }
  $site = new WebSiteModel();
  $site->id = array_merge($_data["ids"], [$_data["id"]]);
  $total = (new WebSiteController())->count($site);
  (new WebSiteController())->delete($site);
  return [
    "total" => $total,
    "rows" => $site->id
  ];
}
