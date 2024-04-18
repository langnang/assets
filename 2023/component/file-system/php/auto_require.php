<?php

/**
 * 自动引入文件
 * @param path String 入口路径
 * @param ignores Array 正则忽略匹配文件名称
 * @param depth 遍历深度 0: 不限制
 */
function auto_require($dir, $ignores = array(), $depth = 0)
{
  print_r($dir . "\n");
  if (false != ($handle = opendir($dir))) {
    while (false !== ($file = readdir($handle))) {
      // 过滤"“.”、“..”
      if ($file != "." && $file != "..") {
        $path = $dir . "/" . $file;
        if (!is_dir($path)) {
          require_once $path;
        } else {
          auto_require($path, $ignores, $depth);
        }
      }
    }
  }
}
