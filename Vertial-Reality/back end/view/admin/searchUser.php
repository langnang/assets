<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>查找用户页面</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        session_start();
        include '../../sql/sqlHelper.php';
        if($_SESSION['teacher']==""){
            echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
            return;
        }
        if($_POST['searchuser']==NULL){
            $_POST['searchuser']=="";
        }
        $result=  getUserByUserName($_POST['searchuser']);
        $number=  getUserNoByUserName($_POST['searchuser']);
        //echo $usernumber;
        // put your code here
        ?>
        <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
        <a href='addUser.php'class="title-right">添加</a>
        <a href='usersPage.php?pagenum=1'class="title-right2">返回</a>
        <form method="post"action="searchUser.php" name="formName" class="search">
            <input type="text" name="searchuser" placeholder="用户名">
            <input type="submit" value="查找用户"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1 >用户查找页面</h1>
        <table border="1px" style="cell-spacing:1px">
            <tr>
                <td>ID</td>
                <td>用户名</td>
                <td>密码</td>
                <td>性别</td>
                <td>注册日期</td>
                <td>学校</td>
                <td>学院</td>
                <td>专业</td>
                <td>学号</td>
                <td>备注</td>
                <td>编辑</td>
            </tr>
            <?php 
            if($number==0){
                        echo"<tr><td colspan='11'style='text-align:center;'>没有该用户</td></tr>";
                    }else
                    {
                while($array_data = mysql_fetch_assoc($result))
                {
                    
                    
                        echo "<tr>";
                    echo "<td>".$array_data["id"]."</td>";
                    echo "<td>".$array_data["userName"]."</td>";
                    echo "<td>".$array_data["password"]."</td>";
                    if ($array_data["sex"]==1) {
                        echo "<td>男</td>";
                    }
                    else
                    {
                        echo "<td>女</td>";
                    }
                    echo "<td>".substr($array_data["regDate"], 0,10)."</td>";
                    if($array_data['university']==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_data["university"]."</td>";
                    }
                     if($array_data['college']==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_data["college"]."</td>";
                    }
                     if($array_data['profession']==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_data["profession"]."</td>";
                    }
                    echo "<td>".$array_data["userNo"]."</td>";
                     if($array_data['notes']==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_data["notes"]."</td>";
                    }
                    echo "<td><a href='userDetails.php?userid=".$array_data["id"]." ' '>编辑</a>&nbsp;<a  href=' ../../action/admin/sureDeleteUser.php?userid=".$array_data["id"]."  ' >删除</a></td>";
                    echo "</tr>";
                    }
                }
            ?>
            
        </table>
        </div>
        
    </body>
</html>
