<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
//产生一个结果集
 if($_SESSION['id']==""){
        echo "<script> {window.alert('用户未登录，请重新登录！');location.href='../../view/login.php'} </script>";
 return;
 
 }
$id=$_SESSION['id'];
//echo '用户ID：'.$id.'<br>';
$user=  getUser($id);
$team= getTeamByUserId($id);
$teamno=  getTeamNo($id);
$themes = getThemesNow();
//echo '队伍数量:'.$teamno.'<br>';

//while($array_user=  mysql_fetch_assoc($user)){
//    $username=$array_user["userName"];
//    $password=$array_user["password"];
//    $sex=$array_user["sex"];
//    echo '用户性别：'.$sex.'<br>';
//    $regdate=$array_user["regDate"];
//    $university=$array_user["university"];
//    $college=$array_user["college"];
//    $profession=$array_user["profession"];
//    $userno=$array_user["userNo"];
//    $notes=$array_user["notes"];
//}


//return $user.$team;