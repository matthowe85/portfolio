$(document).ready(function(){

$( 'a' ).on( 'click', function() {
  if ($('#main.div').hasClass('slide-a')) {
	$(this).removeClass('slide-a');
	$(this).addClass('slide-b');
  }
});




// some kind of transition effect will happen as well
});

