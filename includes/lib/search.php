<?php
	function findresults() {
		global $term;
		// IF IS SET GET SEARCH AND NOT EMPTY GET SEARCH		
		if (isset($_GET['search']) && !empty($_GET['search'])) {
			$term = htmlspecialchars($_GET['search'], ENT_QUOTES);
			$search = posts($term);
		} elseif (!isset($_GET['search'])) {
		// IF IS NOT SET GET SEARCH REDIRECT TO HOME PAGE		
			header("Location: index.php");
			exit;
		} elseif (empty($_GET['search'])) {
		// IF IS GET SEARCH EMPTY DO NOTHING
		}
	}

	function countposts($term) {
		global $connection;
		global $postcount;
		$postcount = "SELECT COUNT(id) FROM posts  WHERE title LIKE '%{$term}%' OR content LIKE '%{$term}%' OR description LIKE '%{$term}%' AND visible = '1' ";
		$postcount = mysqli_query($connection, $postcount);
		$postcount = mysqli_fetch_row($postcount);
		$postcount = $postcount[0];
		return $postcount;
	}

	// GET ALL THE POSTS
	function posts($term) {
		global $connection;
		global $postsperpage;
		global $pagenumber;
		global $postcount;
		// POSTS PER PAGE
		$postsperpage = '5';
		// LAST PAGE NUMBER
		$lastpage = ceil(countposts($term)/$postsperpage);
		// LAST PAGE CANT BE LESS THAN 1
		if($lastpage < 1) {
			$lastpage = 1;
		}
		// PAGE NUMBER VARIABLE
		$pagenumber = 1;
		// GET PAGE NUMBER FROM URL
		if(isset($_GET['page'])) {
			$pagenumber = preg_replace('#[^0-9]#', '', $_GET['page']);
		}
		// PAGE CANT BE BELOW 1 OR MORE THAN THE LAST PAGE
		if ($pagenumber < 1) { 
			$pagenumber = 1; 
		} else if ($pagenumber > $lastpage) { 
			$pagenumber = $lastpage; 
		}
		$limit = 'LIMIT ' .($pagenumber - 1) * $postsperpage .',' .$postsperpage;
		$posts = "SELECT a.*, b.title as categorytitle FROM posts a LEFT OUTER JOIN categories b ON a.category_id = b.id WHERE a.title LIKE '%{$term}%' OR a.content LIKE '%{$term}%' OR a.description LIKE '%{$term}%'  AND a.visible='1' ORDER BY a.id DESC $limit";
		$posts = mysqli_query($connection, $posts);
		return $posts;
	}
?>