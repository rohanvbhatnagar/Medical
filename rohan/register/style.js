$(document).ready(function(){
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches


$(".next").click(function(){
	var val1 = false, val2 = false , animating = false ;
	if(animating) return false;
	animating = true;
	function validate1(a,b,c){
		var atpos = a.indexOf("@");
		var dotpos = a.indexOf(".");
		
		if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= a.length || a == null){
			document.getElementById("isemail").innerHTML="Email is not valid";
			return false;
		}
		else if(b == '' || b == null){
			document.getElementById("isemail").innerHTML="";
			document.getElementById("ispass").innerHTML="Password is required";
			return false;
		}
		else if(b != c || c == null){
			document.getElementById("isemail").innerHTML="";
			document.getElementById("ispass").innerHTML="";
			document.getElementById("iscpass").innerHTML="Not matched";
			return false;
		}
		else{
			document.getElementById("isemail").innerHTML="";
			document.getElementById("ispass").innerHTML="";
			document.getElementById("iscpass").innerHTML="";
			 return true;
			 
		}
	}
	
	function validate2(a,b,c,d){
		var pattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
		if(a == null || a == ''){
			document.getElementById("isname").innerHTML = "Name is required";
			return false;
		}
		
		else if(b == null || b == '' || !pattern.test(b)){
				document.getElementById("isname").innerHTML = "";
				document.getElementById("isdob").innerHTML = "Invalid date";
				return false;
			}
		else if(c == null || c == ''){
			document.getElementById("isname").innerHTML = "";
				document.getElementById("isdob").innerHTML = "";
			document.getElementById("isaddress").innerHTML = "Address is required";
			return false;
		}
		else if(d == null || d == ''){
			document.getElementById("isname").innerHTML = "";
				document.getElementById("isdob").innerHTML = "";
			document.getElementById("isaddress").innerHTML = "";
			document.getElementById("iscity").innerHTML = "City is required";
			return false;
		}
		else{
			document.getElementById("isname").innerHTML = "";
				document.getElementById("isdob").innerHTML = "";
			document.getElementById("isaddress").innerHTML = "";
			document.getElementById("iscity").innerHTML = "";
			 return true;
		}
	}
	
	
	
	switch($(this).parent().attr("id")){
		case "block1":
			val1 = validate1($("#email").val(),$("#pass").val(),$("#cpass").val());
			break;
		case "block2":
			val2 = validate2($("#name").val(),$("#dob").val(),$("#address").val(),$("#city").val());
			break;
		}
	
	if(!val1 && !val2 )
		return false;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


});