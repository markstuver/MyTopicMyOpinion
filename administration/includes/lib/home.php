<?php
	// COUNT PUBLISHED POSTS
	function publishedposts() {
		global $connection;
		$publishedposts = "SELECT COUNT(id) FROM posts WHERE visible='1' ";
		$publishedposts  = mysqli_query($connection, $publishedposts);
		$publishedposts = mysqli_fetch_row($publishedposts);
		$publishedposts = $publishedposts[0];
		return $publishedposts;
	}
	// COUNT DRAFTS
	function drafts() {
		global $connection;
		$drafts = "SELECT COUNT(id) FROM posts WHERE visible='0' ";
		$drafts  = mysqli_query($connection, $drafts);
		$drafts = mysqli_fetch_row($drafts);
		$drafts = $drafts[0];
		return $drafts;
	}

	// COUNT CATEGORIES
	function categoriescount() {
		global $connection;
		$categoriescount = "SELECT COUNT(id) FROM categories";
		$categoriescount = mysqli_query($connection, $categoriescount);
		$categoriescount = mysqli_fetch_row($categoriescount);
		$categoriescount = $categoriescount[0];
		return $categoriescount;
	}

	// COUNT USERS
	function users() {
		global $connection;
		$users = "SELECT COUNT(id) FROM users";
		$users  = mysqli_query($connection, $users);
		$users = mysqli_fetch_row($users);
		$users = $users[0];
		return $users;
	}


	// QUERY FOR GRABBING THE CATEGORIES INFORMATION
	function categories() {
		global $connection;
		// QUERY FOR GRABBING THE CATEGORIES INFORMATION - MENU
		$categories = "SELECT * FROM categories";
		$categories = mysqli_query($connection, $categories);
		return $categories;
	}

	// LIMITED QUERY FOR GRABBING THE POSTS FOR EACH PAGE
	function posts() {
		global $connection;
		// QUERY FOR GRABBING THE CATEGORIES INFORMATION - MENU
		$posts = "SELECT * FROM posts ORDER BY id  DESC LIMIT 5";
		$posts = mysqli_query($connection, $posts);
		return $posts;
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
			$photo =($_FILES['photo']['name']);
			move_uploaded_file($_FILES['photo']['tmp_name'], $target);
		}
		
		$title = trim(mysqli_prep($_POST['title']));
		$category = trim(mysqli_prep($_POST['category']));
		$description = trim(mysqli_prep($_POST['description']));
		$content = mysqli_prep($_POST['content']);		
		$query = "INSERT INTO posts (title, category_id, content, description, photo) VALUES ('{$title}', '{$category}',  '{$content}', '{$description}', '{$photo_name}')";
				
		if (mysqli_query($connection, $query)) { 
			$new_post_id = mysqli_insert_id($connection);
			redirect_to("edit-post.php?post={$new_post_id}");
		} else {
			$message = "The Post Could Not Be Created.";
			$message .= "<br />" . mysqli_error();
		}                            			
	}

?>