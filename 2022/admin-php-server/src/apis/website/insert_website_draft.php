<?php

$GLOBALS["ROUTER_PARAMS"]["insert_website_draft"] = array(
  "post" => array(
    "url" => array(
      "desc" => "网站地址",
      "type" => "string",
      "required" => true,
    ),
  )
);
$router->addRoute("POST", "/website/insert-draft", "insert_website_draft");

array_push($GLOBALS["apiWhiteList"], "/api/website/insert-draft");

function insert_website_draft($data)
{
  $_data = $data["post"];
  $site = new WebSiteModel($_data);
  $site->type = "draft";
  return (new WebSiteController())->insert($site);
}
