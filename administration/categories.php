<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// CATEGORIES FUNCTIONS
	include("includes/lib/categories.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();
	
	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('categories', categories());
	
	// RENDER THE CATEGORIES TEMPLATE FILE
	echo $twig->render('categories.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>