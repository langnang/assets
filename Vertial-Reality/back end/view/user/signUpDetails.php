<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"  type="text/css" href="../../css/user.css">
    </head>
  <body>
      <div id="main">
          <?php
        include '../../action/user/signUpDetailsAction.php';
        //echo '欢迎您：'.$_SESSION['user'];
        ?>
          <p class="title-left">欢迎您：<?php echo$_SESSION['user']; ?></p>
          <a href='userManage.php'class="title-right">返回</a>
         <h1>报名</h1>
         <form method="post" name="formName"action="../../action/user/addTeam.php">
             <!--action="../../action/user/addTeam.php"-->
             <table border="1px">
                 <tr>
                     <td> 队伍名称</td>
                     <td><input type="text"name="teamname"id="teamname"></td>
                 </tr>
                 <tr>
                     <td>队伍成员</td>
                     <td><input type="text"name="teamgroup"id="teamgroup"></td>
                 </tr>
                 <tr>
                     <td>团队口号</td>
                     <td><input type="text"name="teamslogan"id="teamslogan"></td>
                 </tr>
                 <tr>
                     <td>选择主题</td>
                     <td>
                         <select name="themeid">
                             <?php 
                             while($array_theme = mysql_fetch_assoc($theme)){
                                 echo "<option value=".$array_theme['id'].">".$array_theme["themeName"]."</option>";
                             } 
                             ?>
                         </select>
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2"><input type="submit" value="确定报名"onclick="isNull()"></td>
                     
                 </tr>
             </table>
            
      </div>
      <script type="text/javascript">
          function isNull(){
              var name=document.getElementById("teamname").value;
              var group=document.getElementById("teamgroup").value;
              var slogan=document.getElementById("teamslogan").value;
              if(name.length>0 && group.length>0 && slogan.length>0){
            
            formName.submit();
              }
              else{
                  alert("报名信息不完整，报名失败！");
                  formName.action="signUpDetails.php";
              }
          }
      </script>
            
    </body>
</html>
