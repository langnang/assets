<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';


$mark=$_POST["mark"];
$state=$_POST["state"];
$mark_old=$_POST["mark_old"];
$state_old=$_POST["state_old"];

echo updateRegisterMark($mark,$state,$mark_old,$state_old);