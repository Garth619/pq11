<section id='section_six'>

	<div id='sec_six_inner'>
	
		<span id='sec_six_title'><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->

		<span class='double_line'></span><!-- double_line -->

		<div id='sec_six_descrip'>
		
			<?php the_field( 'section_six_description' ); ?>
		
		</div><!-- sec_six -->

		<div id='sec_six_slider_wrapper'>

		<?php if ( have_rows( 'section_six_logos' ) ) : ?>

			<div id='sec_six_left_arrow' class="sec_six_arrow">
				
				<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
			</div><!-- sec_six_left_arrow -->
			
			<div id='sec_six_slider'>
		
			<?php while ( have_rows( 'section_six_logos' ) ) : the_row(); ?>
		
				<div class='sec_six_slide'>
				
					<div class='sec_six_slide_inner'>

					<?php $logos = get_sub_field( 'logos' ); ?>
					
					<?php if ( $logos ) { ?>
						
						<img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
					
					<?php } ?>
				
					</div><!-- sec_six_slide_inner -->
			
				</div><!-- sec_six_slide -->
			
			<?php endwhile; ?>

			</div><!-- sec_six_slider -->

			<div id='sec_six_right_arrow' class="sec_six_arrow">
				
					<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
				</div><!-- sec_six_right_arrow -->

		<?php endif; ?>
		
		</div><!-- sec_six_slider_wrapper -->
	
	</div><!-- sec_six_inner -->

</section><!-- section_six -->