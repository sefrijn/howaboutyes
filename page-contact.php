<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<?php include('blocks/set-page-id.php'); ?>

<div class="container page-intro">
	<?php $post = get_post($page_ID); ?>
	<h1 class="text-center"><?php the_title(); ?></h1>
</div>

<div class="container">
	<?php
		$content = apply_filters('the_content', $post->post_content);
		echo $content;
	?>
</div>


<?php get_footer() ?>