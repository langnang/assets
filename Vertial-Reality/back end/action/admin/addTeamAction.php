<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include '../../sql/sqlHelper.php';
include '../../model/teamClass.php';

if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_POST['teamname']==""||$_POST['teamgroup']==""||$_POST['teamslogan']==""){
    echo "<script> {window.alert('添加信息不完整，添加失败');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
        return;
}





$teamname = htmlspecialchars($_POST['teamname']);
$teamgroup = htmlspecialchars($_POST['teamgroup']);
$teamslogan = htmlspecialchars($_POST['teamslogan']);
$userid=  htmlspecialchars($_POST['userid']);
$themeid=  htmlspecialchars($_POST['themeid']);

$_SESSION['userid']=$userid;


$_SESSION['teamname']=$teamname;
$_SESSION['teamgroup']=$teamgroup;
$_SESSION['teamslogan']=$teamslogan;
$_SESSION['themeid']=$themeid;


//实例化用户对象
$team = new teamClass();
$team->teamname = $teamname;
$team->teamgroup = $teamgroup;
$team->teamslogan=$teamslogan;
$team->userid=$userid;


$teamnumber=  getTeamNoByTeamName($teamname);

if($teamnumber!=0){
        if (count($_POST) > 0) {
   $_POST = array();
}
    echo "<script> {window.alert('团队名称已存在，报名失败');location.href='../../view/admin/addTeam.php'} </script>";
}
else{
    //调用数据库操作，写入学生数据
addTeam($team);
    if (count($_POST) > 0) {
   $_POST = array();
}
echo "<script> {window.alert('报名信息提交中...');location.href='addSignUpAction.php'} </script>";
}
return;