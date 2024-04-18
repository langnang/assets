<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <title>用户信息编辑</title>
         <link rel="stylesheet"  type="text/css" href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        include'../../action/admin/userDetailsAction.php';
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='usersPage.php?pagenum=1'class="title-right">返回</a>
         <h1>用户信息编辑</h1>
         <form method="post"  action="../../action/admin/updateUserAction.php" name="formName">
             <table border="1px">
                  <tr>
                     <td>用户名</td>
                     <td><input type="text" name="username" value="<?php echo $username?>"disabled="true"></td>
                 </tr>
                  <tr>
                     <td>密码</td>
                     <td><input type="text" name="password"value="<?php echo $password?>"id="password"></td>
                 </tr>
                  <tr>
                     <td>性别</td>
                     <td><input type="radio" name="sex" value="1" <?php if($sex==1){echo'checked';} ?>>男 <input type="radio" name="sex" value="0"<?php if($sex==0){echo'checked';} ?>>女</td>
                 </tr>
                  <tr>
                     <td>注册日期</td>
                     <td><input type="datetime" name="regdate"value="<?php echo $regdate?>"></td>
                 </tr>
                  <tr>
                     <td>学校</td>
                     <td><input type="text" name="university" value="<?php echo $university?>"></td>
                 </tr>
                  <tr>
                     <td>学院</td>
                     <td><input type="text" name="college" value="<?php echo $college?>"></td>
                 </tr>
                  <tr>
                     <td>专业</td>
                     <td><input type="text" name="profession" value="<?php echo $profession?>"></td>
                 </tr>
                  <tr>
                     <td>学号</td>
                     <td><input type="text" name="userno" value="<?php echo $userno?>"></td>
                 </tr>
                  <tr>
                     <td>备注</td>
                     <td><input type="text" name="notes"value="<?php echo $notes?>"></td>
                 </tr>
                  <tr>
                      <td colspan="2"><input type="submit" value="修改信息"onclick="isNull()"></td>
                 </tr>
             </table>
        </div>
        <script type="text/javascript">
            function isNull(){
                var pass = document.getElementById('password').value;
                if (pass.length>0) 
                {
                    formName.action="../../action/admin/updateUserAction.php";
                }else{
                    alert("密码不可为空");
                    formName.action="usersPage.php?pagenum=1";
                }
            }
        </script>
    </body>
</html>
