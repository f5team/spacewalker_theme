jQuery(document).ready(function ($) {
  $(document).scroll(function () {
    var $nav = $(".site-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

	$(".menu-toggle").on("click", function(){
		$(this).css('background', 'red');
		$(this).toggleClass("menu-toggle-cross");
	});
});
