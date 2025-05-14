jQuery(window).on("load", function () {
	$('.slider').fadeIn(1000);
	jQuery('.slider').flexslider({
		animation: "slide",
		prevText: "",
		nextText: "",
		controlNav: false,
		directionNav: true,
		itemWidth: 150,
		itemMargin: 5,
		minItems: 2,
		// maxItems: 4,
		move: 1
	});

  jQuery('.flexslider1').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

  jQuery('.flexslider2').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

  jQuery('.flexslider3').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

  jQuery('.flexslider4').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

  jQuery('.flexslider5').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

  jQuery('.flexslider6').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

  jQuery('.flexslider7').flexslider({
	animation: "slide",
	controlNav: "thumbnails"
  });

});

$(function() {
	$('#qa dt').click(function() {
		$(this).next('dd').slideToggle();
	});
});
