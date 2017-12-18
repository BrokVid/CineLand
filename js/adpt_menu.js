$(document).ready(function() {
  $('#adpt_menu').click(function() {
    $('nav ul').slideToggle(500);
  });//end slide toggle

  $(window).resize(function() {
		if (  $(window).width() > 500 ) {
			$('nav ul').removeAttr('style');
		 }
	});//end resize
});//end ready
