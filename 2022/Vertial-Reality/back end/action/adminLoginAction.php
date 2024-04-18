<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
//接收页面参数，并处理
include_once '../sql/sqlHelper.php';
$user =  $_POST["username"];
$pass = $_POST["password"];
//调用数据库查询操作，并接收返回值
$result = isAdmin($user, $pass);
$teacherid=  getTeacherId($user, $pass);
//echo $result.'<br>';
//echo $teacherid.'<br>';
if ($result>0) {
    $_SESSION["teacherid"] = $teacherid;
    $_SESSION['teacher']=$user;
    echo "<script> {window.alert('管理员登录成功');location.href='../view/admin/adminManage.php'} </script>";
    exit();
}
else 
{
    //echo "当前登录用户名或者密码不正确！";
    echo "<script> {window.alert('管理员登录失败,当前登录用户名或者密码不正确！');location.href='../view/login.php'} </script>";
}
//echo $result;

return;