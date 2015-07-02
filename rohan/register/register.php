<?php
include 'connect.php';
?>

<?php
session_start();
$cap = 'notEq'; // This php variable is passed to jquery variable to show alert
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if ($_POST['captcha'] == $_SESSION['cap_code']) 
{
// Captcha verification is Correct. Do something here!
$cap = 'Eq';
} 
else 
{
// Captcha verification is wrong. Take other action
$cap = '';
}
}
?>
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
	#iscpass{
		alignment-adjust:after-edge;
	}
	#iscity{
	}
	</style><link rel="stylesheet" href="style.css" type="text/css" media="all">
<link rel="icon" href="images/fav.jpg" type="image/jpg" sizes="16x16">

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="style.js"></script>	
	<script type="text/javascript" src="State.js"></script>	
    <script type="text/javascript">
    	function validate3(){
		var a = document.getElementById("mobile").value;
		var b = document.getElementById("z_code").value;
		var pattern = /^\d{10}$/;
		if(a == '' || a == null || !pattern.test(a)){
			document.getElementById("ismobile").innerHTML = "Mobile Number is Invalid";
			return false;
		}
		else if(b == null || b == '' ){
			document.getElementById("ismobile").innerHTML = "";
			document.getElementById("isz_code").innerHTML = "Code is required";
			return false;
		}
		else{
			document.getElementById("ismobile").innerHTML = "";
			document.getElementById("isz_code").innerHTML = "";
			 return true;
		}
	}
	function validate4(){
		var a = document.getElementById("email").value;
		var atpos = a.indexOf("@");
		var dotpos = a.indexOf(".");
		
		if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= a.length || a == null){
			document.getElementById("isemail").innerHTML="Email is not valid";
			document.getElementById("pass").disabled=true;
			document.getElementById("cpass").disabled=true;
		}
		else{
			document.getElementById("isemail").innerHTML="";
			document.getElementById("pass").disabled=false;
			document.getElementById("cpass").disabled=false;
		}
	}
    </script>
	<script type="text/javascript">
	$(document).ready(function()
	{
	$(".submit action-button').click(function()
	{
	if( captcha.length == 0){
                        $('#captcha').addClass('error');
                    }
                    else{
                        $('#captcha').removeClass('error');
                    }
					});
					var capch = '<?php echo $cap; ?>';
                if(capch != 'notEq'){
                    if(capch == 'Eq'){
                        $('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000).fadeOut('slow');
                    }else{
                        $('.cap_status').html("Human verification Wrong!").addClass('cap_status_error').fadeIn('slow');
                    }
                }
                
                

            });
			</script>
	
</head>

<body>

<div id="header">
	<div id="header-left">
		<img src="logo.jpg" height="90">
	</div>
</div>
	

<form  id="form" method="post" onsubmit = "return validate3();" action="insert.php" >  
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Personal Details 1</li>
		<li>Personal Details 2</li>
	</ul>
	<!-- fieldsets -->
	<fieldset id="block1">
		<h2 class="fs-title">Create your account</h2>
		
		
		<input type="text" id="email" name="Email" placeholder="Email" oninput = "validate4()"/><span id="isemail"></span>
		
		<input type="password" name="Password" id="pass" placeholder="Password"  /><span id="ispass"></span>
		
		<input type="password" name="CPassword" id="cpass" placeholder="Confirm Password" /><span id="iscpass"></span><br>
		
		<input type="button" name="next" id="next1" class="next action-button" value="Next" />
	</fieldset>
	<fieldset id="block2">
		<h2 class="fs-title">Personal Details1</h2>
		
		<input type="text" name="Name_shop" placeholder="Name of shop" id="name"  /><span id="isname"></span>
		<input type="text" name="Name_owner" placeholder="Name of Shop owner" id="name"  /><span id="isname"></span>
		
		<input type="text" name="DOB" placeholder="DOB(yyyy/mm/dd" id="dob" /><span id="isdob"></span>
		
<textarea name="Address" placeholder="Address" id="address" ></textarea><span id="isaddress"></span>

<br/>
        <select id="country" name="Country"></select>
        <br />
        <select name="State" id="state"></select>
        <br/>
<script language="javascript">
            populateCountries("country", "state");
</script>

<input type="text" name="City" placeholder="City" id="city" /><span id="iscity"></span><br>

		
		<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
		
	</fieldset>
		
	<fieldset id="block3">
		<h2 class="fs-title">Personal Details2</h2>
<input type="text" name="Mobile_no" placeholder="Mobile no."  id="mobile" /><span id="ismobile"></span>

<input type="text" name="A_no" placeholder="Alternate Phone no." id="a_no" />

                <input type="text" name="Zip_code" placeholder="Zip/Postal Code" id="z_code" /><span id="isz_code"></span>
				
		<img src="captcha.php" width="100px"/>
		
		<input type="text" name="captcha" placeholder="Captcha" id="c_code"  />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="Submit" action="submit.php"/>
	</fieldset>
</form>

</body>
<!-- jQuery easing plugin -->
<script src="jquery.easing.min.js" type="text/javascript"></script>
</html>
