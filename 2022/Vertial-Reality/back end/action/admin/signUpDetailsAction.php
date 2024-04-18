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
if($_GET['signupid']==""){
    echo "<script> {window.alert('未选择报名数据，请重新选择！');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
        return;
}

//产生一个结果集
$signupid=$_GET['signupid'];
$_SESSION['signupid']=$signupid;
//echo '报名ID：'.$signupid.'<br>';
$result=  getSignUp($signupid);
while($array_signup=  mysql_fetch_assoc($result)){
    $teamid=$array_signup["teamID"];
    $station=$array_signup["station"];
    $themeid=$array_signup['themeID'];
}