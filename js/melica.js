window.onload = function() {
	(function ($) {
		var $tip = $('.avatar-title');
		$tip.hide();
		
		$(".avatar-item").hover(
		function(){
			$(this).find(".avatar-title").fadeIn(500); 
		}, function(){
	       	$(this).find(".avatar-title").fadeOut(500);
	    }
		);


		$('.off-canvas-submenu .off-canvas-submenu').hide();
		$('.off-canvas-nav .nolink').hide();
		$('.off-canvas-nav .nolink').next('span').hide();
		$('.off-canvas-submenu .active-trail .off-canvas-submenu').show();
		$('.off-canvas-submenu .active-trail span').text('-');

  		$('.open-sub').click(function() {
    		$(this).next('.off-canvas-submenu .off-canvas-submenu').slideToggle();
   			var $thx = $(this);
  			$thx.text($thx.text() == '+' ? '-' : '+');
  		});
	}
	(jQuery));

	
  
	
}