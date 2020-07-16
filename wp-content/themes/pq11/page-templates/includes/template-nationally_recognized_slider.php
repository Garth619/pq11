

<div id='sec_six_slider_wrapper'>

		<?php if(get_field('section_six_logos',10)): ?>


			<div id='sec_six_left_arrow' class="sec_six_arrow">
				
				<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
			</div><!-- sec_six_left_arrow -->
			
			<div id='sec_six_slider'>
			
			<?php while(has_sub_field('section_six_logos',10)): ?>
		
				<div class='sec_six_slide <?php the_sub_field('class');?>'>
				
					<div class='sec_six_slide_inner'>

					<?php $logos = get_sub_field( 'logos'); ?>
					
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