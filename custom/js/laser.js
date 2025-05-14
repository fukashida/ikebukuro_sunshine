jQuery(window).on("load", function() {

	jQuery('.flexslider1').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});

	jQuery('.flexslider2').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});

});


$(window).on("load", function () {

//	$('.slider').fadeIn(1000);
	jQuery('.slider').flexslider({
		animation: "slide",
		prevText: "",
		nextText: "",
		controlNav: false,
		directionNav: true,
		itemWidth: 150,
		itemMargin: 5,
		minItems: 2,
		move: 1
	});
	
});


// QA
$(function() {
	$('#faq dl').click(function() {
		$(this).find('dd').slideToggle();
	});
});

