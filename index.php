<?php 

include "header.php";

$page = ucfirst($_GET['page']);
?>

<div id="main">
	<div id="home" class="slide slide-a">
		<?php if ($page){?><h1><?php echo $page?></h1><?php } ?>
	</div>
	<div id="portfolio" class="slide slide-b"></div>
	<div id="about" class="slide slide-c"></div>
	<div id="resume" class="slide slide-d"></div>
</div>



<?php

include "footer.php"
?>