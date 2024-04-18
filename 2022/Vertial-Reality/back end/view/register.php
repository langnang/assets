<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>注册页面</title>
        
    <link rel="stylesheet" href="../css/style.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Flexible Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="../js/jquery.min.js"></script>
        <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.sign-up-agileinfo').fadeOut('slow', function(c){
                    $('.sign-up-agileinfo').remove();
                });
            });	  
        });
        </script>
        <script>$(document).ready(function(c) {
        $('.alert-close1').on('click', function(c){
            $('.sign-in-w3ls').fadeOut('slow', function(c){
                $('.sign-in-w3ls').remove();
            });
        });
    });
    </script>
    </head>
    <body>
        <h1>虚拟实景设计大赛</h1>
<!--        <a href='login.php'>登录</a>
        <form method="post"  action="../action/registerAction.php">
            请输入用户名：<input type="text" name="username" ><br>
            请输入密码：<input type="password" name="password1"><br>
            请确认密码：<input type="password" name="password2"><br>
            请选择性别： <input type="radio" name="sex" value="1" checked="checked">男 <input type="radio" name="sex" value="0">女<br>
            请输入学校：<input type="text" name="university" ><br>
            请输入学院：<input type="text" name="college" ><br>
            请输入专业：<input type="text" name="profession" ><br>
            请输入学号：<input type="text" name="userno" ><br>
            <input type="submit" value="注册">
        </form>-->
        <div class="container">
		<div class="sign-up-agileinfo">
            <div class="homeback"><a href="login.php">登录</a></div>
			<div class="alert-close"> </div>
			<h3>注册页面</h3>
            <form action="" method="post"name="formName">			
                <input type="text" class="username" name="username" placeholder="用户名" id="username">
				<input type="password" class="password" name="password1" placeholder="密码" id="password1">
                <input type="password" class="password" name="password2" placeholder="重复密码" id="password2">
                                        <input type="radio" name="sex" value="1" checked="checked">男 <input type="radio" name="sex" value="0">女<br>
                                        <input type="submit" value="注册"onclick="isNull()">
			</form>
            
		</div>
            <div class="clear"></div>
		<div class="footer-agilew3">
			<p> 江苏科技大学金舟杯虚拟实景设计大赛</p>
		</div>
	</div>
<script type="text/javascript">
            function isNull()
            {
                var user = document.getElementById('username').value;
                var pass1 = document.getElementById('password1').value;
                var pass2=document.getElementById('password2').value;
                if (user.length>0 && pass1.length>0&&pass2.length>0) 
                {  
     
                    formName.action="../action/registerAction.php";
                }else{
                    alert("注册信息填写不完整，注册失败！");
                    formName.action="register.php";
                }
            }
        </script>
    </body>
</html>
