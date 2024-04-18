<?php

// 生产环境
if (strpos($_SERVER["HTTP_HOST"], "1.15.182.152") !== false) {
  $_ENV["ENVIRONMENT"] = "PRODUCTION";
  define("ENV_CONFIG", __DIR__ . "/../../.env.production");
  $env_config = parse_ini_file(ENV_CONFIG, true);
}
// 预览、测试环境
else if (strpos($_SERVER["HTTP_HOST"], "106.13.199.4") !== false || (!is_null($argv) && strpos($argv[3], "106.13.199.4"))) {
  $_ENV["ENVIRONMENT"] = "PREVIEW";
  define("ENV_CONFIG", __DIR__ . "/../../.env.preview");
  $env_config = parse_ini_file(ENV_CONFIG, true);
}
// 开发环境
else if (strpos($_SERVER["HTTP_HOST"], "220.248.58.129") !== false || (!is_null($argv) && strpos($argv[3], "220.248.58.129"))) {
  $_ENV["ENVIRONMENT"] = "DEVELOPMENT";
  define("ENV_CONFIG", __DIR__ . "/../../.env.development");
  $env_config = parse_ini_file(ENV_CONFIG, true);
}
// 本地
else {
  $_ENV["ENVIRONMENT"] = "DEVELOPMENT.LOCAL";
  define("ENV_CONFIG", __DIR__ . "/../../.env.development");
  $env_config = parse_ini_file(ENV_CONFIG, true);
  $env_config["__cloud__"] = array_merge($env_config["__cloud__"], isset($env_config["__local__"]) ? $env_config["__local__"] : array());
}

$env_config = array_merge(parse_ini_file(__DIR__ . "/../../.env", true), $env_config);
