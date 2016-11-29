<?php
	// COUNT COMMENTS
	function countcomments() {
		global $connection;
		$commentscount = "SELECT COUNT( id ) FROM comments";
		$commentscount = mysqli_query($connection, $commentscount);
		$commentscount = mysqli_fetch_row($commentscount);
		$commentscount = $commentscount[0];
		return $commentscount;
	}
	
	// LIMITED QUERY FOR GRABBING THE COMMENTS FOR EACH PAGE
	function comments() {
		global $connection;
		global $pagenumber;
		global $lastpage;
		global $commentsperpage;
		$commentsperpage = '15';
		$lastpage = ceil(countcomments()/$commentsperpage);

		// LAST PAGE CANT BE LESS THAN 1
		if($lastpage < 1){
			$lastpage = 1;
		}
		
		// PAGE NUMBER VARIABLE
		$pagenumber = 1;

		// GET PAGE NUMBER FROM URL
		if(isset($_GET['page'])){
			$pagenumber = preg_replace('#[^0-9]#', '', $_GET['page']);
		}

		// PAGE CANT BE BELOW 1 OR MORE THAN THE LAST PAGE
		if ($pagenumber < 1) { 
			$pagenumber = 1; 
		} else if ($pagenumber > $lastpage) { 
			$pagenumber = $lastpage; 
		}
		
		$limit = 'LIMIT ' .($pagenumber - 1) * $commentsperpage .',' .$commentsperpage;
		$comments = "SELECT * FROM comments ORDER BY id DESC $limit";
		$comments = mysqli_query($connection, $comments);
		return $comments;
	}
?>