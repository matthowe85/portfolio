<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Matthew Howe</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="/js/global.js"></script>
	<script src="https://kit.fontawesome.com/d296c07018.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	
</head>
<body>
	<main id="swup" class="transition-fade">
		<div id="page" class="not-front container portfolio-page container-fluid">
			<div class="row">
				<div class="col-4 card ea">
					<div class="screenshot"></div>
					<div class="url"><a>Emerging America</a></div>
				</div>
				<div class="col-4 card dys">
					<div class="screenshot"></div>
					<div class="url"><a>DYS Post Secondary Guides</a></div>
				</div>
				<div class="col-4 card int">
					<div class="screenshot"></div>
					<div class="url"><a>CES Intranet</a></div>
				</div>
			</div>
			<div class="row">
				<div class="col-4 card gmrsd">
					<div class="screenshot"></div>
					<div class="url"><a>Gill-Montague Regional School District</a></div>
				</div>
				<div class="col-4 card bico">
					<div class="screenshot"></div>
					<div class="url"><a>Bi-County Collaborative</a></div>
				</div>
				<div class="col-4 card ces">
					<div class="screenshot"></div>
					<div class="url"><a>Collaborative for Educational Services</a></div>
				</div>
			</div>
		</div>
	</main>
<footer>
		<div class="contact">
			<div id="email" class="email-slide">
			<input id="email-addy"type="text" value="matthowe85@gmail.com"  READONLY/><button class= "btn btn-light" onclick="copyToClipboard();">Copy</button>
			</div>
			<i class="far fa-envelope email-icon contact-icon"></i>
			<a class="contact-icon" href="https://www.linkedin.com/in/matthew-howe-10b03b40/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		</div>
		<div class="copyright">
			<p>&#169; Matthew Howe <?php echo date('Y'); ?></p>
		</div>
		
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/swup/2.0.5/swup.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
	<script>
	const swup = new Swup();
		
	function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("email").innerHTML;

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
	</script>
</html> 