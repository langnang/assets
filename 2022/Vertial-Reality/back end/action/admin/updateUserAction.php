<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
include '../../model/userClass.php';


if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_SESSION['userid']==""){
    echo "<script> {window.alert('未选择用户数据，请重新选择！');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
        return;
}



//产生一个结果集
$userid=$_SESSION['userid'];
//echo '用户id为：'.$userid.'<br>';
$password = $_POST['password'];
$sex = $_POST['sex'];
$university=  htmlspecialchars($_POST['university']);
$regdate=  htmlspecialchars($_POST['regdate']);
$college=  htmlspecialchars($_POST['college']);
$profession=  htmlspecialchars($_POST['profession']);
$userno=  htmlspecialchars($_POST['userno']);
$notes=  htmlspecialchars($_POST['notes']);
//实例化用户对象
$student = new userClass();
$student->password = $password;
$student->sex = $sex;
$student->regdate=$regdate;
$student->college=$college;
$student->university=$university;
$student->profession=$profession;
$student->userno=$userno;
$student->notes=$notes;

//调用数据库操作，写入学生数据
updateUser($student,$userid);
unset($_SESSION['userid']);
echo "<script> {window.alert('信息修改成功');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
//header("Location:../view/homePage.php");

return;