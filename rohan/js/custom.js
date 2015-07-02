/*var width = $(window).width(); 
if ((width >= 680 )) {
	 $(function() {
	   $("#container").mousewheel(function(event, delta) {
		  this.scrollLeft -= (delta * 30);
		  event.preventDefault();
	   });
	});
}*/
$(document).ready(function(){
	$('.hover').hover(function(){
		$(this).addClass('flip');
	},function(){
		$(this).removeClass('flip');
	});
	$('.hoverv').hover(function(){
		$(this).addClass('flip');
	},function(){
		$(this).removeClass('flip');
	});
	$('#mainer').hoverIntent(function(){
		$('#hide').fadeIn(300);
	},function(){
		$('#hide').hide();
	});
	$('#mainer1').hoverIntent(function(){
		$('#hide1').fadeIn(300);
	},function(){
		$('#hide1').hide();
	});

	$('.click').toggle(function(){
		$(this).addClass('flip');
	},function(){
		$(this).removeClass('flip');
	});

	$('.block .action').click(function(){
		$('.block').addClass('flip');
	});
	$('.block .edit-submit').click(function(e){
		$('.block').removeClass('flip');

		$('#list-title').text($('#form_title').val());
		$('#list-items').empty();
		for (var num = $('#form_items').val(); num >= 1; num--) {
			$('#list-items').append('<li>Super seller</li>');
		}
		e.preventDefault();
	});

	$('.contact .action').click(function(e){
		$('.contact').addClass('flip');
		e.preventDefault();
	});
	$('.contact .edit-submit').click(function(e){
		$('.contact').removeClass('flip');
		e.preventDefault();
	});
});