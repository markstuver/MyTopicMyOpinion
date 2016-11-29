<?php
	// START THE CONNECTION
	include("includes/dbc.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// CATEGORY FUNCTIONS
	include("includes/lib/category.php");
	// TWIG - TEMPLATE ENGINE
	include("includes/lib/template.php");
	
	// FIND CATEGORY FUNCTION - HAVE A LOOK AT includes/lib/category.php
	findcategory();

	// TWIG GLOBALS
	$twig->addGlobal('site', settings());
	$twig->addGlobal('menu', menu());
	$twig->addGlobal('latest_posts', latestposts());
	$twig->addGlobal('category', $category);
	$twig->addGlobal('posts', posts($selected_category));
	$twig->addGlobal('totalposts', countposts($selected_category));
	$twig->addGlobal('lastPage', ceil($postcount/$postsperpage));
	$twig->addGlobal('currentPage', $pagenumber);
	
	// GOOGLE ANALYTICS
	include("template/default/assets/php/analyticstracking.php");
	
	// RENDER THE CATEGORY TEMPLATE FILE
	echo $twig->render('category.phtml');

	// CLOSE CONNECTION
	mysqli_close($connection);
?>