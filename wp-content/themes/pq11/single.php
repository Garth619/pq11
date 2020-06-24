<?php get_header(); ?>

<div id="internal_main">
	
	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>	
	
	<div class="page_container">
		
		<div class="page_content">

			<div class='page_content_inner'>
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('blog');

		} ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>




