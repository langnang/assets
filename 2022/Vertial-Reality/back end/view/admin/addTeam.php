<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>团队信息添加</title>
        <link rel="stylesheet"  type="text/css" href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        session_start();
        include '../../sql/sqlHelper.php';
        // include '../../action/admin/usersIdAction.php';
         //echo '欢迎您：'.$_SESSION['teacher'];
         $result = getUsers();
         $theme= getThemesNow();
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='teamsPage.php?pagenum=1'class="title-right">返回</a>
         <h1>团队信息添加</h1>
         <form method="post"  action=""name="formName">
             <table border="1px">
                 <tr>
                     <td>团队名称</td>
                     <td><input type="text" name="teamname" id="teamname"></td>
                 </tr>
                 <tr>
                     <td>团队组织</td>
                     <td><input type="text" name="teamgroup" id="teamgroup"></td>
                 </tr>
                 <tr>
                     <td>团队口号</td>
                     <td><input type="text" name="teamslogan"id="teamslogan"></td>
                 </tr>
                 <tr>
                     <td>队长名称</td>
                     <td>
                         <select name="userid" >
                             <?php 
                             while($array_userid = mysql_fetch_assoc($result)){
                                 echo "<option value=".$array_userid['id'].">".$array_userid["userName"]."</option>";} 
                                 ?>
                         </select>
                     </td>
                 </tr>
                 <tr>
                     <td>选择主题</td>
                     <td><select name="themeid">
                         <?php 
                         while($array_theme = mysql_fetch_assoc($theme)){
                             echo "<option value=".$array_theme['id'].">".$array_theme["themeName"]."</option>";} 
                             ?>
                         </select>
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2"><input type="submit" value="添加"onclick="isNull()"></td>

                 </tr>
             </table>
            
        </div>
        <script type="text/javascript">
          function isNull(){
              var name=document.getElementById("teamname").value;
              var group=document.getElementById("teamgroup").value;
              var slogan=document.getElementById("teamslogan").value;
              if(name.length>0 && group.length>0 && slogan.length>0){
            
            formName.action="../../action/admin/addTeamAction.php";
              }
              else{
                  alert("报名信息不完整，报名失败！");
                  formName.action="addTeam.php";
              }
          }
      </script>
    </body>
</html>
