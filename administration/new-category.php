<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// NEW CATEGORY FUNCTIONS
	include("includes/lib/new-category.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	
	// RENDER THE NEW CATEGORY TEMPLATE FILE
	echo $twig->render('new-category.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>