<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if($_SESSION['teacher']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
if($_GET['userid']==""){
    echo "<script> {window.alert('未选择用户数据，请重新选择！');location.href='../../view/admin/usersPage.php?pagenum=1'} </script>";
        return;
}



echo "<script> if(confirm('确定删除用户信息？')){location.href='deleteUserAction.php?userid=".$_GET['userid']." ';}else{location.href='../../view/admin/usersPage.php?pagenum=1';}</script>";