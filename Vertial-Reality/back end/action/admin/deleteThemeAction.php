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
if(getThemesNumberByID($_GET['themeid'])==0){
     echo "<script> {window.alert('没有该主题信息，删除失败');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
        return;
}


$themeid=$_GET['themeid'];
//echo '主题ID：'.$themeid;
//根据主题ID获得报名表信息
$signup=  getSignUpByThemeID($themeid);
while ($array_signup = mysql_fetch_array($signup)) {
        deleteTeam($array_signup['teamID']) ;
        deleteSignUp($array_signup['id']);
}
deleteTheme($themeid);
echo "<script> {window.alert('主题信息删除成功');location.href='../../view/admin/themesPage.php?pagenum=1'} </script>";
//header("Location:../view/homePage.php");
return;