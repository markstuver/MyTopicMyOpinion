<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// EDIT CATEGORY FUNCTIONS
	include("includes/lib/category.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// FIND CATEGORY FUNCTION - HAVE A LOOK AT includes/lib/category.php
	findcategory();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('category', $category);
	
	// RENDER THE EDIT CATEGORY TEMPLATE FILE
	echo $twig->render('edit-category.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>