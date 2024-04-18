<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include '../../sql/sqlHelper.php';
include '../../model/themeClass.php';

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_POST['themename']==""){
    echo "<script> {window.alert('添加信息不完整，添加失败');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
        return;
}



$themename = htmlspecialchars($_POST['themename']);
$themedetail = htmlspecialchars($_POST['themedetail']);
$startdate=  htmlspecialchars($_POST['startdate']);
$enddate=  htmlspecialchars($_POST['enddate']);
$notes=  htmlspecialchars($_POST['notes']);


$themenumber=  getThemeNoByThemeName($themename);
   //实例化用户对象
$theme = new themeClass();
$theme->themename = $themename;
$theme->themedetail = $themedetail;
$theme->startdate=$startdate;
$theme->enddate=$enddate;
$theme->notes=$notes;

if($themenumber!=0){
        if (count($_POST) > 0) {
   $_POST = array();
}
    echo "<script> {window.alert('主题名称已存在,信息添加失败');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
}
else{
 
//调用数据库操作，写入数据
addTheme($theme);
    if (count($_POST) > 0) {
   $_POST = array();
}
echo "<script> {window.alert('信息添加成功');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
// header("Location:../view/homePage.php");
}

return;