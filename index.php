<?php get_header(); ?>

<?php

// Get home page and ID
$page_ID = get_ID_by_slug('home');
$post = get_post($page_ID);
?>

<?php include('blocks/thumbnail.php'); ?>

<div class="container-fluid" style="<?php
	echo 'background: 
	linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),
	url(\''.$thumbnail.'\') no-repeat center center;
	background-size:cover;';
	?>"">
	<div class="row page-top-image">		
		<div class="col-md-12 text-center">
			<div class="image row" >
				<div class="text-wrapper align-self-center">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="subtitle"><?php echo get_field('subtitle'); ?></p>
				</div>			
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
	?>
</div>


<div class="container">
	<div class="row page-blocks">
		<?php $post = get_page_by_path('design'); ?>
		<?php include('blocks/home-block.php'); ?>

		<?php $post = get_page_by_path('code'); ?>
		<?php include('blocks/home-block.php'); ?>

		<?php $post = get_page_by_path('wie'); ?>
		<?php include('blocks/home-block.php'); ?>

		<?php $post = get_page_by_path('portfolio'); ?>
		<?php include('blocks/home-block.php'); ?>		

	</div>
</div>


<div class="container home-contact">
	<div class="row">
		<?php 
		$page_ID = get_ID_by_slug('home');
		$thumbnail = get_field('contact_photo',$page_ID); 
		?>
		<div class="col-md-6"><?php echo get_field('contact_form',$page_ID); ?></div>		
		<div class="col-md-6">
			<div class="image row" style="<?php
			echo 'background: 
			linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15)),
			url(\''.$thumbnail.'\') no-repeat center center;
			background-size:cover;';
			?>""></div>
		</div>
	</div>
</div>
<?php get_footer() ?>