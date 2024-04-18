<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();


include '../../sql/sqlHelper.php';
include '../../model/userClass.php';

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_POST['username']==""||$_POST['password']==""){
    echo "<script> {window.alert('添加信息不完整，添加失败');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
        return;
}
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];
$sex = $_POST['sex'];
$university=  htmlspecialchars($_POST['university']);
$college=  htmlspecialchars($_POST['college']);
$profession=  htmlspecialchars($_POST['profession']);
$userno=  htmlspecialchars($_POST['userno']);
$notes=  htmlspecialchars($_POST['notes']);

$result= getUserNoByUserName($username);

if($result!=0){
    if (count($_POST) > 0) {
   $_POST = array();
}
    echo "<script> {window.alert('添加失败,用户名已存在');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
}
else if($result==0){
    //实例化用户对象
    $student = new userClass();
    $student->username = $username;
    $student->password = $password;
    $student->sex = $sex;
    $student->college=$college;
    $student->university=$university;
    $student->profession=$profession;
    $student->userno=$userno;
    $student->notes=$notes;
    //调用数据库操作，写入学生数据
    addUser($student);
    if (count($_POST) > 0) {
   $_POST = array();
}
    echo "<script> {window.alert('信息添加成功');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
}
return;

// header("Location:../view/homePage.php");