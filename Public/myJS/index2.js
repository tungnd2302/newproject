$(document).ready(function(){
	$("#menu").click(function(){
		$(".navmenu .row").css({
			margin: '0px'
		});
		$(".wrapper").toggleClass('closeWrapper');
		$(".navmenu").toggleClass('vision');
		$(".menu a").toggleClass('vision');
		$(".menu").toggleClass('vision');
	});

	$("#menuclick").click(function() {
			$(".sign-in").toggleClass('open-sign-in');
			$("#menuclick").toggleClass('open-sign-in');
			if(($(".search").hasClass('open-search'))){
				$(".search").removeClass('open-search');
				$("#search").removeClass('open-search');
			}
			if(($(".box-shopping-cart").hasClass('open-cart'))){
				$("#cartclick").removeClass('open-cart');
				$(".box-shopping-cart").removeClass('open-cart');
			}
	});

	$("#search").click(function(){
			$(".search").toggleClass('open-search');
			$("#search").toggleClass('open-search');
			if($(".sign-in").hasClass('open-sign-in')){
				$(".sign-in").removeClass('open-sign-in');
				$('#menuclick').removeClass('open-sign-in');
			}
			if(($(".box-shopping-cart").hasClass('open-cart'))){
				$("#cartclick").removeClass('open-cart');
				$(".box-shopping-cart").removeClass('open-cart');
			}
	});

	$("#cartclick").click(function(){
			$("#cartclick").toggleClass('open-cart');
			$(".box-shopping-cart").toggleClass('open-cart');
			if(($(".search").hasClass('open-search'))){
				$(".search").removeClass('open-search');
				$("#search").removeClass('open-search');
			}
			if($(".sign-in").hasClass('open-sign-in')){
				$(".sign-in").removeClass('open-sign-in');
				$('#menuclick').removeClass('open-sign-in');
			}
	})
		$('.owl-carousel').owlCarousel({
			margin: 10,
			dots: false,
			nav:true,
			responsive:{
				1000:{
					items:4
				},
				992:{
					items:3
				},
				772:{
					items:1
				},
				300:{
					items:1
				}
			}
		})


		// Go to the next item
		$('.customNextBtn').click(function() {
		    owl.trigger('next.owl.carousel');
		})
		// Go to the previous item
		$('.customPrevBtn').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'
		    owl.trigger('prev.owl.carousel', [300]);
		})


		// ==========COMPARE & FILTER========
		$(".btn-compare .btn").click(function(event) {
			$(".filter").toggleClass('filterDisplay');
		});

	

})