<?php
	// START THE CONNECTION
	include("includes/dbc.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// TWIG - TEMPLATE ENGINE
	include("includes/lib/template.php");
	// CONTACT US FUNCTIONS
	include("includes/lib/contactus.php");

	// TWIG GLOBALS		
	$twig->addGlobal('site', settings());
	$twig->addGlobal('menu', menu());
	$twig->addGlobal('latest_posts', latestposts());
	$twig->addGlobal('page', "contact");


	// RENDER THE CONTACT US TEMPLATE FILE
	echo $twig->render('contactus.phtml');
	
	// CLOSES THE CONNECTION 
	mysqli_close($connection);
?>