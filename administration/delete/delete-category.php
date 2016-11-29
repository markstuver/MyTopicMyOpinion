<?php 
ob_start();
require_once("../../includes/dbc.php");
require_once("../includes/session/session.php");
require_once("../includes/lib/functions.php");

// CHECK IF USER LOGGED IN
confirm_logged_in();

// GET CATEGORY ID FROM URL AND REDIRECT TO CATEGORIES PAGE IF IT IS NOT SET
if (isset($_GET['category'])) {
	$category = preg_replace('#[^0-9]#', '', $_GET['category']);
} 
elseif (!isset($_GET['category'])) {
	redirect_to("../categories.php");
	exit;
}

// SQL DELETE STATEMENT AND QUERY
$delete = "DELETE FROM categories WHERE id = '{$category}' LIMIT 1";
if (mysqli_query($connection, $delete)) {
	redirect_to("../categories.php?message=1");
} else {
	echo "Error Deleting Category: " . mysqli_error($connection);
}
?>