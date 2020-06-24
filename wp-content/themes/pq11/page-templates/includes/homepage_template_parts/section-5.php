<section id="section_five">
	
	<div id="sec_five_inner">

	<div id="sec_five_arrow_left" class='sec_five_arrow'>
		
			<?php echo file_get_contents( get_template_directory() . '/images/arrow.svg' ) ?>
		
		</div><!-- sec_five_arrow_left -->
		
	<div id='sec_five_slider'>

	<?php if ( have_rows( 'section_five_logos' ) ) : ?>
	
		<?php while ( have_rows( 'section_five_logos' ) ) : the_row(); ?>
		
		<div class='sec_five_slide'>
		
			<div class='sec_five_slide_inner'>

				<div class='sec_five_image_wrapper'>
			
				<?php $logo = get_sub_field( 'logo' ); ?>
				
				<?php if ( $logo ) { ?>
					
					<img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				
				<?php } ?>

				</div><!-- sec_five_image_wrapper -->
		
			</div><!-- sec_five_slide_inner -->
	
		</div><!-- sec_five_slide -->

		<?php endwhile; ?>

	<?php endif; ?>
	
	</div><!-- sec_five_slider -->

	<div id="sec_five_arrow_right" class='sec_five_arrow'>
		
			<?php echo file_get_contents( get_template_directory() . '/images/arrow.svg' ) ?>
		
		</div><!-- sec_five_arrow_right -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->