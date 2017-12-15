<?php
$page_ID = $post->ID; 
include(__DIR__ .'/thumbnail.php');
?>

<div class="col-md-6 text-center">
	<div class="image row" style="<?php
	echo 'background: 
	linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15)),
	url(\''.$thumbnail.'\') no-repeat center center;
	background-size:cover;';
	?>"">
		<div class="text-wrapper my-auto">
			<h1><?php echo get_the_title($page_ID); ?></h1>
			<p class="subtitle"><?php echo get_field('subtitle', $page_ID); ?></p>
			<a href="<?php echo get_the_permalink($page_ID); ?>" class="btn btn-primary">Lees meer</a>
		</div>				
	</div>
</div>
