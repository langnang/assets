<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
include '../../model/teacherClass.php';
  if($_SESSION['teacherid']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
//产生一个结果集
$teacherid=$_SESSION['teacherid'];
//echo $teacherid.'<br>';

$password = $_POST['password'];
$sex = $_POST['sex'];
$university=  htmlspecialchars($_POST['university']);
$regdate=  htmlspecialchars($_POST['regdate']);
$college=  htmlspecialchars($_POST['college']);
$profession=  htmlspecialchars($_POST['profession']);
$teacherno=  htmlspecialchars($_POST['teacherno']);
$notes=  htmlspecialchars($_POST['notes']);
//实例化用户对象
$teacher = new teacherClass();
$teacher->password = $password;
$teacher->sex = $sex;
$teacher->regdate=$regdate;
$teacher->college=$college;
$teacher->university=$university;
$teacher->profession=$profession;
$teacher->teacherno=$teacherno;
$teacher->notes=$notes;
//调用数据库操作，写入管理员数据
updateTeacher($teacher,$teacherid);
echo "<script> {window.alert('信息修改成功');location.href='../../view/admin/adminManage.php'} </script>";
//header("Location:../../view/admin/adminManage.php");
return;;