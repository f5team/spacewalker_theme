jQuery(document).ready(function ($) {
	//submenu for section scroll
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

	//anime
		if($('.home')[0]){
			var path = anime.path('#path');

			var motionPath = anime({
				targets: '#spaceship',
				translateX: path('x'),
				translateY: path('y'),
				rotate: path('angle'),
				easing: 'linear',
				duration: 10000,
				loop: true
			});
		}


});
