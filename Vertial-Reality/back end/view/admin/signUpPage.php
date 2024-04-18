<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>报名信息页面</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        // put your code here
        include "../../action/admin/signUpPageAction.php";
        //echo '欢迎您：'.$_SESSION['teacher'].'<br>';
        //echo"<a href='adminManage.php'>返回</a>";
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='adminManage.php'class="title-right">返回</a>
            <form method="post"action="searchSignUp.php" name="formName" class="search">
            <input type="text" name="searchsignup" >
            <input type="submit" value="查找报名"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1>报名信息页面</h1>
        <table border="1px" style="cell-spacing:1px">
            <tr>
                <td>ID</td>
                <td>队伍ID</td>
                <td>队伍名称</td>
                <td>状态</td>
                <td>主题ID</td>
                <td>主题名称</td>.
                <td>编辑</td>
            </tr>
             <?php 
                while($array_signup = mysql_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$array_signup["id"]."</td>";
                    echo "<td>".$array_signup["teamID"]."</td>";
                    $team=  getTeam($array_signup['teamID']);
                    while ($array_team = mysql_fetch_array($team)) {
                        echo "<td>".$array_team["teamName"]."</td>";
                    }
                    if($array_signup['station']==1)
                    {echo '<td>未审核</td>';}
                    else if($array_signup['station']==2)
                    {echo '<td>通过</td>';}
                    else{echo '<td>未通过</td>';}
                    echo "<td>".$array_signup["themeID"]."</td>";
                    $theme=  getTheme($array_signup['themeID']);
                    while ($array_theme = mysql_fetch_array($theme)) {
                        echo "<td>".$array_theme["themeName"]."</td>";
                    }
                    echo "<td><a href='signUpDetails.php?signupid=".$array_signup["id"]."'>审核</a>&nbsp;<a href='../../action/admin/sureDeleteSignUp.php?signupid=".$array_signup["id"]."'>删除</a></td>";
                    echo "</tr>";
                }
                
            ?>
        </table>
        <table>
            <tr>
                <td ><a href="signUpPage.php?pagenum=1" >首页</a></td>
                <td ><a href="SignUpPage.php?pagenum=<?php echo $page==1?1:($page-1)  ?>" >上一页</a></td>
                <td ><a href="SignUpPage.php?pagenum=<?php echo $page==$endpage?$endpage:($page+1)  ?>" >下一页</a></td>
                <td ><a href="SignUpPage.php?pagenum=<?php echo $endpage ?>" >尾页</a></td>
            </tr>
        </table>
        </div>
       
    </body>
</html>
