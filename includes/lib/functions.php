<?php
	// FUNCTION FOR GRABBING THE SITE SETTINGS
	function settings() {
		global $connection;
		$settings = "SELECT option_value,
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
		$settings = mysqli_query($connection, $settings);
		$settings = mysqli_fetch_array($settings);
		return $settings;
	}
	$settings = settings();

	// FUNCTION FOR GRABBING THE CATEGORIES FOR SITE MENU
	function menu() {
		global $connection;
		$menu = "SELECT * FROM categories WHERE visible = '1'";
		$menu = mysqli_query($connection, $menu);
		return $menu;
	}
	
	// FUNCTION FOR GRABBING THE LASTEST 5 POSTS - SIDEBAR
	function latestposts() {
		global $connection;
		$latestposts = "SELECT * FROM posts WHERE visible = '1' ORDER BY id DESC LIMIT 5";
		$latestposts = mysqli_query($connection, $latestposts);
		return $latestposts;
	}
?>