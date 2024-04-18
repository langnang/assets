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
if(getUsersNumberByID($_GET['userid'])==0){
     echo "<script> {window.alert('没有该用户信息，删除失败');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
        return;
}

$userid=$_GET['userid'];
//echo $userid;
$team= getTeamByUserId($userid);
while ($array_team = mysql_fetch_array($team)) {
    $signup=  getSignUpByTeamID($array_team['id']);
    while ($array_signup = mysql_fetch_array($signup)) {
        deleteSignUp($array_signup['id']);
    }
    deleteTeam($array_team['id']);
    
}
deleteUser($userid);
unset($_GET['userid']);
echo "<script> {window.alert('用户信息删除成功');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
//header("Location:../view/homePage.php");