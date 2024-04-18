<?php
$GLOBALS["ROUTER_PARAMS"]["update_phpspider"] = array(
  "post" => array(
    "id" => array(
      "type" => ["int", "string"],
      "required" => true,
    ),
  )
);
$router->addRoute("POST", "/phpspider/update", "update_phpspider");
function update_phpspider($data)
{
  $_data = $data["post"];
  $item = (new PhpSpiderController())->select(new PhpSpiderModel(array("id" => $_data["id"])))[0];
  $old_item = new PhpSpiderModel(array("id" => $_data["id"]));
  $new_item = new PhpSpiderModel(array_merge($item, $_data));
  return (new PhpSpiderController())->update($old_item, $new_item);
}
