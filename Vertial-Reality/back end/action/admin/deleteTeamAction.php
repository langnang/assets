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
if($_GET['teamid']==""){
    echo "<script> {window.alert('未选择团队数据，请重新选择！');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
        return;
}
if(getTeamsNumberByID($_GET['teamid'])==0){
     echo "<script> {window.alert('没有该团队信息，删除失败');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
        return;
}


$teamid=$_GET['teamid'];
//echo '团队ID：'.$teamid.'<br>';
//根据队伍ID获得报名ID，删除报名，删除队伍
$signup=  getSignUpByTeamID($teamid);
while ($array_signup = mysql_fetch_array($signup)) {
    //echo '报名ID：'.$array_signup['id'].'<br>';
    deleteSignUp($array_signup['id']);
}
deleteTeam($teamid);
echo "<script> {window.alert('信息删除成功');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
//header("Location:../view/homePage.php");
return;