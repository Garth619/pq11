<?php 

/* Template Name: Testimonials */

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
		
		<div id='tesimonial_wrapper' class='box_wrapper'>
		
			<div class='tesimonial_inner'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

				<span class='testimonial_quote'><?php the_field( 'featured_testimonial_intro' ); ?></span><!-- testimonial_quote -->

				<span class='testimonial_descr'><?php the_field( 'featured_testimonial_description' ); ?></span><!-- testimonial_descr -->

				<span class='testimonial_name'><?php the_field( 'featured_testimonial_name' ); ?></span><!-- class -->
			
			</div><!-- tesimonial_inner -->
		
		</div><!-- tesimonial_wrapper -->

		<div id='testimonial_bottom'>
		
			<div class='testimonial_col'>

			<?php if ( have_rows( 'testi_column_one_new' ) ) : ?>
				<?php while ( have_rows( 'testi_column_one_new' ) ) : the_row(); ?>
		
				<div class='testimonial_single'>

					<div class='tesimonial_inner'>

						<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

						<span class='testimonial_quote'><?php the_sub_field( 'intro' ); ?></span><!-- testimonial_quote -->

						<span class='testimonial_descr'><?php the_sub_field( 'description' ); ?></span><!-- testimonial_descr -->

						<span class='testimonial_name'>	<?php the_sub_field( 'name' ); ?></span><!-- class -->

					</div><!-- tesimonial_inner -->

				</div><!-- testimonial_single -->
				
				<?php endwhile; ?>
			<?php endif; ?>
			
			</div><!-- testimonial_col -->

			<div class='testimonial_col'>
			
			<?php if ( have_rows( 'testi_column_two_new' ) ) : ?>
				<?php while ( have_rows( 'testi_column_two_new' ) ) : the_row(); ?>
		
				<div class='testimonial_single'>

					<div class='tesimonial_inner'>

						<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

						<span class='testimonial_quote'><?php the_sub_field( 'intro' ); ?></span><!-- testimonial_quote -->

						<span class='testimonial_descr'><?php the_sub_field( 'description' ); ?></span><!-- testimonial_descr -->

						<span class='testimonial_name'>	<?php the_sub_field( 'name' ); ?></span><!-- class -->

					</div><!-- tesimonial_inner -->

				</div><!-- testimonial_single -->
				
				<?php endwhile; ?>
			<?php endif; ?>
			
			</div><!-- testimonial_col -->
		
		</div><!-- testimonial_bottom -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
