<?php
error_reporting(E_ALL);

	// FIND COMMENTS FOR SELECTED POST	
	function findcomments() {
		global $connection;
		global $post;
		// GET COMMENTS FOR POST
		$post_id = preg_replace('#[^0-9]#', '', $post['id']);
		$comment = "SELECT *, md5(author_email) as mailhash FROM comments WHERE post_id = '{$post_id}' AND status = '1' ";
		$comment = mysqli_query($connection, $comment);
		return $comment;
	}
	
	// FUNCTION TO FILTER THE ENTERED DATA
	function filterdata($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	// EMPTY ERRORS
	$AuthorError = $EmailError = $ContentError = $URLError = "";
	
	// EMPTY VARIABLES 
	$author = $author_email = $content = $author_url = "";

	// IF IS SET SUBMIT COMMENT
	if (isset($_POST['submit'])) { 
		global $post;	
		$post_id = preg_replace('#[^0-9]#', '', $post['id']); 
		
		// VALIDATE AUTHOR NAME
		if(empty($_POST["author"])){
			$AuthorError = 'Please Enter Your Name.';
			$twig->addGlobal('AuthorError', $AuthorError);
		} else {
			$author = filterdata($_POST["author"]);
			$twig->addGlobal('author', $author);
			if($author == FALSE){
				$AuthorError = 'Please Enter a Valid Name.';
				$twig->addGlobal('AuthorError', $AuthorError);
			}
		}
	    
		// VALIDATE EMAIL ADDRESS
		if(empty($_POST["author_email"])){
			$EmailError = 'Please Enter Your Email Address.';  
			$twig->addGlobal('EmailError', $EmailError);
		}else{
			$author_email = filterdata($_POST["author_email"]);
			$twig->addGlobal('author_email', $author_email);
			if($author_email == FALSE){
				$EmailError = 'Please Enter a Valid Email Address.';
				$twig->addGlobal('EmailError', $EmailError);
			}
		}
		
		// VALIDATE Author URL ADDRESS
		if(!empty($_POST["author_url"])){
			$author_url = filterdata($_POST["author_url"]);
			$twig->addGlobal('author_url', $author_url);
			if($author_url == FALSE){
				$URLError = 'Please Enter a Valid Link.';
				$twig->addGlobal('URLError', $URLError);
			}
		}
	
	// VALIDATE COMMENT
		if(empty($_POST["content"])){
			$ContentError = 'Please Enter Your Comment.'; 
			$twig->addGlobal('ContentError', $ContentError);
		} else {
			$content = filterdata($_POST["content"]);
			$twig->addGlobal('content', $content);
			if($content == FALSE){
				$ContentError = 'Please enter a valid comment.';
				$twig->addGlobal('ContentError', $ContentError);
			}
		}
	    
		// Check input errors before sending email
		if(empty($AuthorError) && empty($EmailError) && empty($ContentError) && empty($URLError)){
			$query = "INSERT INTO comments (author, author_email, author_url, content, post_id)  VALUES ('{$author}', '{$author_email}', '{$author_url}', '{$content}', '{$post_id}')";			
			if (mysqli_query($connection, $query)) { 
				$new_post_id = mysqli_insert_id($connection);
				if ($settings['permalink_structure'] == '0' ) {
					header("Location: post.php?post=$post_id&success=1#form");
				} else {
					header("Location: post.php?post=$post[slug]&success=1#form");
				}
			} else {
				if ($settings['permalink_structure'] == '0' ) {
					header("Location: post.php?post=$post_id&failure=1#form");
				} else {
					header("Location: post.php?post=$post[slug]&failure=1#form");
				}
			}                            			
		}
	 
	}
	
	if  (isset($_GET['success'])) { 
		$message = "Thanks for leaving your comment, it is currently awaiting moderation and will be displayed once approved.";
		$twig->addGlobal('message', $message);
	} elseif ( isset( $_GET['failure'] ) ) { 
		$message = "Your comment has been rejected.";
		$twig->addGlobal('message', $message);
	}
	
?>