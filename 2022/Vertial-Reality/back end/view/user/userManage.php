<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>用户信息管理</title>
        <link rel="stylesheet" type="text/css" href="../../css/user.css">
    </head>
    <body>
        <div id="main">
            <?php
        include'../../action/user/userManageAction.php';
        //echo'队伍数量：'.$teamno.'<br>';
        //echo  $showtime=date("Y-m-d H:i:s").'<br>';
        //echo "<a href='../login.php'>返回登录</a>";
        ?>
            <p class="title-left">欢迎您：<?php echo$_SESSION['user']; ?></p>
            <a href='../login.php'class="title-right">返回登录</a>
            <h1>用户信息管理</h1>
            <div style="margin-top: 50px">
                <table border='1px'>
                        <tr><td colspan="9">用户信息</td></tr>
                        <tr>
                            <td>用户名</td>
                            <td>密码</td>
                            <td>性别</td>
                            <td>注册日期</td>
                            <td>学校</td>
                            <td>学院</td>
                            <td>专业</td>
                            <td>学号</td>
                            <td>备注</td>
                        </tr>
                            <?php
                            while ($array_user = mysql_fetch_array($user)) {
                                echo'<tr>';
                                echo'<td>'.$array_user["userName"].'<br>';
                                echo'<td>'.$array_user["password"].'<br>';
                                echo'<td>'.$array_user["sex"].'<br>';
                                echo'<td>'.substr($array_user["regDate"], 0,10).'<br>';
                                echo'<td>'.$array_user["university"].'<br>';
                                echo'<td>'.$array_user["college"].'<br>';
                                echo'<td>'.$array_user["profession"].'<br>';
                                echo'<td>'.$array_user["userNo"].'<br>';
                                echo'<td>'.$array_user["notes"].'<br>';
                                echo'</tr>';
                            }
                            ?>
                        <tr>
                        <td colspan="9"><a href="userDetails.php">信息修改</a></td></tr>
                    </table>
            </div>
                    
            <div style="margin-top: 50px">
                <table border="1px" style="cell-spacing:1px">
                        <tr><td colspan="5"style="text-align: center;">主题信息</td></tr>
                        <tr>
                            <td>主题名称</td>
                            <td>主题细节</td>
                            <td>主题日期</td>
                            <td>备注</td>
                            <td><a href="">更多>></a></td>
                        </tr>
                            <?php 
                            while($array_themes = mysql_fetch_assoc($themes)){
                                echo "<tr>";
                                echo "<td>".$array_themes["themeName"]."</td>";
                                echo "<td>".$array_themes["themeDetail"]."</td>";
                                echo "<td>".substr($array_themes["startDate"], 0,10).'~'.substr($array_themes['endDate'], 0,10)."</td>";
                                echo "<td>".$array_themes["notes"]."</td>";
                                echo "<td><a href='?themeid=".$array_themes["id"]."'>详情</a></td>";
                                echo "</tr>";
                                
                            }
                            ?>
        </table>
            </div>
                    
             <div style="margin-top: 50px">
                <table border="1px" style="cell-spacing:1px">
                <tr><td colspan="5">团队信息</td></tr>
                <tr> 
                    <td>团队名称</td>
                    <td>团队成员</td> 
                    <td>团队口号</td>
                    <td>队长ID</td>
                    <td>审核状态</td>
                </tr>
                
                <?php
                if($teamno==0){
                    echo"<tr><td colspan='5'style='text-align:center;'>未建立队伍</td><tr>";
                }
                else{
                    while ($array_team=  mysql_fetch_assoc($team))
                {
                echo'<tr>';
                echo'<td>'.$array_team['teamName'].'</td>';
                echo'<td>'.$array_team['teamGroup'].'</td>';
                echo'<td>'.$array_team['teamSlogan'].'</td>';
                echo'<td>'.$array_team['userId'].'</td>';
                 //echo'<td>'.$array_team['id'].'</td>';
                 $teamstation=  getSignUpStation($array_team['id']);
                 //echo'<td>'.$teamstation.'</td>';
                 if($teamstation==1){
                    echo '<td>未审核</td>';
                }else if($teamstation==2){
                    echo '<td>通过</td>';
                }
                 else if($teamstation==3){
                    echo '<td>未通过</td>';
                }
                echo'</tr>';
                } 
                }
                
                ?>
                <tr><td colspan="5"style="text-align: center;"><a href="signUpDetails.php">点击报名</a></td></tr>
            </table>
            </div>
            
                

            

        
        </div>
        
    </body>
</html>
