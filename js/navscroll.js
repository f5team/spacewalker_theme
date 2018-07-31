jQuery(document).ready(function ($) {
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

	$(".menu-toggle").on("click", function(){
		$(this).toggleClass("menu-toggle-cross");
	});

	// if($(ellipse).length != 0){
		// $('svg').css('background', 'red');
	// }

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

});
