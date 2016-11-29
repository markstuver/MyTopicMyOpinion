<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// SETTINGS PAGE FUNCTIONS
	include("includes/lib/settings.php"); 
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('site', options());
	$twig->addGlobal('templates', $templates);

	// RENDER THE SETTINGS TEMPLATE FILE
	echo $twig->render('settings.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>