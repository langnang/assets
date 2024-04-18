<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>登录页面</title>
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
        <div class="container">
            <div class="sign-in-w3ls">
                <div class="homeback"><a href="register.php">注册</a></div>
                <div class="alert-close1"></div>
                <h3>登录页面</h3>
                <form  method="post"name="formName"action="">		
                    <!---->
                    <input type="text" class="name" name="username" placeholder="用户名" id="username">
                    <input type="password" class="password" name="password" placeholder="密码" id="password">
                    <ul class="check">
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>记住我</label>
					</li>
				</ul>
                    <a href="#">忘记密码?</a><br>
                    <div class="clear"></div>
                    <input type="submit" value="登录"onclick="isValue()">
                    <input type="submit" value="管理员登录"onclick="isAdmin()">
            </form>
        </div>
            <div class="clear"></div>
		<div class="footer-agilew3">
			<p> 江苏科技大学金舟杯虚拟实景设计大赛</p>
		</div>
            </div>
        
        <script type="text/javascript">
            function isValue()
            {
                var user = document.getElementById('username').value;
                var pass = document.getElementById('password').value;
                if (user.length>0 && pass.length>0) 
                {  
                  formName.action="../action/userLoginAction.php";

                }else{
                    alert("用户名或密码不可为空");
                    formName.action="login.php";
                }
            }
             function isAdmin()
            {
                var user = document.getElementById('username').value;
                var pass = document.getElementById('password').value;
                if (user.length>0 && pass.length>0) 
                {
                    formName.action="../action/adminLoginAction.php";
                    formName.submit();
                }else{
                    alert("用户名或密码不可为空");
                    formName.action="login.php";
                }
            }
        
        </script>
    </body>
</html>
