$(function(){
	$('.pure-img').matchHeight({
		byRow: true,
		property: 'height',
		target: null,
		remove: false
	});
});

$(document).ready(function(){
	// binds localSroll to all local links
	$.localScroll();

	$(".thumb-wrapper").mouseenter(function(){
		$(this).find('.hover-thumb').show();
		// $(this).find('.outer-thumb').hide();
	});

	$(".thumb-wrapper").mouseleave(function(){
		// $(this).find('.outer-thumb').show();
		$(this).find('.hover-thumb').hide();
	});

});