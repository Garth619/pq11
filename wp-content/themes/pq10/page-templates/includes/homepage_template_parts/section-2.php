<section id="section_two">
	
	<div id='sec_two_inner'>

		<div id='sec_two_arrow_left' class="sec_two_arrow">
		
			<?php echo file_get_contents( get_template_directory() . '/images/arrow.svg' ) ?>
	
		</div><!-- sec_two_arrow_left -->
	
		<div id='sec_two_slider'>

		<?php if ( have_rows( 'selling_points' ) ) : ?>
			
			<?php while ( have_rows( 'selling_points' ) ) : the_row(); ?>
		
				<div class='sec_two_single_slide <?php the_sub_field( 'class' ); ?>'>
			
					<?php the_sub_field( 'svg_code' ); ?>
					
					<span class='sec_two_slide_title'><?php the_sub_field( 'description' ); ?> </span><!-- sec_two_slide_title -->
		
				</div><!-- sec_two_single_slide -->
			
			<?php endwhile; ?>

		<?php endif; ?>
		
		</div><!-- sec_two_slider -->

		<div id='sec_two_arrow_right' class="sec_two_arrow">
		
			<?php echo file_get_contents( get_template_directory() . '/images/arrow.svg' ) ?>
	
		</div><!-- sec_two_arrow_right -->
	
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->