<?php
$GLOBALS["ROUTER_PARAMS"]["update_script"] = array(
  "post" => array(
    "id" => array(
      "type" => ["int", "string"],
      "required" => true,
    ),
  )
);
$router->addRoute("POST", "/script/update", "update_script");
function update_script($data)
{
  $_data = $data["post"];
  $item = (new scriptController())->select(new scriptModel(array("id" => $_data["id"])))[0];
  $old_item = new scriptModel(array("id" => $_data["id"]));
  $new_item = new scriptModel(array_merge($item, $_data));
  return (new scriptController())->update($old_item, $new_item);
}
