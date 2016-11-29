<?php
	// QUERY FOR GRABBING THE CATEGORIES INFORMATION
	function categories() {
		global $connection;
		// QUERY FOR GRABBING THE CATEGORIES INFORMATION - MENU
		$categories = "SELECT * FROM categories";
		$categories = mysqli_query($connection, $categories);
		return $categories;
	}
?>