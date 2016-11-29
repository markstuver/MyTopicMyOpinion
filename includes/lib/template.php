<?php
	$template = "template/".$settings[template]."/";
	require_once('vendor/lib/Twig/Autoloader.php');
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem("$template");
	$twig = new Twig_Environment($loader, array('cache' => 'cache/'));
?>