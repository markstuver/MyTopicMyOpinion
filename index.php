<?php
	// START THE CONNECTION
	include("includes/dbc.php");
	// HOME FUNCTIONS
	include("includes/lib/home.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// TWIG - TEMPLATE ENGINE
	include("includes/lib/template.php");

	// TWIG GLOBALS	
	$twig->addGlobal('site', settings());
	$twig->addGlobal('menu', menu());
	$twig->addGlobal('latest_posts', latestposts());
	$twig->addGlobal('posts', posts());
	$twig->addGlobal('totalposts', countposts());
	$twig->addGlobal('lastPage', ceil($postcount/$postsperpage));
	$twig->addGlobal('currentPage', $pagenumber);
	$twig->addGlobal('page', "home");
	
	// GOOGLE ANALYTICS
	include("template/default/assets/php/analyticstracking.php");


	// RENDER THE HOMEPAGE TEMPLATE FILE
	echo $twig->render('index.phtml');
	
	// CLOSES THE CONNECTION
	mysqli_close($connection);
?>