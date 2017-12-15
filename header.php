<!DOCTYPE html>
<html>

<head>
	<!-- Mobile support -->
	<meta name="viewport" content="initial-scale=1.0, width=device-width">


	<!-- Descirption -->
	<meta name="description" content="<?php echo get_bloginfo( 'description')?>.">
	<meta name="og:description" content="<?php echo get_bloginfo( 'description')?>.">
	<meta name="og:site_name" content="<?php echo get_bloginfo( 'name')?>">
	<meta name="og:title" content="<?php echo get_bloginfo( 'name')?>">
	<meta name="keywords" content="Websites,Software,Spiritual,Meditation,Yoga,Sustainability,Online,Apps,Applications,Technology,Design,Code,Interactive,Creativity">
	<meta name="author" content="Sefrijn">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/header.jpg">
	
	<!-- Title -->
	<title><?php wp_title('| ','true','right'); echo get_bloginfo( 'name', 'display' )." - ".get_bloginfo( 'description', 'display' ); ?></title>

	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

	<!-- Custom JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/moz2ugx.css">	

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Google Analytics -->

	<!-- Admin bar offset -->
	<?php 
	  if ( is_admin_bar_showing() ) echo '
	  	<style>
			@media screen and (min-width: 601px){
				.navigation{
					top:273px !important;
				}
				nav{
					top:46px !important;
				}
			}
			@media screen and (min-width: 783px){
				.navigation{
					top:259px !important;
				}
				nav{
					top:32px !important;
				}
			}
		</style>'; 
	?>		

	<!-- Wordpress code -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-md fixed-top navbar-light">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>

	        <?php
	        wp_nav_menu( array(
	        	'menu'				=> 'Header',
	            'depth'             => 0,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'navbarNavDropdown',
	            'menu_class'        => 'navbar-nav ml-auto',
	            'walker'            => new WP_Bootstrap_Navwalker())
	        );
	        ?>	
		</div>
	</nav>


