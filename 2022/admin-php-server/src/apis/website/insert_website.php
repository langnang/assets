<?php
$GLOBALS["ROUTER_PARAMS"]["insert_website"] = array(
  "post" => array(
    "url" => array(
      "desc" => "网站地址",
      "type" => "string",
      "required" => true,
    ),
  )
);
$router->addRoute("POST", "/website/insert", "insert_website");
function insert_website($data)
{
  $_data = $data["post"];
  $site = new WebSiteModel($_data);

  return (new WebSiteController())->insert($site);
}
