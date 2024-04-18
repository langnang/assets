<?php
$GLOBALS["ROUTER_PARAMS"]["upload_website"] = array(
  "files" => array(
    "website" => array(
      "type" => "array",
      "required" => true,
    )
  )
);
$router->addRoute("POST", "/website/upload", "upload_website");
function upload_website($data)
{
  $file = $data["files"]["website"];
  if ($file["type"] !== 'application/json') {
    return "文件类型无效（application/json）";
  }
  $str = file_get_contents($file['tmp_name']);
  $sites = json_decode($str, true);

  $result = array();
  foreach ($sites as $site) {
    $site["id"] = null;
    array_push($result, insert_website(array("post" => $site)));
  }
  return $result;
}
