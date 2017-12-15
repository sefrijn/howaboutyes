<?php


// Thumbnail image
add_theme_support( 'post-thumbnails' );

// Menu's
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			)
		);
}

// Bootstrap Menu Integration
require_once(__DIR__ .'/blocks/class-wp-bootstrap-navwalker.php');

// Custom image thumbnail size
add_image_size( 'news-thumb', 300, 300, true ); // (cropped)	

// Excerpt settings and read more tag
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length( $length ) {
	return 20;
}
function new_excerpt_more( $more ) {
	return '...';
}



// Get specific pages by name
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}


?>