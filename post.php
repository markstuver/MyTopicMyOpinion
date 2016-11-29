<?php
	// START THE CONNECTION
	include("includes/dbc.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// POST FUNCTIONS
	include("includes/lib/post.php");
	// FIND POST FUNCTION - HAVE A LOOK AT includes/lib/post.php
	findpost();
	// TWIG - TEMPLATE ENGINE
	include("includes/lib/template.php");
	// COMMENTS FUNCTIONS
	include("includes/lib/comments.php");

	
	// TWIG GLOBALS
	$twig->addGlobal('site', settings());
	$twig->addGlobal('menu', menu());
	$twig->addGlobal('post', $post);
	$twig->addGlobal('comments', findcomments());
	$twig->addGlobal('latest_posts', latestposts());
	
	// GOOGLE ANALYTICS
	include_once("template/default/assets/php/analyticstracking.php");

	// RENDER THE POST TEMPLATE FILE
	echo $twig->render('post.phtml');
	
	// CLOSES THE CONNECTION 
	mysqli_close($connection);
?>