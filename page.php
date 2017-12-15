<?php get_header(); ?>

<?php include('blocks/set-page-id.php'); ?>
<?php include('blocks/thumbnail.php'); ?>

<div class="container-fluid" style="<?php
				echo 'background: 
				linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),
				url(\''.$thumbnail.'\') no-repeat center center;
				background-size:cover;';
			?>">
	<div class="row page-top-image">		
		<div class="col-md-12 text-center">
			<div class="image row">
				<div class="text-wrapper align-self-center">
					<h1><?php the_title(); ?></h1>
					<?php if(!empty(get_field('subtitle'))){ ?>
						<p class="subtitle"><?php echo get_field('subtitle'); ?></p>
					<?php } ?>
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


<?php get_footer() ?>