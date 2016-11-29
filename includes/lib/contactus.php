<?php
	// IF THE URL FIELD IS EMPTY SEND THE MESSAGE
	if(isset($_POST['url']) && $_POST['url'] == '') {
		// E-MAIL ADDRESS
		$youremail = $settings['email'];
			
		// MESSAGE TO BE SENT
		$body = "You Recieved a New Message:
		Name:  $_POST[name]
		E-Mail: $_POST[email]
		Subject: $_POST[subject]
		Message: $_POST[message]";
		
		// USE THE SUBMITTERS E-MAIL IF THEY SUPPLIED ONE OTHERWISE SEND FROM YOUR E-MAIL ADDRESS
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
		
		// SEND THE MESSAGE 
		mail($youremail, 'You Recieved a New Message', $body, $headers );
		header("Location: contactus.php?message=1");
	}

	// IF IS SET MESSAGE SET $MESSAGE TO TRUE
	if ( isset( $_GET['message'] ) ) { 
		$message = TRUE;
		$twig->addGlobal('message', $message);
	}
?>