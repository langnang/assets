<?php

class TypechoLogModel
{
  public $id;
  public $location; // 定位信息
  public $req_url; // 请求地址
  public $req_param; // 请求参数
  public $rep_date; // 请求时间
  public $res_param; // 响应参数
  public $res_date; // 响应时间
  public $res_status; // 返回状态码
  public $error_msg; // 异常信息
  function __self__construct($params)
  {
    $this->location = array(
      "dir" => $params["dir"],
      "file" => $params["file"],
      "namespace" => $params["namespace"],
      "class" => $params["class"],
      "function" => $params["function"],
      "method" => $params["method"],
      "line" => $params["line"],
    );
  }
}
/**
 * `LOG_ID` int NOT NULL AUTO_INCREMENT COMMENT '日志标识',
  `MOTHOD_NAME` varchar(60) DEFAULT NULL COMMENT '方法名',
  `IP_ADDR` varchar(60) DEFAULT NULL COMMENT '部署应用的IP地址',
  `KEY_ONE` varchar(100) DEFAULT NULL COMMENT '关键字1',
  `KEY_TWO` varchar(100) DEFAULT NULL COMMENT '关键字2',
  `REQ_PARAM` text COMMENT '请求参数',
  `RES_PARAM` text COMMENT '返回参数',
  `REQ_DATE` datetime DEFAULT NULL COMMENT '请求时间',
  `RES_DATE` datetime DEFAULT NULL COMMENT '响应时间',
  `RES_CODE` varchar(300) DEFAULT NULL COMMENT '返回码（1正常，2非正常）',
  `USE_TIME` bigint DEFAULT NULL COMMENT '耗时，单位毫秒',
  `REQ_TYPE` varchar(50) DEFAULT NULL COMMENT '请求类型（IN:调用我方，OUT:我方调用）',
  `REQ_PATH` varchar(600) DEFAULT NULL COMMENT '请求路径',
  `EXCEPTION_MSG` varchar(300) DEFAULT NULL COMMENT '异常信息',
  `PACKAGE_NAME` varchar(60) DEFAULT NULL COMMENT '包名',
  `CLASS_NAME` varchar(300) DEFAULT NULL COMMENT '类名',
  `CREATE_DATE` datetime DEFAULT NULL COMMENT '创建时间',
  `UPDATE_DATE` datetime DEFAULT NULL COMMENT '更新时间',
  `STATUS_CD` int DEFAULT NULL COMMENT '状态',
  `REMARK` varchar(300) DEFAULT NULL COMMENT '备注',
  `CATEGORY_ONE` varchar(60) DEFAULT NULL COMMENT '一级分类',
  `CATEGORY_TWO` varchar(60) DEFAULT NULL COMMENT '二级分类',
 */
