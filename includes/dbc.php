<?php
	include("config.php");
	// Database Connection
	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	// Check The Connection
	if (mysqli_connect_errno() ){
		echo "Database Connection Failed: " . mysqli_connect_error();
		die;
	}
?>