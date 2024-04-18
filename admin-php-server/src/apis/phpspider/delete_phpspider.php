<?php
$GLOBALS["ROUTER_PARAMS"]["delete_phpspider"] = array(
  "post" => array(
    "id" => array(
      "type" => "int",
    ),
    "ids" => array(
      "type" => "array",
      "required" => true,
      "default" => []
    )
  )
);
/**
 * 
 */
$router->addRoute("POST", "/phpspider/delete", "delete_phpspider");
function delete_phpspider($data)
{
  $_data = $data["post"];
  if (!array_key_exists("id", $_data) && (!array_key_exists("ids", $_data) || sizeof($_data["ids"]) == 0)) {
    return "缺少必要的参数（id, ids）";
  }
  $item = new phpspiderModel();
  $item->id = array_merge($_data["ids"], [$_data["id"]]);
  $total = (new phpspiderController())->count($item);
  (new phpspiderController())->delete($item);
  return [
    "total" => $total,
    "rows" => $item->id
  ];
}
