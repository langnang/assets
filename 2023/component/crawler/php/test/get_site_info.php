<?php

require_once "./../index.php";

$config = array(
  "url" => "http://www.nipic.com",
  "fields" => array(
    array(
      "name" => "title",
      "selector" => "head>title",
      "attr" => "text",
    ),
    array(
      "name" => "keywords",
      "selector" => "head>meta[name=keywords]",
      "attr" => "content",
    ),
    array(
      "name" => "description",
      "selector" => "head>meta[name=description]",
      "attr" => "content",
    )
  )
);

$data = CrawlerComponent::start($config);
print_r($data);
