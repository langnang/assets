<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>团队信息修改</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
        include '../../action/admin/teamDetailsAction.php';
         //echo '欢迎您：'.$_SESSION['teacher'].'<br>';
    //echo'队长ID：'.$userid.'<br>';
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='teamsPage.php?pagenum=1'class="title-right">返回</a>
            
         <h1>团队信息修改</h1>
         <form method="post"  action=""name="formName">
             <table border="1px">
                  <tr>
                     <td>团队名称</td>
                     <td><input type="text" name="teamname" value="<?php echo $teamname; ?>"id="teamname"></td>
                 </tr>
                  <tr>
                     <td>团队组织</td>
                     <td><input type="text" name="teamgroup"value="<?php echo $teamgroup; ?>"id="teamgroup"></td>
                 </tr>
                  <tr>
                     <td>团队口号</td>
                     <td><input type="text" name="teamslogan"value="<?php echo $teamslogan; ?>"id="teamslogan"></td>
                 </tr>
                  <tr>
                     <td>队长名称</td>
                     <td>
                         <select name="userid" >
                             <?php 
                             while ($array_user = mysql_fetch_array($user)) {
                    //获取所有用户id信息
                    $array_userid=$array_user['id'];
                    //下拉列表的默认选中值用selected='true'
                    if($array_userid==$userid){
                        echo "<option   value=".$array_userid." selected='true'>".$array_user['userName']."</option>";
                    }
                    else{
                        echo "<option value=".$array_userid.">".$array_user['userName']."</option>";
                    }
                }
                ?>
                         </select>
                    </td>
                 </tr>
                  <tr>
                     <td>选择主题</td>
                     <td>
                         <select name="themeid">
                   <?php  
                   while ($array_themes = mysql_fetch_array($themes)) {
                       $array_themesid=$array_themes['id'];
                       $array_themesname=$array_themes['themeName'];
                       if($themeid==$array_themesid){
                           echo "<option   value=".$array_themesid." selected='true'>".$array_themesname."</option>";
                       }
                       else{
                        echo "<option value=".$array_themesid.">".$array_themesname."</option>";
                    }
                   }
                   ?>
                         </select>
                     </td>
                 </tr>
                  <tr>
                      <td colspan="2"><input type="submit" value="修改"onclick="isNull()"></td>
                 </tr>
             </table>
             
        </div>
        <script type="text/javascript">
          function isNull(){
              var name=document.getElementById("teamname").value;
              var group=document.getElementById("teamgroup").value;
              var slogan=document.getElementById("teamslogan").value;
              if(name.length>0 && group.length>0 && slogan.length>0){
            
            formName.action="../../action/admin/updateTeamAction.php";
              }
              else{
                  alert("报名信息不完整，修改失败！");
                  formName.action="teamsPage.php";
              }
          }
      </script>
    </body>
</html>
