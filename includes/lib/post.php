<?php
	// FIND SELECTED POST
	function findpost() {
		global $post;
		global $settings;
		// GET POST ID/SLUG FROM URL
		if (isset($_GET['post'])) {
			if ($settings['permalink_structure'] == '0' ) {
				$post = preg_replace('#[^0-9]#', '', $_GET['post']);
				$post = getpostbyid($post);
			} else {
				$post = preg_replace('#[^A-Za-z0-9-./]#', '', $_GET['post']);
				$post = getpostbyslug($post);
			}
		} elseif (!isset($_GET['post'])) {
		// IF IS NOT SET GET POST REDIRECT TO HOME PAGE		
			header("Location: index.php");
			exit;
		}
	}
	
	// GET POST BY ID
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
	
	// GET POST BY SLUG
	function getpostbyslug($post) {
		global $connection;
		// GET SELECTED POST INFORMATION BY ID
		$post = "SELECT * FROM posts WHERE slug = '".$post."' LIMIT 1";
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

?>