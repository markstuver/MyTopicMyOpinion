<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// COMMENTS FUNCTIONS
	include("includes/lib/comments.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('comments', comments());
	$twig->addGlobal('lastPage', ceil(countcomments()/$commentsperpage));
	$twig->addGlobal('currentPage', $pagenumber);

	// RENDER THE COMMENTS TEMPLATE FILE
	echo $twig->render('comments.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>a