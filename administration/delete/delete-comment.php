<?php
	ob_start();
	require_once("../../includes/dbc.php");
	require_once("../includes/session/session.php");
	require_once("../includes/lib/functions.php");
	
	// CHECK IF USER LOGGED IN
	confirm_logged_in();

	// GET COMMENT ID FROM URL AND DELETE OR REDIRECT TO COMMENTS PAGE IF IT IS NOT SET
	if (isset($_GET['comment'])) {
		$comment = preg_replace('#[^0-9]#', '', $_GET['comment']);
		// SQL DELETE STATEMENT AND QUERY
		$delete = "DELETE FROM comments WHERE id = '{$comment}' LIMIT 1";
		if (mysqli_query($connection, $delete)) {
			redirect_to("../comments.php");
		} else {
			echo "Error Deleting comment: " . mysqli_error($connection);
		}
	} elseif (!isset($_GET['comment'])) {
		redirect_to("../comments.php");
		exit;
	}
?>