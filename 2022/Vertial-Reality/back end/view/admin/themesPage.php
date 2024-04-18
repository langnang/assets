<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>主题信息页面</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        // put your code here
        include "../../action/admin/themesPageAction.php";
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
        
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='addTheme.php'class="title-right">添加</a>
            <a href='adminManage.php'class="title-right2">返回</a>
            <form method="post"action="searchTheme.php" name="formName" class="search">
            <input type="text" name="searchtheme" >
            <input type="submit" value="查找主题"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1>主题信息管理</h1>
        <table border="1px" style="cell-spacing:1px">
            <tr>
                <td>ID</td>
                <td>主题名称</td>
                <td>主题细节</td>
                <td>主题日期</td>
                <td>备注</td>
                <td>编辑</td>
            </tr>
             <?php 
                while($array_themes = mysql_fetch_assoc($result))
                {
                    
                    echo "<tr>";
                     echo "<td>".$array_themes["id"]."</td>";
                    echo "<td>".$array_themes["themeName"]."</td>";
                    if($array_themes["themeDetail"]==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_themes["themeDetail"]."</td>";
                    }
                    echo "<td>".substr($array_themes["startDate"], 0,10).'~'.substr($array_themes['endDate'], 0,10)."</td>";    
                    if($array_themes["notes"]==NULL){
                        echo "<td>&nbsp;</td>";
                    }
                    else{
                        echo "<td>".$array_themes["notes"]."</td>";
                    }
                    echo "<td><a href='themeDetails.php?themeid=".$array_themes["id"]."'>编辑</a>&nbsp;<a href='../../action/admin/sureDeleteTheme.php?themeid=".$array_themes["id"]."'>删除</a></td>";
                    echo "</tr>";
                }
                
            ?>
        </table>
        <table>
            <tr>
                <td ><a href="themesPage.php?pagenum=1" >首页</a></td>
                <td ><a href="themesPage.php?pagenum=<?php echo $page==1?1:($page-1)  ?>" >上一页</a></td>
                <td ><a href="themesPage.php?pagenum=<?php echo $page==$endpage?$endpage:($page+1)  ?>" >下一页</a></td>
                <td ><a href="themesPage.php?pagenum=<?php echo $endpage ?>" >尾页</a></td>
            </tr>
        </table>
        </div>
       
    </body>
</html>
