<?php $page_ID = get_ID_by_slug('home'); ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php echo get_field('copyright_text',$page_ID)?>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="">
					<a href="mailto:<?php echo get_field('email',$page_ID)?>"><?php echo get_field('email',$page_ID)?></a><br>
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="">
					<a href="http://<?php echo get_field('facebook',$page_ID)?>"><?php echo get_field('facebook',$page_ID)?></a><br>
					
					<img src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="">
					<a href="http://<?php echo get_field('github',$page_ID)?>"><?php echo get_field('github',$page_ID)?></a>
				</div>
			</div>
		</div>
		
	</footer>
</body>

<?php wp_footer(); ?>
</html>