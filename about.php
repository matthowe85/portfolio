<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Matthew Howe | About</title>
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
	<main id="swup" class="transition-fade">
		<div id="page" class="not-front container about-page container-fluid">
			<div class="row">
				<div class="col-6">
					<h1>About</h1>
					<p>I was in the vending industry for 12 years and I wanted to change careers. In 2016 I decided to begin my web development journey by taking online classes for web development. In 2018 I obtained my first position as a Front-End Web Developer and have been in love with all things web development ever since. </p>
					<p>In my freetime I enjoy cycling, snowboarding, playing guitar, video games, chasing my toddler around and obviously...Web Development!</p>
				</div>
				<div class="col-6">
					<div class="portrait"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<h2>Launguages I Enjoy</h2>
					<ul>
						<li>Html</li>
						<li>Css/Scss</li>
						<li>Javascript/jQuery</li>
						<li>Javascript Libraries (React & Vue)</li>
						<li>MySql</li>
						<li>PHP</li>
						<li>Python</li>
					</ul>
				</div>
				<div class="col-6">
					<h2>Other Skills</h2>
					<ul>
						<li>Website Accessibility</li>
						<li>Google Analytics</li>
						<li>Google SEO</li>
						<li>Salesforce</li>
						<li>Custom CMS applications (i.e Drupal and Wordpress)</li>
						<li>Website Optimization</li>
						<li>Git</li>
						<li>Linux Shell</li>
						<li>Super Friendly :)</li>
					</ul>
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