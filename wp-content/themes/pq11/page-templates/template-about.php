<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
<div id="about_banner">
		
		<div id="about_banner_content">

			<div id='about_banner_left'>
			
				<h1 id='about_title'><?php the_title();?></h1><!-- att_title -->

					<div id='about_intro'>
			
						<?php the_field( 'about_intro' ); ?>

				</div><!-- about_intro -->

			</div><!-- about_banner_left -->

			<div id='about_banner_spacer'></div><!-- about_banner_spacer -->

		</div><!-- about_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- about_banner -->
	
	<div class="page_container content">
		
		<div class="page_content">

				<div class="page_content_inner">


				<?php get_template_part( 'loop', 'page' ); ?>
			
				
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->

		<div id='about_right'>
		
			<div id='about_image_wrapper'>
			
			<?php $about_image = get_field( 'about_image' ); ?>
			
			<?php if ( $about_image ) { ?>
				
				<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
			
			<?php } ?>
			
			</div><!-- about_image_wrapper -->

			<blockquote><?php the_field( 'about_quote' ); ?></blockquote>
		
		</div><!-- about_right -->

	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
