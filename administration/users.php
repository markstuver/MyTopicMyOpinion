<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// USERS PAGE FUNCTIONS
	include("includes/lib/users.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('users', users());
	
	// RENDER THE USERS TEMPLATE FILE
	echo $twig->render('users.phtml');

	// CLOSE CONNECTION
	mysqli_close($connection);
?>