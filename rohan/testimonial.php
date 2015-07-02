<html>
<head>
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
	#center
	{
	height:500px;
	width:900px;
	border:1px solid white;
	margin-top:280px;
	margin-left:200px;
	}
	#center_c
	{
	height:25px;
	width:900px;
	border:1px solid white;
	background-color:white;
	opacity:0.4;
	}
	div #center_c p
	{
	color:brown;
	margin-top:5px;
	font-family:arial;
	margin-left:10px;
	}
	#testi{
	margin-left:100px;
	margin-top:200px;
	color:white;
	}
	#testi span{
	margin-left:5px;
	
	}
	#testi input
	{
	border:1px solid brown;
	
	margin-left:30px;
	height:25px;
	}
	#subject{
	width:300px;
	margin-left:200px;
	}
	#name
	{
	margin-top:5px;
	margin-left:15px;
	width:300px;
	}
	#email{
	margin-top:5px;
	width:300px;
	}
	#test{
	margin-top:500px;
	}
	#testimonial{
	width:400px;
	height:100px;
	margin-top:5px;
	border:1px solid brown;
	}
	#button{
	margin-left:80px;
	margin-top:20px;
	
	</style>
	</head>
	
	<body background="images/aas.jpg">
	<div id="header">
	<div id="header-left">
		<img src="images/logo.jpg" height="90">
	</div>
	</div>
	<div id = "center">
	<div id="center_c">
	<p>Testimonials</p>
	</div>
	
    <div id="testi">
	Subject <span>:*</span><input type="text" name="subject" id="subject"/></br>
	Name <span>:*</span><input type="text" name="name" id="name"/></br>
	E-mail <span>:*</span><input type="text" name="email" id="email" /></br>
	
	<span id="test">Testimonial :*</span><textarea type="text" name="testimonial" id="testimonial"/></textarea></br>
	<div id="button"><a href="#"><img src="images/post.png" height="40px" width="40px"></a></div>
	</div>
	</div>
	</body>
	</html>