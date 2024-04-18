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
if($_GET['userid']==""){
    echo "<script> {window.alert('未选择用户数据，请重新选择！');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
        return;
}


//echo '用户id:'.$_GET['userid'].'<br>';
$_SESSION['userid']=$_GET['userid'];
$userid=$_GET["userid"];
//echo  '用户id:'.$userid.'<br>';
$result=  getUser($userid);
while($array_user=  mysql_fetch_assoc($result)){
    $username=$array_user["userName"];
    $password=$array_user["password"];
    $sex=$array_user["sex"];
    //echo'用户性别：'.$sex.'<br>';
    $regdate=$array_user["regDate"];
    $university=$array_user["university"];
    $college=$array_user["college"];
    $profession=$array_user["profession"];
    $userno=$array_user["userNo"];
    $notes=$array_user["notes"];
    
}

