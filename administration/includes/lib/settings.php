<?php
	if (isset($_POST['submit'])) {
		$allowed_extensions = array(".jpg", ".jpeg", ".gif", ".png");
		$file_extension = strrchr($_FILES["logo"]["name"], ".");
				 
		// Check that the uploaded file is actually an image
		// and move it to the right folder if is.
		if (in_array($file_extension, $allowed_extensions)) {
			$random_name = rand();
			$target = "../uploads/";
			$photo_name = $random_name.$file_extension; 
			$target = $target . $photo_name; 
			if(move_uploaded_file($_FILES['logo']['tmp_name'], $target));
		} 
		
		$url = mysqli_prep($_POST['url']);
		$title = mysqli_prep($_POST['title']);
		$description = mysqli_prep($_POST['description']);
		$keywords = mysqli_prep($_POST['keywords']);
		$copyright = mysqli_prep($_POST['copyright']);
		$logo = ($_FILES['logo']['name']);
		$template = mysqli_prep($_POST['template']);
		$email = mysqli_prep($_POST['email']); 
		$phone = mysqli_prep($_POST['phone']);
		$city = mysqli_prep($_POST['city']);
		$country = mysqli_prep($_POST['country']);
		$address = mysqli_prep($_POST['address']);
		$name = mysqli_prep($_POST['name']);
		$permalink_structure = mysqli_prep($_POST['permalink_structure']);
		
		$query = "UPDATE options SET option_value = 
		CASE option_name 
		WHEN 'url' THEN '{$url}'
		WHEN 'title' THEN '{$title}'
		WHEN 'description' THEN '{$description}'
		WHEN 'copyright' THEN '{$copyright}'
		WHEN 'keywords' THEN '{$keywords}'";
		if ( $logo != NULL ) {
		$query .= "WHEN 'logo' THEN '{$photo_name}'";
		}
		$query .= "WHEN 'template' THEN '{$template}' 
		WHEN 'email' THEN '{$email}'
		WHEN 'phone' THEN '{$phone}'
		WHEN 'city' THEN  '{$city}'
		WHEN 'country' THEN '{$country}' 
		WHEN 'address' THEN '{$address}'
		WHEN 'name' THEN '{$name}' 
		WHEN 'permalink_structure' THEN '{$permalink_structure}' 
		ELSE option_value
		END"; 
		if (mysqli_query($connection, $query)) { 
			$message = "Successfully Updated.";
			$twig->addGlobal('message', $message);
		} else {
			$message = "Update Failed.";
			$twig->addGlobal('message', $message);
		}
	}
	
	// FUNCTION FOR GRABBING THE SITE OPTIONS
	function options() {
		global $connection;
		$options = "SELECT option_value,
		MAX(CASE WHEN option_name = 'url' THEN option_value ELSE NULL END) AS url,
		MAX(CASE WHEN option_name = 'title' THEN option_value ELSE NULL END) AS title,
		MAX(CASE WHEN option_name = 'description' THEN option_value ELSE NULL END) AS description,
		MAX(CASE WHEN option_name = 'keywords' THEN option_value ELSE NULL END) AS keywords,
		MAX(CASE WHEN option_name = 'copyright' THEN option_value ELSE NULL END) AS copyright,
		MAX(CASE WHEN option_name = 'logo' THEN option_value ELSE NULL END) AS logo,
		MAX(CASE WHEN option_name = 'template' THEN option_value ELSE NULL END) AS template,
		MAX(CASE WHEN option_name = 'email' THEN option_value ELSE NULL END) AS email,
		MAX(CASE WHEN option_name = 'phone' THEN option_value ELSE NULL END) AS phone,
		MAX(CASE WHEN option_name = 'country' THEN option_value ELSE NULL END) AS country,
		MAX(CASE WHEN option_name = 'city' THEN option_value ELSE NULL END) AS city,
		MAX(CASE WHEN option_name = 'address' THEN option_value ELSE NULL END) AS address,
		MAX(CASE WHEN option_name = 'name' THEN option_value ELSE NULL END) AS name,
		MAX(CASE WHEN option_name = 'permalink_structure' THEN option_value ELSE NULL END) AS permalink_structure
		FROM options";
		$options = mysqli_query($connection, $options);
		$options = mysqli_fetch_array($options);
		return $options;
	}
	
	$options = options();
	$templatesdirectory = '../template/';
	$templates = scandir($templatesdirectory);
?>