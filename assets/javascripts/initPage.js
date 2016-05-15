$(function(){
	$('.custom-img').matchHeight({
		byRow: true,
		property: 'height',
		target: null,
		remove: false
	});
});

$(document).ready(function(){
	// binds localSroll to all local links
	$.localScroll();

	// show more info on the project on mouseover
	$(".thumb-wrapper").mouseenter(function(){
		$(this).find('.hover-thumb').show();
	});

	// hide info on mouseleave
	$(".thumb-wrapper").mouseleave(function(){
		$(this).find('.hover-thumb').hide();
	});

	// the thumb-wrapper must be set equal to the height of the first image
	// the matchHeight plugin has already taken care of the image heights
	var setHeight = $("#img-1").height();
	$('.thumb-wrapper').height(setHeight);

});