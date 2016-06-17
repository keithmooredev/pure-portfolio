$(document).ready(function(){
	// binds localSroll to all local links
	$.localScroll();
});

$(window).load(function(){
	
	// make all the thumbnail images the same height
	$('.custom-img').matchHeight({
		byRow: true,
		property: 'height',
		target: null,
		remove: false
	});

	// show more info on mouseover
	$(".thumb-wrapper").mouseenter(function(){
		$(this).find('.hover-thumb').fadeToggle("fast");
	});

	// hide info on mouseleave
	$(".thumb-wrapper").mouseleave(function(){
		$(this).find('.hover-thumb').fadeToggle("fast");
	});

	// set the thumb-wrapper width/height equal to the width/height of one of the images
	var setHeight = $("#img-1").height();
	$('.thumb-wrapper').height(setHeight);

	// when the window is resized, tell matchHeight to update
	$(window).resize(function() {
		$.fn.matchHeight._update();
	});
});