<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>主题信息添加</title>
        <link rel="stylesheet"  type="text/css" href="../../css/admin.css">
    </head>
    <div id="main">
        <?php
         session_start();
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
        <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
        <a href='themesPage.php?pagenum=1'class="title-right">返回</a>
         <h1>主题信息添加</h1>
         <form method="post"  action=""name="formName">
             <table border="1px">
                 <tr>
                     <td>主题名称</td>
                     <td><input type="text" name="themename" id="themename"></td>
                 </tr>
                  <tr>
                     <td>主题细节</td>
                     <td><input type="text" name="themedetail"></td>
                 </tr>
                  <tr>
                     <td>开始日期</td>
                     <td><input type="datetime" name="startdate"value="<?php  echo $showtime1=date("Y-m-d H:i:s"); ?>"></td>
                 </tr>
                  <tr>
                     <td>结束日期</td>
                     <td><input type="datetime"name="enddate" value="<?php  echo $showtime2=date("Y-m-d H:i:s"); ?>"></td>
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
                var theme = document.getElementById('themename').value;
                if (theme.length>0) 
                {
                    formName.action="../../action/admin/addThemeAction.php";
                }else{
                    alert("主题名称不可为空");
                    formName.action="addTheme.php";
                }
            }
        </script>
    </body>
</html>
