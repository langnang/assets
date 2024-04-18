<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>报名信息审核</title>
        <link rel="stylesheet" type="text/css"  href="../../css/admin.css">
    </head>
    <body>
        <div id="main">
            <?php
         include '../../action/admin/signUpDetailsAction.php';
        //echo '欢迎您：'.$_SESSION['teacher'];
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['teacher']; ?></p>
            <a href='signUpPage.php?pagenum=1'class="title-right">返回</a>
         <h1>报名信息审核</h1>
         <form method="post"  action="../../action/admin/updateSignUpAction.php">
             <table border="1px">
                  <tr>
                     <td>队伍ID</td>
                     <td><?php echo $teamid ?></td>
                 </tr>
                  <tr>
                     <td>状态</td>
                     <td>
                         <input type="radio" name="station"value="2" <?php if($station==2){echo'checked';}else{echo '';}?>  checked>通过
                         <input type="radio" name="station"value="3" <?php if($station==3){echo'checked';}else{echo '';}?> >未通过
                     </td>
                 </tr>
                  <tr>
                     <td>主题ID</td>
                     <td><?php echo $themeid ?></td>
                 </tr>
                  <tr>
                      <td colspan="2"><input type="submit" value="修改"></td>
                 </tr>
             </table>
        </div>
        
    </body>
</html>
