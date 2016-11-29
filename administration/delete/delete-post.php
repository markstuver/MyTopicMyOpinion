<?php
ob_start();
require_once("../../includes/dbc.php");
require_once("../includes/session/session.php");
require_once("../includes/lib/functions.php");

// CHECK IF USER LOGGED IN
confirm_logged_in();

// GET POST ID FROM URL AND REDIRECT TO POSTS PAGE IF IT IS NOT SET
if (isset($_GET['post'])) {
	$post = preg_replace('#[^0-9]#', '', $_GET['post']);
} 
elseif (!isset($_GET['post'])) {
	redirect_to("../posts.php");
	exit;
}

// SQL DELETE STATEMENT AND QUERY
$delete = "DELETE FROM posts WHERE id = '{$post}' LIMIT 1";
if (mysqli_query($connection, $delete)) {
	redirect_to("../posts.php");
} else {
	echo "Error Deleting Post: " . mysqli_error($connection);
}
?>