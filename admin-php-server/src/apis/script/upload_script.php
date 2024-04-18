<?php
$GLOBALS["ROUTER_PARAMS"]["upload_script"] = array(
  "files" => array(
    "script" => array(
      "type" => "array",
      "required" => true,
    )
  )
);
$router->addRoute("POST", "/script/upload", "upload_script");
function upload_script($data)
{
  $file = $data["files"]["script"];
  if ($file["type"] !== 'application/json') {
    return "文件类型无效（application/json）";
  }
  $str = file_get_contents($file['tmp_name']);
  $sites = json_decode($str, true);

  $result = array();
  foreach ($sites as $site) {
    $site["id"] = null;
    array_push($result, insert_script(array("post" => $site)));
  }
  return $result;
}
