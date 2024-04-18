<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include '../../sql/sqlHelper.php';

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_GET['signupid']==""){
    echo "<script> {window.alert('未选择报名数据，请重新选择！');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
        return;
}
if(getSignUpNumberByID($_GET['signupid'])==0){
     echo "<script> {window.alert('没有该报名信息，删除失败');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
        return;
}




$signupid=$_GET['signupid'];
//echo '报名ID：'.$signupid;
//根据报名ID获得队伍ID，删除队伍，删除报名
$signup=  getSignUp($signupid);
while ($array_signup = mysql_fetch_array($signup)) {
    //echo '队伍ID：'.$array_signup['teamID'];
    deleteTeam($array_signup['teamID']);
}
deleteSignUp($signupid);
echo "<script> {window.alert('信息删除成功');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
return;;