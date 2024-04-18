<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>用户信息添加</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
         session_start();
         include '../../sql/sqlHelper.php';
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='usersPage.php?pagenum=1'class="title-right">返回</a>
            <h1>用户信息添加</h1>
            <form method="post"  action="" style="border: 0px solid black;"name="formName">
             <table border="1px">
                 <tr>
                     <td>用户名</td>
                     <td><input type="text" name="username" id="username"</td>
                 </tr>
                 <tr>
                     <td>密码</td>
                     <td><input type="text" name="password"id="password"></td>
                 </tr>
                 <tr>
                     <td>性别</td>
                     <td><input type="radio" name="sex" value="1" checked>男 <input type="radio" name="sex" value="0">女</td>
                 </tr>
                 <tr>
                     <td>学校</td>
                     <td><input type="text" name="university"></td>
                 </tr>
                 <tr>
                     <td>学院</td>
                     <td><input type="text" name="college"></td>
                 </tr>
                 <tr>
                     <td>专业</td>
                     <td><input type="text" name="profession"></td>
                 </tr>
                 <tr>
                     <td>学号</td>
                     <td><input type="text" name="userno"></td>
                 </tr>
                 <tr>
                     <td>备注</td>
                     <td><input type="text" name="notes"></td>
                 </tr>
                 <tr>
                     <td colspan="2"><input type="submit" value="添加"onclick="isNull()"></td>
                 </tr>
             </table>
        
        </div>
        <script type="text/javascript">
            function isNull(){
                var user = document.getElementById('username').value;
                var pass = document.getElementById('password').value;
                if (user.length>0 && pass.length>0) 
                {
                    formName.action="../../action/admin/addUserAction.php";
                }else{
                    alert("用户名或密码不可为空");
                    formName.action="addUser.php";
                }
            }
        </script>
    </body>
</html>
