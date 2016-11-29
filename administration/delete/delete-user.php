<?php
ob_start();
require_once("../../includes/dbc.php");
require_once("../includes/session/session.php");
require_once("../includes/lib/functions.php");

// CHECK IF USER LOGGED IN
confirm_logged_in();

// GET USER ID FROM URL AND REDIRECT TO USERS PAGE IF IT IS NOT SET
if (isset($_GET['user'])) {
	$user = preg_replace('#[^0-9]#', '', $_GET['user']);
} 
elseif (!isset($_GET['user'])) {
	redirect_to("../users.php");
	exit;
}

// SQL DELETE STATEMENT AND QUERY
$delete = "DELETE FROM users WHERE id = '{$user}' LIMIT 1";
if (mysqli_query($connection, $delete)) {
	redirect_to("../users.php?message=1");
} else {
	echo "Error Deleting User: " . mysqli_error($connection);
}
?>