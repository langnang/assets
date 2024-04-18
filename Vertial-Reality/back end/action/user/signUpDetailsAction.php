<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include '../../sql/sqlHelper.php';

 if($_SESSION['id']==""){
        echo "<script> {window.alert('用户未登录，请重新登录！');location.href='../../view/login.php'} </script>";
 return; 
 }
$userid=$_SESSION['id'];
//echo'用户ID：'.$userid.'<br>';

$theme= getThemesNow();