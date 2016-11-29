<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// EDIT POST FUNCTIONS
	include("includes/lib/post.php");
	// CATEGORIES FUNCTIONS
	include("includes/lib/categories.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// FIND POST FUNCTION - HAVE A LOOK AT includes/lib/post.php
	findpost();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('post', $post);
	$twig->addGlobal('categories', categories());
	
	// RENDER THE EDIT POST TEMPLATE FILE
	echo $twig->render('edit-post.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>