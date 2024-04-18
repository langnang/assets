<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once '../../sql/sqlHelper.php';
//产生一个结果集
$teacherid=$_SESSION['teacherid'];
//echo '管理员ID：'.$teacherid.'<br>';
$result=  getTeacher($teacherid);
while($array_user=  mysql_fetch_assoc($result)){
    $teachername=$array_user["teacherName"];
    $password=$array_user["password"];
    $sex=$array_user["sex"];
    //echo $sex.'<br>';
    $regdate=$array_user["regDate"];
    $university=$array_user["university"];
    $college=$array_user["college"];
    $profession=$array_user["profession"];
    $teacherno=$array_user["teacherNo"];
    $notes=$array_user["notes"];
    
}
