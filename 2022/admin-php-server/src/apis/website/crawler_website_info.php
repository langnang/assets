<?php

use phpspider\core\requests;
use phpspider\core\selector;

$router->addRoute("GET", "/website/crawler", "crawler_website_info");

$GLOBALS["ROUTER_PARAMS"]["crawler_website_info"] = array(
  "get" => array(
    "url" => array(
      "desc" => "需要采集数据的网站地址",
      "type" => "string",
      "required" => true,
    ),
  )
);


/**
 * @param 根据URL爬取网页基本信息
 */
function crawler_website_info($data)
{
  $_data = $data["get"];
  $site = new WebSiteModel();
  $site->url = $_data["url"];
  $html = requests::get($site->url);
  if ($html) {
    $title = selector::select($html, "//title");
    if (is_array($title)) {
      $site->title = $title[0];
    } else {
      $site->title = $title;
    }
    $keywords = selector::select($html, "//meta[@name='keywords']/@content");
    if (is_array($keywords)) {
      $site->keywords = $keywords[0];
    } else {
      $site->keywords = $keywords;
    }
    $description = selector::select($html, "//meta[@name='description']/@content");
    if (is_array($description)) {
      $site->description = $description[0];
    } else {
      $site->description = $description;
    }

    $shortcut = selector::select($html, "//link[contains(@rel,'shortcut')]/@href");
    if (is_array($shortcut)) {
      $site->shortcut = $shortcut[0];
    } else {
      $site->shortcut = $shortcut;
    }

    $metas = array();
    $meta_names = selector::select($html, "//meta/@name");
    $meta_contents = selector::select($html, "//meta/@content");
    if (is_array($meta_names)) {
      foreach ($meta_names as $index => $name) {
        $metas[$name] = $meta_contents[$index];
      }
    }
    $site->metas = $metas;
    $links = array();
    $link_rels = selector::select($html, "//link/@rel");
    $link_hrefs = selector::select($html, "//link/@href");
    if (is_array($link_rels)) {
      foreach ($link_rels as $index => $rel) {
        array_push($links, array(
          "rel" => $link_rels[$index],
          "href" => $link_hrefs[$index],
        ));
      }
    }
    $site->links = $links;
  }
  return array_filter((array)$site);
}
