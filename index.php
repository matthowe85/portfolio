<?php 

include "header.php";

$page = $_GET['page'];
?>

<div id="main"></div>
<?php if ($page == 'portfolio'){?>
    <div id="portfolio">Portfolio</div>
<?php } else if($page == 'about'){?>
    <div id="about">about</div>
<?php }  else if ($page == 'resume') {?>
    <div id="resume">resume</div>
<?php } ?>



<?php

include "footer.php"
?>