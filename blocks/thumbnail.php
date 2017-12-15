<?php 

// Set the thumbnail
if ( has_post_thumbnail($page_ID )) {
	$post_image_id = get_post_thumbnail_id($page_ID);
	if ($post_image_id) {
		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	}
}else{
	$thumbnail = "";
}

?>