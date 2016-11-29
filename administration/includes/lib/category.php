<?php 
	function findcategory() {
		global $category;
		global $selected_category;
		// GET CATEGORY ID FROM URL
		if (isset($_GET['category'])) {
			$selected_category = preg_replace('#[^0-9]#', '', $_GET['category']);
			$category = getcategorybyid($selected_category);
		} elseif (!isset($_GET['category'])) {
		// IF IS NOT SET GET CATEGORY REDIRECT TO HOME PAGE		
			header("Location: index.php");
			exit;
		}
	}
		
	function getcategorybyid($category) {
		global $connection;
		// GET SELECTED CATEGORY INFORMATION BY ID
		$category = "SELECT * FROM categories WHERE id = '{$category}' LIMIT 1";
		$category = mysqli_query($connection, $category);
		$category = mysqli_fetch_array($category);
		if (!empty($category)) {
			return $category; 
		} else {
		// IF CATEGORY ID DOESNT EXIST IN THE DATABASE REDIRECT TO HOME PAGE
			header("Location: index.php");
			exit;
		}
	}
	
	if (isset($_POST['submit'])) {
		$id = preg_replace('#[^0-9]#', '', $_GET['category']);
		$title = mysqli_prep($_POST['title']);
		$slug = slug(mysqli_prep($_POST['title'])) . "-" .$id;
		$description = mysqli_prep($_POST['description']);
		$keywords = mysqli_prep($_POST['keywords']);
		$visible = mysqli_prep($_POST['visible']);
		
		$query = "UPDATE categories SET title = '{$title}', slug = '{$slug}', description = '{$description}', keywords = '{$keywords}', visible = {$visible} WHERE id = {$id}";
		if (mysqli_query($connection, $query)) {
			$message = "<h4 class=\"alert_success\">Successfully Updated.</h4>";
		} else {
			$message = "<h4 class=\"alert_error\">Update Failed.</h4>";
		}		
	}
?>