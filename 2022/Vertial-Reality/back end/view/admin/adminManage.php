<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>管理员信息管理</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        include '../../sql/sqlHelper.php';
        session_start();
        $teacherid=$_SESSION['teacherid'];
        if($_SESSION['teacherid']==""){
        echo "<script> {window.alert('管理员未登录，请重新登录！');location.href='../../view/login.php'} </script>";
        return;
}
        $teacher=  getTeacher($teacherid);
        //echo '欢迎您：'.$_SESSION['teacher'];
        //echo$_SESSION['teacherid'];
        ?>
        <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
        <a href='../login.php'class="title-right">返回登录</a>
            <h1 style="text-align: center;">管理员信息管理</h1>
        
        
        
        
                    <table border='1px'>
                        <tr><td colspan="9">用户信息</td></tr>
                        <tr>
                            <td>用户名</td>
                            <td>密码</td>
                            <td>性别</td>
                            <td>注册日期</td>
                            <td>学校</td>
                            <td>学院</td>
                            <td>专业</td>
                            <td>编号</td>
                            <td>备注</td>
                        </tr>
                            <?php
                            while ($array_user = mysql_fetch_array($teacher)) {
                                echo'<tr>';
                                echo'<td>'.$array_user["teacherName"].'<br>';
                                echo'<td>'.$array_user["password"].'<br>';
                                if($array_user['sex']==0){
                                    echo'<td>女</td>';
                                }  else {
                                    echo'<td>男</td>';
                                }
                                echo'<td>'.substr($array_user["regDate"], 0,10).'<br>';
                                echo'<td>'.$array_user["university"].'<br>';
                                echo'<td>'.$array_user["college"].'<br>';
                                echo'<td>'.$array_user["profession"].'<br>';
                                echo'<td>'.$array_user["teacherNo"].'<br>';
                                echo'<td>'.$array_user["notes"].'<br>';
                                echo'</tr>';
                            }
                            ?>
                        <tr>
                        <td colspan="9"><a href="adminDetails.php">信息修改</a></td>
                    </tr>
                    </table>
        
        
        <form method="post"action="" name="formName"style="text-align: center;line-height: 60px;">
            
            <input type="button"value="学生信息管理"onclick="manageUsers()" >
            <input type="button"value="主题信息管理"onclick="manageThemes()">
            <input type="button"value="团队信息管理"onclick="manageTeams()">
            <input type="button"value="报名信息管理"onclick="manageSignUp()">
            
        </form>
        </div>
        
        <script type="text/javascript">
             function manageUsers()
            {
                
                    formName.action="usersPage.php?pagenum=1";
                    formName.submit();
            }
             function manageThemes()
            {
                
                    formName.action="themesPage.php?pagenum=1";
                    formName.submit();
            }
             function manageSignUp()
            {
                
                    formName.action="signUpPage.php?pagenum=1";
                    formName.submit();
            }
             function manageTeams()
            {
                
                    formName.action="teamsPage.php?pagenum=1";
                    formName.submit();
            }
        
        </script>
    </body>
</html>
