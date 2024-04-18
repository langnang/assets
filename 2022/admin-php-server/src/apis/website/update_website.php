<?php
$GLOBALS["ROUTER_PARAMS"]["update_website"] = array(
  "post" => array(
    "id" => array(
      "desc" => "网站编号",
      "type" => ["int", "string"],
      "required" => true,
    ),
  )
);
$router->addRoute("POST", "/website/update", "update_website");
function update_website($data)
{
  $_data = $data["post"];
  $site = (new WebSiteController())->select(new WebSiteModel(array("id" => $_data["id"])))[0];
  $old_site = new WebSiteModel(array("id" => $_data["id"]));
  $new_site = new WebSiteModel(array_merge($site, $_data));
  return (new WebSiteController())->update($old_site, $new_site);
}
