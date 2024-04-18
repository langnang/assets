<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include '../../sql/sqlHelper.php';
include '../../model/signupClass.php';
include '../../model/teamClass.php';

if($_SESSION['id']==""){
        echo "<script> {window.alert('用户未登录，请重新登录！');location.href='../../view/login.php'} </script>";
 return; 
 }
 if($_SESSION['themeid']==""){
        echo "<script> {window.alert('报名信息不完整，报名失败！');location.href='../../view/user/userManage.php'} </script>";
        return;
}

 

$userid=$_SESSION['id'];

$teamname=$_SESSION['teamname'];
$teamgroup=$_SESSION['teamgroup'];
$teamslogan=$_SESSION['teamslogan'];
$themeid=$_SESSION['themeid'];


$team = new teamClass();
$team->teamname = $teamname;
$team->teamgroup = $teamgroup;
$team->teamslogan=$teamslogan;
$team->userid=$userid;

$teamid=getTeamID($team);
//echo '队伍ID：'.$teamid;
addSignUp($teamid, $themeid);
unset($_SESSION['themeid']);
echo "<script> {window.alert('报名成功');location.href='../../view/user/userManage.php'} </script>";

return;