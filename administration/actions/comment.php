<?php
ob_start();
require_once("../../includes/dbc.php");
require_once("../includes/session/session.php");
require_once("../includes/lib/functions.php");

// CHECK IF USER LOGGED IN
confirm_logged_in();

	// GET POST ID FROM URL AND REDIRECT TO POSTS PAGE IF IT IS NOT SET
	if (isset($_GET['approve'])) {
		$approve= preg_replace('#[^0-9]#', '', $_GET['approve']);
		// SQL DELETE STATEMENT AND QUERY
		$approve= "UPDATE comments SET status = '1' WHERE id ='{$approve}' LIMIT 1";
		if (mysqli_query($connection, $approve)) {
			redirect_to("../comments.php");
		} else {
			echo "Error Deleting comment: " . mysqli_error($connection);
		}
	} elseif (isset($_GET['disapprove'])) {
		$disapprove = preg_replace('#[^0-9]#', '', $_GET['disapprove']);
		// SQL DELETE STATEMENT AND QUERY
		$disapprove = "UPDATE comments SET status = '0' WHERE id ='{$disapprove}' LIMIT 1";
		if (mysqli_query($connection, $disapprove)) {
			redirect_to("../comments.php");
		} else {
			echo "Error Deleting comment: " . mysqli_error($connection);
		}
	} elseif ((!isset($_GET['disapprove'])) || (!isset($_GET['approve']))) {
		redirect_to("../comments.php");
		exit;
	}
?>