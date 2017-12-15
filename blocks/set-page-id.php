<?php 

	// Set the ID of current post
	$page_ID = 0;	
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$page_ID = get_the_ID();
		}
	}

?>