<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<div id='about_banner'>
	
		<div id='about_content_inner'>
		
			<h1 class='about_title banner_title'><?php the_title();?></h1><!-- banner_title -->

			<span class='double_line'></span><!-- double_line -->

			<div id='about_intro' class="content">
			
				<?php the_field( 'about_intro' ); ?>

			</div><!-- about_intro -->
		
		</div><!-- about_content_inner -->

		<img id='about_banner_image' src='<?php bloginfo('template_directory');?>/images/hero-intl-about-tablet-new.jpg' alt=''/><!-- about_banner_image -->
	
	</div><!-- about_banner -->

	<div class="page_container about_container two_col content">
		
		<div class='about_col'>
		
			<?php the_field( 'about_column_one' ); ?>

		</div><!-- about_col -->

		<div class='about_col'>

			<div id='about_video_wrapper'>

				<div id='about_video_inner'>
				
				<div id='about_video'>

					<a href="">

						<img src='<?php bloginfo('template_directory');?>/images/vid.jpg' />

						<div id='video_overlay'>

							<div class='play_button'></div><!-- play_button -->

						</div><!-- video_overlay -->

					</a>

				</div><!-- about_video -->

				<?php if ( have_rows( 'about_video_bullets' ) ) : ?>
					
					<ul>

					<?php while ( have_rows( 'about_video_bullets' ) ) : the_row(); ?>

						<li><?php the_sub_field( 'bullet' ); ?></li>
		
					<?php endwhile; ?>

					</ul>

				<?php endif; ?>
			
				</div><!-- about_video_inner -->

				<span class='double_line'></span><!-- double_line -->
			
			</div><!-- about_video_wrapper -->
		
			<?php the_field( 'about_column_two' ); ?>
		
		</div><!-- page_container -->
		
	</div><!-- about_container -->

	<div id='about_bottom_wrapper'>
	
		<div id='about_bottom_inner'>
		
			<span id='about_bottom_title'>Nationally Recognized</span><!-- about_bottom_title -->

			<span class='double_line'></span><!-- double_line -->

			<div id='about_bottom_slider_wrapper'>
			
				<div id='about_bottom_slider'>

				<?php if ( have_rows( 'about_logos' ) ) : ?>
					
					<?php while ( have_rows( 'about_logos' ) ) : the_row(); ?>
					
						<div class='about_bottom_slide'>
				
							<div class='about_bottom_slide_inner'>

								<?php $logo = get_sub_field( 'logo' ); ?>
			
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
							</div><!-- about_bottom_slide_inner -->
	
						</div><!-- about_bottom_slide -->

					<?php endwhile; ?>

				<?php endif; ?>
				
				</div><!-- about_bottom_slider -->

				<div id='about_bottom_counter'>
				
					<div id='about_bottom_left_arrow' class="about_bottom_arrow">
					
						<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
					
					</div><!-- about_bottom_left_arrow -->

					<div id='about_bottom_right_arrow' class="about_bottom_arrow">
					
					<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
				</div><!-- about_bottom_right_arrow -->
				
				</div><!-- about_bottom_counter -->
			
			</div><!-- about_bottom_slider_wrapper -->
		
		</div><!-- about_bottom_inner -->
	
	</div><!-- about_bottom_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
