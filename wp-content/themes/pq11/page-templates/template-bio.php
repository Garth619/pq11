<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
	
	<div id="internal_att_banner">

	<div id='internal_att_tablet'>

	<div id='internal_att_banner_inner'>
	
		
	
	
	
		
	

		
		<div id="internal_att_banner_content">
			
			<div id='att_banner_spacer'></div><!-- banner_spacer -->

			<div id='att_banner_right'>
			
				<h1 id='att_title'><?php the_title();?></h1><!-- att_title -->

				<span id='att_position'><?php the_field( 'position' ); ?></span><!-- att_position -->

			</div><!-- banner_right -->
			
		</div><!-- internal_att_banner_content -->

		
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>

		</div><!-- internal_att_banner_inner -->

		<div id='mobile_att_image'>
		
		<?php $attorney_profile = get_field( 'attorney_profile' ); ?>
		
		<?php if ( $attorney_profile ) : ?>
		
		<div id='att_image_wrapper'>

			<img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

		</div><!-- att_image_wrapper -->
		
		<?php else: ?>
		
			<div class="placeholder">

				<div class='placeholder_inner'></div><!-- placeholder_inner -->
			
				<img src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' /><!-- name -->

			</div><!-- placeholder -->

		<?php endif;?>
		
		</div><!-- mobile_att_image -->

		</div><!-- internal_att_tablet -->


		
		
	</div><!-- internal_att_banner -->
	
	<div class="page_container">

		

	<div id='att_profile_wrapper'>
		
		<?php get_sidebar('bio'); ?>

		<div class="page_content">

			<div class='page_content_inner content'>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->
		
		</div><!-- att_profile_wrapper -->
		
		

	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
