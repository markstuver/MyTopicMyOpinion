<?php 
	if (isset($_POST['submit'])) {
		$title = trim(mysqli_prep($_POST['title']));
		$description = trim(mysqli_prep($_POST['description']));
		$keywords = trim(mysqli_prep($_POST['keywords']));
		$visible = mysqli_prep($_POST['visible']);
				
		$query = "INSERT INTO categories (title, description, keywords, visible) VALUES ('{$title}', '{$description}', '{$keywords}', '{$visible}')";
			
		if (mysqli_query($connection, $query))
		{ 
			$new_category_id = mysqli_insert_id($connection);
			$slug = slug(mysqli_prep($_POST['title'])) . "-" .$new_category_id;
			$query = "UPDATE categories SET slug = '{$slug}'  WHERE id = {$new_category_id}";
			$query = mysqli_query($connection, $query);
			redirect_to("edit-category.php?category={$new_category_id}");
		} else {
			$message = "The Post Could Not Be Created.";
			$message .= "<br />" . mysqli_error();
		}                            			
	}
?>