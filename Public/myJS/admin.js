$(document).ready(function(e){
	$(".hide-vertical-menu").mouseover(function(e){
			$(".hide-vertical-menu").animate({marginLeft : '-100%'},function() {
				$(".vertical-menu").css({marginLeft : '0px', display : 'block'});	
			});
			console.log("tung");
	});

	$(".vertical-menu").mouseleave(function(e){
			$(".vertical-menu").hide(function() {
				$(".hide-vertical-menu").css({display : 'block', marginLeft : '0px'});	
			});
			console.log("bong");
	});
	

})