<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       <title>用户信息页面</title>
       <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        // put your code here
        include "../../action/admin/userspageAction.php";
       //echo '欢迎您：'.$_SESSION['teacher'].'<br>';
        //echo $_SESSION['teacherid'];
        ?>
        <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
        
        <a href='addUser.php'class="title-right">添加</a>
        <a href='adminManage.php'class="title-right2">返回</a>
        <form method="post"action="searchUser.php" name="formName" class="search">
            <input type="text" name="searchuser" >
            <input type="submit" value="查找用户"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1>用户信息页面</h1>
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
            ?>
            
        </table>
        <table>
            <tr>
                <td ><a href="usersPage.php?pagenum=1" >首页</a></td>
                <td ><a href="usersPage.php?pagenum=<?php echo $page==1?1:($page-1)  ?>" >上一页</a></td>
                <td ><a href="usersPage.php?pagenum=<?php echo $page==$endpage?$endpage:($page+1)  ?>" >下一页</a></td>
                <td ><a href="usersPage.php?pagenum=<?php echo $endpage ?>" >尾页</a></td>
            </tr>
        </table>
        </div>
       
    </body>
</html>
