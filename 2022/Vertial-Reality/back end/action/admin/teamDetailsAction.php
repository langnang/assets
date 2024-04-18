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


//产生一个结果集
$teamid=$_GET['teamid'];
$_SESSION['teamid']=$teamid;
//echo '团队ID：'.$teamid.'<br>';
$result=  getTeam($teamid);
while($array_team=  mysql_fetch_assoc($result)){
    $teamname=$array_team["teamName"];
    $teamgroup=$array_team["teamGroup"];
    $teamslogan=$array_team['teamSlogan'];
    $userid=$array_team["userId"];
    //echo'队长ID：'.$array_team['userId'].'<br>';
    //echo'队长ID：'.$userid.'<br>';
}

//获取所有用户信息
$user = getUsers();
//获取所有主题信息
$themes= getThemesNow();

//根据团队ID获得报名表，获得主题ID,，获得主题名称
//获得团队ID对应报名信息
$signup=  getSignUpByTeamID($teamid);
while ($array_signup = mysql_fetch_array($signup)) {
//获得对应的主题ID
    $themeid=$array_signup['themeID'];
    //获得主题ID对应的主题信息
    $theme=  getTheme($themeid);
    while ($array_theme = mysql_fetch_array($theme)) {
        $themename=$array_theme['themeName'];
    }                   
}
