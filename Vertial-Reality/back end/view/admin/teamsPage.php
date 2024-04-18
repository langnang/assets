<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>团队信息页面</title>
        <link rel="stylesheet"  type="text/css" href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        // put your code here
        include "../../action/admin/teamsPageAction.php";
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
        
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='addTeam.php'class="title-right">添加</a>
            <a href='adminManage.php?pagenum=1'class="title-right2">返回</a>
            <form method="post"action="searchTeam.php" name="formName" class="search">
            <input type="text" name="searchteam" >
            <input type="submit" value="查找团队"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1>团队信息页面</h1>
        <table border="1px" style="cell-spacing:1px">
            <tr>
                <td>ID</td>
                <td>团队名称</td>
                <td>团队组织</td>
                <td>团队口号</td>
                <td>队长ID</td>
                <td>队长名称</td>
                <td>主题ID</td>
                <td>报名主题</td>
                <td>编辑</td>
            </tr>
             <?php 
                while($array_team = mysql_fetch_assoc($result))
                {
                    
                    echo "<tr>";
                    echo "<td>".$array_team["id"]."</td>";
                    echo "<td>".$array_team["teamName"]."</td>";
                    echo "<td>".$array_team["teamGroup"]."</td>";
                    echo "<td>".$array_team["teamSlogan"]."</td>";
                    echo "<td>".$array_team["userId"]."</td>";
                    //根据用户ID获得用户名称
                    $user=  getUser($array_team['userId']);
                    while ($array_user = mysql_fetch_array($user)) {
                        echo"<td>".$array_user['userName']."</td>";
                    }
                    
                    //根据团队ID获得注册表中主题ID
                    $signup=  getSignUpByTeamID($array_team['id']);
                    while($array_signup=  mysql_fetch_array($signup))
                    {
                        echo"<td>".$array_signup['themeID']."</td>";
                        //根据主题ID获得主题名称
                        $theme=  getTheme($array_signup['themeID']);
                        while($array_theme= mysql_fetch_array($theme))
                        {
                            echo"<td>".$array_theme['themeName']."</td>";
                        }
                    }
                    echo "<td><a href='teamDetails.php?teamid=".$array_team["id"]."'>编辑</a>&nbsp;<a href='../../action/admin/sureDeleteTeam.php?teamid=".$array_team["id"]."'>删除</a></td>";
                    echo "</tr>";
                }
                
            ?>
        </table>
        <table>
            <tr>
                <td ><a href="teamsPage.php?pagenum=1" >首页</a></td>
                <td ><a href="teamsPage.php?pagenum=<?php echo $page==1?1:($page-1)  ?>" >上一页</a></td>
                <td ><a href="teamsPage.php?pagenum=<?php echo $page==$endpage?$endpage:($page+1)  ?>" >下一页</a></td>
                <td ><a href="teamsPage.php?pagenum=<?php echo $endpage ?>" >尾页</a></td>
            </tr>
        </table>
        </div>
       
    </body>
</html>
