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
 
 if($_POST['teamname']==""||$_POST['teamgroup']==""||$_POST['teamslogan']==""){
    echo "<script> {window.alert('添加信息不完整，添加失败');location.href='../../view/user/userManage.php'} </script>";
        return;
}


$userid=$_SESSION['id'];

$teamname=  htmlspecialchars($_POST['teamname']);
$teamgroup=  htmlspecialchars($_POST['teamgroup']);
$teamslogan=  htmlspecialchars($_POST['teamslogan']);
$themeid=  htmlspecialchars($_POST['themeid']);

$_SESSION['teamname']=$teamname;
$_SESSION['teamgroup']=$teamgroup;
$_SESSION['teamslogan']=$teamslogan;
$_SESSION['themeid']=$themeid;

$result=  getTeamNoByTeamName($teamname);

if($result==0){
    $team = new teamClass();
$team->teamname = $teamname;
$team->teamgroup = $teamgroup;
$team->teamslogan=$teamslogan;
$team->userid=$userid;
addTeam($team);
//$teamid=getTeamID($team);
//echo '队伍ID：'.$teamid;
//addSignUp($teamid, $themeid);
echo "<script> {window.alert('报名信息提交中......');location.href='addSignUp.php'} </script>";
}else{
    echo "<script> {window.alert('团队名已存在，团队建立失败');location.href='../../view/user/signUpDetails.php'} </script>";
}

return;;