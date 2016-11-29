<?php
	
	if (logged_in()) {
		redirect_to("index.php");
	}

	include_once("includes/session/form_functions.php");
	
	if (isset($_POST['submit'])) { 
		$errors = array();

		$required_fields = array('username', 'password');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 30, 'password' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

		$username = trim(mysqli_prep($_POST['username']));
		$password = trim(mysqli_prep($_POST['password']));
		$password = sha1($password);
		
		if ( empty($errors) ) {
			$query = "SELECT id, username FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
			$result_set = mysqli_query($connection, $query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				$found_user = mysqli_fetch_array($result_set);
				$_SESSION['user_id'] = $found_user['id'];
				$_SESSION['username'] = $found_user['username'];
				
				redirect_to("index.php");
			} else {
				$message = "Incorrect Username or Password";
				$twig->addGlobal('message', $message);

			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
				$twig->addGlobal('message', $message);

			} else {
				$message = "There were " . count($errors) . " errors in the form.";
				$twig->addGlobal('message', $message);

			}
		}
		
	} else { 
			if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
			$twig->addGlobal('message', $message);

		} 
		$username = "";
		$password = "";
	}
?>