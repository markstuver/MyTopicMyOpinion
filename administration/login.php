<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// LOGIN FUNCTIONS
	include("includes/session/login.php");

	// RENDER THE LOGIN TEMPLATE FILE
	echo $twig->render('login.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>