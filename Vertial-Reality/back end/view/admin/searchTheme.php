<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>查找主题页面</title>
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
        if($_POST['searchtheme']==NULL){
            $_POST['searchtheme']=="";
        }
        $result= getThemeByThemeName($_POST['searchtheme']);
        $number= getThemeNoByThemeName($_POST['searchtheme']);
        //echo $usernumber;
        // put your code here
        ?>
        <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='addTheme.php'class="title-right">添加</a>
            <a href='themesPage.php?pagenum=1'class="title-right2">返回</a>
            <form method="post"action="searchTheme.php" name="formName" class="search">
            <input type="text" name="searchtheme" placeholder="主题名称">
            <input type="submit" value="查找主题"style="margin-left: 10px;margin-bottom: -3px;">
        </form>
        <h1 >主题查找页面</h1>
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
             if($number==0){
                 echo"<tr><td colspan='11'style='text-align:center;'>没有该主题</td></tr>";
             }
             else{
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
             }
            ?>
        </table>
        </div>
    </body>
</html>
