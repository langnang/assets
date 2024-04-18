<?php
$GLOBALS["ROUTER_PARAMS"]["upload_phpspider"] = array(
  "files" => array(
    "phpspider" => array(
      "type" => "array",
      "required" => true,
    )
  )
);
$router->addRoute("POST", "/phpspider/upload", "upload_phpspider");
function upload_phpspider($data)
{
  $file = $data["files"]["phpspider"];
  if ($file["type"] !== 'application/json') {
    return "文件类型无效（application/json）";
  }
  $str = file_get_contents($file['tmp_name']);
  $sites = json_decode($str, true);

  $result = array();
  foreach ($sites as $site) {
    $site["id"] = null;
    array_push($result, insert_phpspider(array("post" => $site)));
  }
  return $result;
}
