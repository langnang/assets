<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}


//产生一个结果集
//$result = getSignUps();
//便利循环
//while($array_data = mysql_fetch_assoc($result))
//{
//    
//}
$signupnumber=  getSignUpNumber();
//每页显示条数
$shownum=20;
//翻页数
$endpage=  ceil($signupnumber/$shownum);
//页数常量
$page=$_GET['pagenum'];

//计算分页起始值  
if ($page == "") {  
    $pagesize = 1;  
} else {  
    $pagesize = ($page - 1) * $shownum;  
}  
//调用数据库
$result= getSignUpPaging($pagesize, $shownum);