
function copyToClipboard() {
  /* Get the text field */
  var copyText = document.getElementById("email-addy");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");
}


$(document).ready(function(){


	
// COPY EMAIL ADDRESS //

$(".email-icon").on( "click", function(){
	$(".email-slide").slideToggle();
});

// REMOVE THE CONTACT IF IT'S ON ANOTHER PAGE //
if ($('#swup').hasClass('swup-page')) {
	$('footer').addClass('hide-contact-on-mobile');
}

	




});


