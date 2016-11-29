<?php
	// MYSQLI PREP FUNCTION
	function mysqli_prep( $value ) {
		global $connection;
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysqli_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
		// undo any magic quote effects so mysqli_real_escape_string can do the work
		if( $magic_quotes_active ) { 
			$value = stripslashes( $value ); 
		}
			$value = mysqli_real_escape_string( $connection,  $value );
		} else { // before PHP v4.3.0
		// if magic quotes aren't already on then add slashes manually
		if( !$magic_quotes_active ) { 
			$value = addslashes( $value ); 
		}
		        // if magic quotes are active, then the slashes already exist
		}
			return $value;
	}
	
	// REDIRECT FUNCTION
	function redirect_to($location = NULL) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	
	// CONFIRM QUERY FUNCTION
	function confirm_query($result_set) {
		if (!$result_set){
			die("Database query failed: " . mysqli_error());
		}
	}
	
	// FIND FILE EXTENSION FUNCTION
	function findexts($filename) {
		$filename = strtolower($filename) ;
		$exts = explode(".", $filename) ;
		$n = count($exts)-1;
		$exts = $exts[$n];
		return $exts; 
	}
	
	function slug($title){     
        $replace = '-';         
        $title= strtolower($title);     
		
        //replace / and . with white space     
        $title = preg_replace("/[\/\.]/", " ", $title);     
        $title = preg_replace("/[^a-z0-9_\s-]/", "", $title);     
		
        //remove multiple dashes or whitespaces     
        $title = preg_replace("/[\s-]+/", " ", $title);     
		
        //convert whitespaces and underscore to $replace     
        $title= preg_replace("/[\s_]/", "-", $title);     
		
        //limit the slug size     
        $title = substr($title, 0, 100);     
		
        //slug is generated     
        return $title; 
    }     
?>