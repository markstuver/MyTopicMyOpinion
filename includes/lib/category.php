<?php
	// FIND SELECTED CATEGORY
	function findcategory() {
		global $settings;
		global $category;
		global $selected_category;
		// GET CATEGORY ID/SLUG FROM URL
		if (isset($_GET['category'])) {
			if ($settings[permalink_structure] == '0') {
				$selected_category = preg_replace('#[^0-9]#', '', $_GET['category']);
				$category = getcategorybyid($selected_category);
			} else {
				$selected_category = preg_replace('#[^A-Za-z0-9-./]#', '', $_GET['category']);
				$category = getcategorybyslug($selected_category);
			}
		} elseif (!isset($_GET['category'])) {
		// IF IS NOT SET GET CATEGORY REDIRECT TO HOME PAGE		
			header("Location: index.php");
			exit;
		}
	}
	
	// GET CATEGORY BY ID
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
	
	// GET CATEGORY BY SLUG
	function getcategorybyslug($category) {
		global $connection;
		// GET SELECTED CATEGORY INFORMATION BY ID
		$category = "SELECT * FROM categories WHERE slug = '".$category."' LIMIT 1";
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

	
	function countposts($selected_category) {
		global $connection;
		global $category;
		global $postcount;
		$postcount = "SELECT COUNT(category_id) FROM posts WHERE category_id = '".$category[id]."' AND visible = '1' ";
		$postcount = mysqli_query($connection, $postcount);
		$postcount = mysqli_fetch_row($postcount);
		$postcount = $postcount[0];
		return $postcount;
	}

	// GET ALL THE POSTS
	function posts($selected_category) {
		global $connection;
		global $category;
		global $postsperpage;
		global $pagenumber;
		global $postcount;
		// POSTS PER PAGE
		$postsperpage = '5';
		// LAST PAGE NUMBER
		$lastpage = ceil(countposts($selected_category)/$postsperpage);
		// LAST PAGE CANT BE LESS THAN 1
		if($lastpage < 1) {
			$lastpage = 1;
		}
		// PAGE NUMBER VARIABLE
		$pagenumber = 1;
		// GET PAGE NUMBER FROM URL
		if(isset($_GET['page'])) {
			$pagenumber = preg_replace('#[^0-9]#', '', $_GET['page']);
		}
		// PAGE CANT BE BELOW 1 OR MORE THAN THE LAST PAGE
		if ($pagenumber < 1) { 
		    $pagenumber = 1; 
		} else if ($pagenumber > $lastpage) { 
		    $pagenumber = $lastpage; 
		}
		$limit = 'LIMIT ' .($pagenumber - 1) * $postsperpage .',' .$postsperpage;
		$posts = "SELECT * FROM posts WHERE category_id = '".$category[id]."' AND visible='1' ORDER BY id DESC $limit";
		$posts = mysqli_query($connection, $posts);
		return $posts;
	}
?>