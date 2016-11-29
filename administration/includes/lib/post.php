<?php
	function getpostbyid($post) {
		global $connection;
		// GET SELECTED POST INFORMATION BY ID
		$post = "SELECT * FROM posts WHERE id = '{$post}' LIMIT 1";
		$post = mysqli_query($connection, $post);
		$post = mysqli_fetch_array($post);
		if (!empty($post)) {
		// IF POST ID  EXIST IN THE DATABASE RETURN POST INFORMATION
			return $post; 
		} else {
		// IF POST ID DOESNT EXIST IN THE DATABASE REDIRECT TO HOME PAGE
			header("Location: index.php");
			exit;
		}
	}

	function findpost() {
		global $post;
		// GET POST ID FROM URL
		if (isset($_GET['post'])) {
			$post = preg_replace('#[^0-9]#', '', $_GET['post']);
			$post = getpostbyid($post);
		} elseif (!isset($_GET['post'])) {
		// IF IS NOT SET GET POST REDIRECT TO HOME PAGE		
			header("Location: index.php");
			exit;
		}
	}


	if (isset($_POST['submit'])) {
	
		$allowed_extensions = array(".jpg", ".jpeg", ".gif", ".png");		 
		$file_extension = strrchr($_FILES["photo"]["name"], ".");	 
		// Check that the uploaded file is actually an image
		// and move it to the right folder if is.
		if (in_array($file_extension, $allowed_extensions)) {
			$random_name = rand();
			$target = "../uploads/posts/";
			$photo_name = $random_name.$file_extension; 
			$target = $target . $photo_name; 
			move_uploaded_file($_FILES['photo']['tmp_name'], $target);
		} 
		
		$sel_post = preg_replace('#[^0-9]#', '', $_GET['post']);
		$title = trim(mysqli_prep($_POST['title']));
		$slug = slug(mysqli_prep($_POST['title'])) . "-" .$sel_post;
		$subtitle = trim(mysqli_prep($_POST['subtitle']));
		$category = mysqli_prep($_POST['category']);
		$description = trim(mysqli_prep($_POST['description']));
		$keywords = trim(mysqli_prep($_POST['keywords']));
		$content = mysqli_prep($_POST['content']);
		$tags = trim(mysqli_prep($_POST['tags']));
		$photo =($_FILES['photo']['name']);
		$visible = mysqli_prep($_POST['visible']);
		
		$query = "UPDATE posts SET title = '{$title}', slug = '{$slug}', subtitle = '{$subtitle}', category_id = '{$category}', description = '{$description}', keywords = '{$keywords}', content = '{$content}', tags = '{$tags}', visible = '{$visible}' ";
		if ( $photo != NULL ) {
			$query .= ", photo = '{$photo_name}' "; 
		}
		$query .= " WHERE id = '{$sel_post}' ";
		if (mysqli_query($connection, $query)){
			$message = "<h4 class=\"alert_success\">Successfully Updated.</h4>";
		} else {
			$message = "<h4 class=\"alert_error\">Update Failed.</h4>";
		}		
	} 
		
?>