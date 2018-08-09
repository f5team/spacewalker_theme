jQuery(document).ready(function ($) {
	$('.subMenu').smint({
		'scrollSpeed' : 1000
	});

	//stickyheader
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

	$(".menu-toggle").on("click", function(){
		$(this).toggleClass("menu-toggle-cross");
	});


});
