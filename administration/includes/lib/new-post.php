<?php 
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

		$title = trim(mysqli_prep($_POST['title']));
		$subtitle = trim(mysqli_prep($_POST['subtitle']));
		$category = trim(mysqli_prep($_POST['category']));
		$description = trim(mysqli_prep($_POST['description']));
		$keywords = trim(mysqli_prep($_POST['keywords']));
		$content = mysqli_prep($_POST['content']);
		$tags = trim(mysqli_prep($_POST['tags']));
		$photo =($_FILES['photo']['name']);
		$visible = mysqli_prep($_POST['visible']);
		
		$query = "INSERT INTO posts (title, subtitle, category_id, content, description, keywords, tags, photo, visible) VALUES ('{$title}', '{$subtitle}', '{$category}',  '{$content}', '{$description}', '{$keywords}',  '{$tags}', '{$photo_name}', '{$visible}')";
			
		if (mysqli_query($connection, $query)) { 
			$new_post_id = mysqli_insert_id($connection);
			$slug = slug(mysqli_prep($_POST['title'])) . "-" .$new_post_id;
			$query = "UPDATE posts SET slug = '{$slug}'  WHERE id = {$new_post_id}";
			$query = mysqli_query($connection, $query);
			redirect_to("edit-post.php?post={$new_post_id}");
		} else {
			$message = "The Post Could Not Be Created.";
			$message .= "<br />" . mysqli_error();
		}                            			
	}
?>