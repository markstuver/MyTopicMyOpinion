<?php
	if (isset($_POST['submit'])) { 
	
		$username = trim(mysqli_prep($_POST['username']));
		$firstname = trim(mysqli_prep($_POST['firstname']));
		$lastname = trim(mysqli_prep($_POST['lastname']));
		$email = trim(mysqli_prep($_POST['email']));
		$phone = trim(mysqli_prep($_POST['phone']));
		$country = trim(mysqli_prep($_POST['country']));
		$city = trim(mysqli_prep($_POST['city']));
		$password = trim(mysqli_prep($_POST['password']));
		$password = sha1($password);
		$query = "INSERT INTO users (username, firstname, lastname, email, phone, country, city, password) VALUES ('{$username}','{$firstname}', '{$lastname}', '{$email}', '{$phone}', '{$country}', '{$city}', '{$password}')";
						
		if (mysqli_query($connection, $query)) { 
			$new_post_id = mysqli_insert_id($connection);
			redirect_to("users.php");
		} else {
			$message = "The user Could Not Be Created.";
			$message .= "<br />" . mysqli_error();
		}                            			
	}
?>