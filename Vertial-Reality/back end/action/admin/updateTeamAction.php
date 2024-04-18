<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
include '../../model/teamClass.php';
include '../../model/signupClass.php';


if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_SESSION['teamid']==""){
    echo "<script> {window.alert('未选择团队数据，请重新选择！');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
        return;
}



//产生一个结果集
$teamid=$_SESSION['teamid'];
//echo '队伍ID：'.$teamid.'<br>';

$teamname = $_POST['teamname'];
$teamgroup = $_POST['teamgroup'];
$teamslogan = $_POST['teamslogan'];
$userid=  htmlspecialchars($_POST['userid']);

$themeid=$_POST['themeid'];
//echo'主题ID：'.$themeid;

//实例化用户对象
$team = new teamClass();
$team->teamname = $teamname;
$team->teamgroup = $teamgroup;
$team->teamslogan=$teamslogan;
$team->userid=$userid;

$teamnumber=  getTeamNoByTeamName($teamname);
if($teamnumber!=0){
    unset($_SESSION['teamid']);
    echo "<script> {window.alert('团队名称已存在，信息修改失败');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
}
else{
    //调用数据库操作，写入学生数据
updateSignUpThemeIDByTeamID($themeid, $teamid);
updateTeam($team,$teamid);
unset($_SESSION['teamid']);
echo "<script> {window.alert('信息修改成功');location.href='../../view/admin/teamsPage.php?pagenum=1'} </script>";
}

return;

//调用数据库操作，写入管理员数据

//header("Location:../../view/admin/adminManage.php");