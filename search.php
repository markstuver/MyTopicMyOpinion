<?php
	// START THE CONNECTION
	include("includes/dbc.php");
	// SEARCH FUNCTIONS
	include("includes/lib/search.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// TWIG - TEMPLATE ENGINE
	include("includes/lib/template.php");
	
	// GET RESULTS FUNCTION - HAVE A LOOK AT includes/lib/search.php
	findresults();
	
	// TWIG GLOBALS
	$twig->addGlobal('site', settings());
	$twig->addGlobal('menu', menu());
	$twig->addGlobal('latest_posts', latestposts());
	$twig->addGlobal('term', $term);
	$twig->addGlobal('posts', posts($term));
	$twig->addGlobal('totalposts', countposts($term));
	$twig->addGlobal('lastPage', ceil($postcount/$postsperpage));
	$twig->addGlobal('currentPage', $pagenumber);
	
	// RENDER THE SEARCH TEMPLATE FILE
	echo $twig->render('search.phtml');
	
	// CLOSES THE CONNECTION
	mysqli_close($connection);
?>