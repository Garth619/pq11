<div class='locations'>
	
			<div class='loc_col'>

				<div class='loc_row'>
				
					<span class='locations_title'><?php the_field( 'toll_free_title','option'); ?></span><!-- locations_title -->

					<a class='locations_phone' href='tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('toll_free_phone', 'option')); ?>'><?php the_field( 'toll_free_phone','option'); ?></a><!-- locations_phone -->
				
				</div><!-- loc_row -->

				<span class='loc_row_divider'></span><!-- loc_row_divider -->

				<div class='loc_row'>
				
					<span class='locations_title'><?php the_field( 'local_title','option'); ?></span><!-- locations_title -->
					
					<a class='locations_phone' href='tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('local_phone', 'option')); ?>'><?php the_field( 'local_phone','option'); ?></a><!-- locations_phone -->
				
				</div><!-- loc_row -->
			
			</div><!-- loc_col -->

			<div class='loc_col'>
			
			<span class='locations_title'><?php the_field( 'office_title','option'); ?></span><!-- locations_title -->

			<span class='locations_address'><?php the_field( 'address','option'); ?></span><!-- locations_address -->

			<a class='get_directions' href='<?php the_field( 'get_directions_link','options'); ?>' target="_blank" rel="noopener"><?php the_field( 'get_directions_verbiage','options'); ?></a><!-- get_directions -->
			
			</div><!-- loc_col -->

			<div class='loc_col'>
			
			<span class='locations_title'><?php the_field( 'social_title','option'); ?></span><!-- locations_title -->

			<div class='social_media'>

				<?php if ( have_rows( 'social_media','option') ) : ?>
					
					<?php while ( have_rows( 'social_media','option') ) : the_row(); ?>

						<?php if(get_sub_field( 'icon' ) == "Twitter" ) { ?>

							<a href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">
				
								<?php echo file_get_contents( get_template_directory() . '/images/footer-social-tw.svg' ) ?>

							</a>

						<?php } ?>

						<?php if(get_sub_field( 'icon' ) == "LinkedIn" ) { ?>

							<a href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

								<?php echo file_get_contents( get_template_directory() . '/images/footer-social-li.svg' ) ?>

							</a>

						<?php } ?>

						<?php if(get_sub_field( 'icon' ) == "Yelp" ) { ?>

							<a href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

								<?php echo file_get_contents( get_template_directory() . '/images/footer-social-yelp.svg' ) ?>

							</a>

						<?php } ?>

						<?php if(get_sub_field( 'icon' ) == "Facebook" ) { ?>

							<a href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

								<?php echo file_get_contents( get_template_directory() . '/images/footer-social-fb.svg' ) ?>

							</a>

						<?php } ?>
		
					<?php endwhile; ?>

				<?php endif; ?>
			
			</div><!-- social_media -->
			
			</div><!-- loc_col -->

		</div><!-- locations -->