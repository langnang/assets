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
//$result = getUsers();

//便利循环
//while($array_data = mysql_fetch_assoc($result))
//{
//    
//}

//echo $usernumber;

//用户分页

//
////获取页数,判断是否符合要求  
//$page = intval($_GET['page']);  
//if($page <=0) {$page= 1;}  
//elseif($page > $pagecount){ $page = $pagecount; }  
//  
////定义每页显示的页数：  
//$pageshow = 5;  
//$pagesize = ($page-1) * $pageshow;  
////计算总页数:  
//$numpages = ceil($pagecount/$pageshow);   //向上取整；  
//获得所有用户数量
$usernumber= getUsersNumber();
//每页显示条数
$shownum=20;
//翻页数
$endpage=  ceil($usernumber/$shownum);
//页数常量
$page=$_GET['pagenum'];

//计算分页起始值  
if ($page == "") {  
    $pagesize = 1;  
} else {  
    $pagesize = ($page - 1) * $shownum;  
}  
//调用数据库
$result= getUsersPaging($pagesize, $shownum);