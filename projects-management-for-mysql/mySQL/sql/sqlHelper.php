<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conServer($server,$user,$pwd){
    $con=mysql_connect($server, $user, $pwd);
    mysql_query("set names 'utf8'");
    if(!$con){
        die(("连接服务器失败").mysql_error());
    }
}

function showDatabases(){
    $sql= sprintf("SELECT SCHEMA_NAME FROM information_schema.SCHEMATA ORDER BY SCHEMA_NAME");
    $result =mysql_query($sql);
    if(!$result){
        die(("获取数据库名失败").mysql_error());
    }else{
        return $result;
    }
}

function connectDatabase($database){
    $con= mysql_connect('localhost', 'root', '');
    $db_con=mysql_select_db($database,$con);
    if(!$db_con){
        die(("数据库连接失败").mysql_error());
    }else{
    }
}


function showTables($database){
    $sql= sprintf("SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_schema = '%s' order by table_name",$database);
    $result =mysql_query($sql);
    if(!$result){
        die(("获取表名失败").mysql_error());
    }else{
        return $result;
    }
}

function showColumns($table){
    $sql=sprintf("select COLUMN_NAME from information_schema.columns where table_name='%s'",$table);
    $result =mysql_query($sql);
    if(!$result){
        die(("获取列名失败").mysql_error());
    }else{
        return $result;
    }
}

function getData($table){
    $sql=sprintf("select * from %s ",$table);
    $result =mysql_query($sql);
    if(!$result){
        die(("获取全部数据失败").mysql_error());
    }else{
        return $result;
    }
}