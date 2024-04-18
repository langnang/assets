<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
include '../../model/themeClass.php';


if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_SESSION['themeid']==""){
    echo "<script> {window.alert('未选择主题数据，请重新选择！');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
        return;
}



//产生一个结果集
$themeid=$_SESSION['themeid'];
//echo '主题ID：'.$themeid.'<br>';

$themename = $_POST['themename'];
$themedetail = $_POST['themedetail'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$notes=  htmlspecialchars($_POST['notes']);
//实例化用户对象
$theme = new themeClass();
$theme->themename = $themename;
$theme->themedetail = $themedetail;
$theme->startdate=$startdate;
$theme->enddate=$enddate;
$theme->notes=$notes;

$themenumber=  getThemeNoByThemeName($themename);

if($themenumber!=0){
    unset($_SESSION['thememid']);
    echo "<script> {window.alert('主题名称已存在,信息修改失败');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
}
else{
 //调用数据库操作，写入管理员数据
updatetheme($theme,$themeid);
unset($_SESSION['thememid']);
echo "<script> {window.alert('信息修改成功');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";

}

return;;
