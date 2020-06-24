<section id="section_four">
	
	<div id='sec_four_inner'>
	
		<div id='sec_four_left'>

			<div id='sec_four_left_inner'>
			
				<span id='sec_four_left_title'><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_left_title -->

				<div id='sec_four_left_content'>
			
					<?php the_field( 'section_four_description' ); ?>

					<a class='cr_button' href='<?php the_field( 'section_four_button_link' ); ?>'><?php the_field( 'section_four_button_verbiage' ); ?></a><!-- button_two -->
			
				</div><!-- sec_four_left_content -->

			</div><!-- sec_four_left_inner -->
		
			</div><!-- sec_four_left -->

		<div id='sec_four_right'>
		
			<div id='sec_four_slider'>

			<?php if ( have_rows( 'case_results_sec_four' ) ) : ?>
				
				<?php while ( have_rows( 'case_results_sec_four' ) ) : the_row(); ?>
		
					<div class='sec_four_single_slide <?php the_sub_field( 'class' ); ?>'>

						<div class='svg_wrapper'>

						<?php $svg = get_sub_field( 'svg' ); ?>
						
						<?php if ( $svg ) { ?>
						
							<img class="lazyload" data-src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" />
						
						<?php } ?>

						</div><!-- svg_wrapper -->

						<div class='sec_four_content_wrapper'>

							<div class='sec_four_type_wrapper'>
	
								<span class='sec_four_title type'><?php the_sub_field( 'case_verbiage' ); ?></span><!-- sec_four_type -->

								<span class='sec_four_description'><?php the_sub_field( 'case_description' ); ?></span><!-- sec_four_description -->

							</div><!-- sec_four_type_wrapper -->

							<div class='sec_four_result_wrapper'>

								<span class='sec_four_title result'><?php the_sub_field( 'result_verbiage' ); ?></span><!-- sec_four_type -->

								<span class='sec_four_amount'><?php the_sub_field( 'amount' ); ?></span><!-- sec_four_amount -->

							</div><!-- sec_four_type_wrapper -->

						</div><!-- sec_four_content_wrapper -->

				</div><!-- sec_four_single_slide -->				
				
				<?php endwhile; ?>
			
			<?php endif; ?>
			
			</div><!-- sec_four_slider -->
		
		</div><!-- sec_four_right -->
	
	</div><!-- sec_four_inner -->

	<?php $section_four_background = get_field( 'section_four_background' ); ?>
	
	<?php if ( $section_four_background ) { ?>
	
			<img id='sec_four_bg' class="lazyload" data-src="<?php echo $section_four_background['url']; ?>" alt="<?php echo $section_four_background['alt']; ?>" />
	
	<?php } ?>

	<picture>
	
		
	
	</picture>
	
</section><!-- section_four -->