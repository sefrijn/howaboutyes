<?php
/**
 * Template Name: Portfolio
 */
get_header(); 
?>
<?php include('blocks/set-page-id.php'); ?>
<?php include('blocks/thumbnail.php'); ?>

<div class="container page-intro">
	<?php $post = get_post($page_ID); ?>
	<h1 class="text-center"><?php the_title(); ?></h1>
	<?php $content = apply_filters('the_content', $post->post_content);
	echo $content;
	?>
</div>


<div class="portfolio-overview">
	<?php
	$args=array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'post_parent' => $page_ID,
		'order' => 'ASC',
		'orderby' => 'menu_order'
		);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<?php $page_ID = get_the_ID(); ?>
			<?php include('blocks/thumbnail.php'); ?>
			<div class="portfolio-image container">
				<div class="image row text-center" style="<?php
							echo 'background: 
							linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.40)),
							url(\''.$thumbnail.'\') no-repeat center center;
							background-size:cover;';
						?>">
					<div class="text-wrapper">
						<h2><?php the_title(); ?></h2>
						<a href="http://<?php echo get_field('project_website'); ?>"><?php echo get_field('project_website'); ?></a>
					</div>
				</div>
			</div>
			<div class="container portfolio-description">
				<div class="row">
					<div class="col-md-5 offset-md-2">
						<?php the_content(); ?>
					</div>
					<div class="col-md-3 offset-md-1 details">
						<?php echo get_field('project_date'); ?><br>
						<?php echo get_field('project_type'); ?><br>
						<a href="http://<?php echo get_field('project_website'); ?>"><img src="<?php echo get_field('project_logo'); ?>" alt=""></a>
					</div>

				</div>
			</div>

		<?php 
		endwhile;
	}
	?>
</div>

<?php get_footer() ?>