<?php
$GLOBALS["ROUTER_PARAMS"]["select_script_info"] = array(
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
$router->addRoute("POST", "/script/info", "select_script_info");
function select_script_info($data)
{
  $_data = $data["post"];
  if (!array_key_exists("id", $_data) && (!array_key_exists("ids", $_data) || sizeof($_data["ids"]) == 0)) {
    return "缺少必要的参数（id, ids）";
  }

  $item = new scriptModel();
  $item->id = array_merge($_data["ids"], [$_data["id"]]);
  return [
    "total" => (new scriptController())->count($item),
    "rows" => (new scriptController())->select($item),
  ];
}
