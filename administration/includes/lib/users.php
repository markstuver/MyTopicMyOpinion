<?php
	// QUERY FOR GRABBING THE USERS INFORMATION
	function users() {
		global $connection;
		$users = "SELECT * FROM users";
		$users = mysqli_query($connection, $users);
		return $users;
	}

	// SET MESSAGE AFTER DELETING A USER
	if (isset($_GET['message']) && $_GET['message'] == 1) {
		$message = "User Deleted";
		$twig->addGlobal('message', $message);
	} 
?>