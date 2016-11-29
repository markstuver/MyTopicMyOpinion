<?php
	ob_start();
	// START THE CONNECTION
	include("../includes/dbc.php");
	// TWIG - TEMPLATE ENGINE
	include("../vendor/load.php");
	// SITE FUNCTIONS
	include("includes/lib/functions.php");
	// DASHBOARD FUNCTIONS
	include("includes/lib/home.php");
	// SESSION FUNCTIONS
	include("includes/session/session.php");
	
	// CONFIRM IF USER LOGGED IN - HAVE A LOOK AT includes/session/session.php
	confirm_logged_in();

	// TWIG GLOBALS
	$twig->addGlobal('user', $_SESSION['username']);
	$twig->addGlobal('users', users());
	$twig->addGlobal('publishedposts', publishedposts());
	$twig->addGlobal('drafts', drafts());
	$twig->addGlobal('categoriescount', categoriescount());
	$twig->addGlobal('categories', categories());
	$twig->addGlobal('posts', posts());
	
	// RENDER THE DASHBOARD TEMPLATE FILE
	echo $twig->render('index.phtml');
	
	// CLOSE CONNECTION
	mysqli_close($connection);
?>