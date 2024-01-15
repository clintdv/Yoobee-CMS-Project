(function($) {
	'use strict';
	// Navbar Menu JS
	$('.scroll-btn, .navbar .navbar-nav li a').on('click', function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - 0
		}, 1000);
		e.preventDefault();
	});
	$('.navbar .navbar-nav li a').on('click', function(){
		$('.navbar-collapse').collapse('hide');
	});

	// Menu Icon JS
	$(".menu-icon").on('click', function(){
		$(".menu-icon").toggleClass("active")
	})
	$(".menu-icon").on('click', function(){
		$(".sidebar").toggleClass("active")
	})
	
	// Preloader JS
	$(window).on('load', function() {
		$('.preloader').fadeOut();
	});

	// WOW Animation JS
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	};

	$('.slider').owlCarousel({
		loop:true,
		items:3,
		margin:0,
		autoplay:true,
		center:true,
		stagePadding:0,
		nav:true,
		dots:false,
		autoHeight:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});
	

	
	$(function() {
	var header = $(".header");
  
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 73) {
			header.addClass("scrolled");
		} else {
			header.removeClass("scrolled");
		}
	});
});	
	
})(jQuery);
