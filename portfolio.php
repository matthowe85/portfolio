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
			<h2>Portfolio</h2>
			<p class="disclaimer">The websites displayed here are used with permission from Collaborative for Educational Services and were not designed by me. They were turned in to functional websites from a "mock-up" image. Please visit <a href="https://webdev.collaborative.org/">https://webdev.collaborative.org/</a> if you are interested in discussing your new website. </p>
			<div class="row ea">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a href="http://emergingamerica.org/">Emerging America</a></div>
					<div class="desc"><p>The Emerging America website and it's sub-sites were previously built using Wordpress. The site became dated and confusing to manage being spread over three websites. We re-built the website from the ground up, combining all three websites into one Drupal instance. </p></div>
				</div>
			</div>
			<div class="row dys">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>DYS Post Secondary Guides</a></div>
					<div class="desc"><p>This website was created to easily display post-secondary guides for students and parents using Drupal.</p></div>
				</div>
			</div>
			<div class="row int">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>CES Intranet</a></div>
					<div class="desc"><p>The CES Intranet is a custom CMS built by us using PHP. Although I didn't create the intranet, I built many of it's feature including from scratch including: Articles/Blog, System logs, Time clock manager and Custom content blocks. </p></div>
				</div>
			</div>
			<div class="row gmrsd">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>Gill-Montague Regional School District</a></div>
					<div class="desc"><p>This was my first project as a professional. It was built using Drupal </p></div>
				</div>
			</div>
			<div class="row bico">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>Bi-County Collaborative (Coming Soon!)</a></div>
					<div class="desc"><p>We are currently building this website.</p></div>
				</div>
			</div>
			<div class="row ces">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>Collaborative for Educational Services (Coming Soon!)</a></div>
					<div class="desc"><p>We are currently redesigning our website. </p></div>
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