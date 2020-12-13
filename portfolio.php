<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Matthew Howe | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	
	<script src="https://kit.fontawesome.com/d296c07018.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-46EE3M3D4V"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-46EE3M3D4V');
	</script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/portfolio">Portfolio</a></li>
			</ul>
		</nav>
	</header>
	<main id="swup" class="transition-fade swup-page">
		<div id="page" class="not-front container portfolio-page container-fluid">
			<h1>Portfolio</h1>
			<div class class="disclaimer">
				<p>The websites displayed here are used with permission from Collaborative for Educational Services and were not designed by me. They were turned in to functional websites from a "mock-up" image. Please visit <a href="https://webdev.collaborative.org/" target="_blank">https://webdev.collaborative.org/</a> if you are interested in discussing your new website.</p>
				<p style="text-align:center;">I have also not included links to certain websites because they are internal resources. </p>
			</div>
			<div class="row ea">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a href="http://emergingamerica.org/" target="_blank">Emerging America</a></div>
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
					<div class="desc"><p>The CES Intranet is a custom CMS built by us using PHP. Although I didn't create the intranet, I built many of it's feature from scratch including: Articles/Blog, System logs, Time clock manager and Custom content blocks. </p></div>
				</div>
			</div>
			<div class="row gmrsd">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a href="http://gmrsd.org/" target="_blank">Gill-Montague Regional School District</a></div>
					<div class="desc"><p>This was my first project as a professional. I learned a lot about builting custom CMS themes from scratch as well as templating. This website also introduced me to PHP. </p></div>
				</div>
			</div>
			<div class="row bico">
				<div class="screenshot col-6"></div>
				<div class="body col-6">
					<div class="url"><a>Bi-County Collaborative (Coming Soon!)</a></div>
					<div class="desc"><p>We are currently building this website. It will be built using Wordpress with Salesforce integration.</p></div>
				</div>
			</div>
			<div class="row ces">
				<div class="screenshot col-6"></div>
				<div class="body col-6"> 
					<div class="url"><a>Collaborative for Educational Services (Coming Soon!)</a></div>
					<div class="desc"><p>We are currently re-designing our website. This project has been delayed due to Covid-19 but will hopefully get back on track soon enough. It will be built using Wordpress and will contain Salesforce integration.</p></div>
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
		<div class="mobile-contact mail" style="display:none;">
			<div id="email" class="email-slide">
			<input id="email-addy2"type="text" value="matthowe85@gmail.com"  READONLY/><button class= "btn btn-light" onclick="copyToClipboard2();">Copy</button>
			</div>
			<i class="far fa-envelope email-icon contact-icon"></i>
		</div>
		<div class="copyright">
			<p>&#169; Matthew Howe <?php echo date('Y'); ?></p>
		</div>
		<div class="mobile-contact link" style="display:none;">
			<a class="contact-icon" href="https://www.linkedin.com/in/matthew-howe-10b03b40/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		</div>
	</footer>
	<script src="/js/global.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/swup/2.0.5/swup.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
	<script>
	const swup = new Swup();

	</script>
</html> 