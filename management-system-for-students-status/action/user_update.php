<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../sql/sqlHelper.php";

$id=$_POST["id"];
$password_old=$_POST["password_old"];
$password=$_POST["password_new"];


//echo $id.$password.$password_old;
echo updateUser($password,$id,$password_old);