<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/userClass.php';

$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$sex=$_POST['sex'];

//echo $username,$password1,$password2,$sex;

$student = new userClass();
    $student->username = $username;
    $student->password = $password1;
    $student->sex = $sex;

$usernumber=  getUserNoByUserName($username);

//echo $usernumber;


if($usernumber!=0){
     echo "<script> {window.alert('注册失败,用户名已存在,请重新注册');location.href='../view/register.php'} </script>";
}
else if($usernumber==0){
    if($password1!=$password2){
         echo "<script> {window.alert('密码不一致,注册失败,请重新注册');location.href='../view/register.php'} </script>";
    }
    else{
        regUser($student);
        echo "<script> {window.alert('注册成功,请登录');location.href='../view/login.php'} </script>";
    }
}

return;;