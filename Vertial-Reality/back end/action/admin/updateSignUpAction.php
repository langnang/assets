<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once '../../sql/sqlHelper.php';
include '../../model/signupClass.php';


if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_SESSION['signupid']==""){
    echo "<script> {window.alert('未选择报名数据，请重新选择！');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
        return;
}


//产生一个结果集
$signupid=$_SESSION['signupid'];
//echo '报名ID：'.$signupid.'<br>';
//

$station=  htmlspecialchars($_POST['station']);

//实例化用户对象
$signup = new signupClass();
$signup->station=$station;
//调用数据库操作，写入管理员数据
updateSignUp($signup,$signupid);
unset($_SESSION['signupid']);
echo "<script> {window.alert('信息修改成功');location.href='../../view/admin/signUpPage.php?pagenum=1'} </script>";
//header("Location:../../view/admin/adminManage.php");

return;