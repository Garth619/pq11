<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal_main">
	
	<div id="internal_banner_two">
			
		<h1 class='banner_title_two'><?php the_title();?></h1><!-- page_header_two -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner_two -->
	
	<div class="page_container one_col">
		
		<div id='contact_wrapper' class='box_wrapper'>
		
			<?php get_template_part('page-templates/includes/template','locations');?>
		
		</div><!-- contact_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

	<?php get_footer(); ?>