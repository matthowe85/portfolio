
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

	// 1. When the email button is clicked, a hidden menu will slide up showing my email address with a copy symbol
	
	// 2. When you click the copy symbol, it will copy my email address to their clipboard
	
	// 3. A little alert will show saying that my email was copied to their clipboard
$(".email-icon").on( "click", function(){
	$(".email-slide").slideToggle();
});

	




});


