<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Matthew Howe</title>
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
				<li><a href="/about.php">About</a></li>
				<li><a href="/portfolio.php">Portfolio</a></li>
			</ul>
		</nav>
	</header>
	<main id="swup" class="transition-fade">
		<div class="wallpaper"></div>
		<div id="page" class="home-page container-fluid">
			<div id="logo"><h1>Matthew Howe</h1><span>Web Developer</span></br><span>(Currently Under Construction)
			</span></div>
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
			<input id="email-addy"type="text" value="matthowe85@gmail.com"  READONLY/><button class= "btn btn-light" onclick="copyToClipboard();">Copy</button>
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
