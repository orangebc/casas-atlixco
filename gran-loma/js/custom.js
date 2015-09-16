$(window).load(function() {
	$('#slider').nivoSlider({
		slices: 3,
		directionNav: false,
		pauseTime: 2000, 
		startSlide: 0, 
		controlNav: false,
		pauseOnHover: false  
	});
});

(function(){
	// Privacy toggle
	$("#toggled").click( function(){
		$("#privacy").toggle("slideDown");
	})
	
	// Form toggle
	$(".toggle_form").click(function(){
		$("#form").toggle("slideDown");
	})

	// Closing form
	$(".form__close").click(function(){
		$("#form").hide("slideUp");
	})
	
	// Lightbox
	$('.lightbox').nivoLightbox();
	
	// Hover
	$(".imagesOnHover").hover(function(){
		// $(this).attr('data-img') == 'azotea' or 'nivel8'
		// so we end up with $('#azotea').show(), for example.
		$('#' + $(this).attr('data-img')).show("slideDown");
	}, function () {
	  $('#' + $(this).attr('data-img')).hide("slideUp");
	});
})();