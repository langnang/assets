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

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_SESSION['userid']==""||$_SESSION['themeid']==""){
        echo "<script> {window.alert('报名信息不完整，报名失败！');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
        return;
}



$userid=$_SESSION['userid'];
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
unset($_SESSION['userid']);
echo "<script> {window.alert('报名成功');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";



return;