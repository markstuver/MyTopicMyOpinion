<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// POSTS FUNCTIONS
	include("includes/lib/posts.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('posts', posts());
	$twig->addGlobal('lastPage', ceil(countposts()/$postsperpage));
	$twig->addGlobal('currentPage', $pagenumber);

	// RENDER THE POSTS TEMPLATE FILE
	echo $twig->render('posts.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>