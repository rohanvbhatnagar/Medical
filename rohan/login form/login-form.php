<?php
include('connect.php');
include('login.php');
?>
<!DOCTYPE html>
<html>
<style>
#header{
		height:5px;
		width:calc(100% - 200px);
		margin-left:200px;
	}
	#header-left{
		float:left;
		width:400px;
		height:100px;
		display:block;
		background-color:rgba(254,255,215,.6);
		text-align:center;
	}
	#header-left img{
		width:300px;
	}
	</style>
<head>


<body>
<div id="header">
	<div id="header-left">
		<img src="logo.jpg" height="90">
	</div>
	</div>
<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action=""  method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Member Login </h1><!--END TITLE-->
    <span>Available for Pharmacist only.</span>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="Email" type="text" class="input email" value="Email" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="Password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" /></a><!--END LOGIN BUTTON-->
    <a href="../register/register.php"><div class="register" >
	Register</div></a>
    </div>
	
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>