<?php
$router->addRoute("GET", "/website/crawler", "render_view", "bootstrap");

function render_view($data)
{
  require_once __DIR__ . $data["url"] . ".php";
}
