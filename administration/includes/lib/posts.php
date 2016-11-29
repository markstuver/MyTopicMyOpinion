<?php
	// COUNT POSTS
	function countposts() {
		global $connection;
		$postcount = "SELECT COUNT(id) FROM posts ";
		$postcount = mysqli_query($connection, $postcount);
		$postcount = mysqli_fetch_row($postcount);
		$postcount = $postcount[0];
		return $postcount;
	}
	
	// LIMITED QUERY FOR GRABBING THE POSTS FOR EACH PAGE
	function posts() {
		global $connection;
		global $pagenumber;
		global $lastpage;
		global $postsperpage;
		$postsperpage = '10';
		$lastpage = ceil(countposts()/$postsperpage);

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
		
		$limit = 'LIMIT ' .($pagenumber - 1) * $postsperpage .',' .$postsperpage;
		$posts = "SELECT a.*, b.title as categorytitle FROM posts a LEFT OUTER JOIN categories b ON a.category_id = b.id  ORDER BY a.id DESC $limit";
		$posts = mysqli_query($connection, $posts);
		return $posts;
	}
?>