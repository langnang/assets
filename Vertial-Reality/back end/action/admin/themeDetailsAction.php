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
if($_GET['themeid']==""){
    echo "<script> {window.alert('未选择主题数据，请重新选择！');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
        return;
}


//产生一个结果集
$themeid=$_GET['themeid'];
$_SESSION['themeid']=$themeid;
//echo '主题ID：'.$themeid.'<br>';
$result=  getTheme($themeid);
while($array_theme=  mysql_fetch_assoc($result)){
    $themename=$array_theme["themeName"];
    $themedetail=$array_theme["themeDetail"];
    $startdate=$array_theme['startDate'];
    $enddate=$array_theme['endDate'];
    $notes=$array_theme["notes"];
}
