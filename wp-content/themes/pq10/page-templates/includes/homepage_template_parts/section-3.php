<section id="section_three">

	<div id='sec_three_inner'>

		<div id='sec_three_left' class="content">
		
			<h1 class='sec_three_header global_header'><?php the_field( 'section_three_header' ); ?></h1><!-- sec_three_header global_header -->

			<div id='sec_three_content_inner'>
			
				<?php the_field( 'section_three_content' ); ?>

			</div><!-- sec_three_content_inner -->

		</div><!-- sec_three_left -->

		<div id='sec_three_right'>

		<?php if ( have_rows( 'section_three_attorneys' ) ) : ?>
			<?php while ( have_rows( 'section_three_attorneys' ) ) : the_row(); ?>
		
				<div id="" class='sec_three_attorney'>
			
					<div class='attorney_image_wrapper'>

						<?php $attorney_image = get_sub_field( 'attorney_image' ); ?>
						
						<?php if ( $attorney_image ) { ?>

							<div class="att_image">
						
								<img class='attorney_image_one lazyload' data-src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />

							</div><!-- att_image -->
						
						<?php } ?>

						<span class='sec_three_att_title'><?php the_sub_field( 'attorney_name' ); ?></span><!-- sec_three_att_title -->

						<span class='sec_three_att_subtitle'><?php the_sub_field( 'attorney_description' ); ?></span><!-- sec_three_att_subtitle -->

						<span class='sec_three_att_quote'><?php the_sub_field( 'attorney_testimonial' ); ?></span><!-- sec_three_att_quote -->

						<a class='sec_three_att_button button_two' href='<?php the_sub_field( 'attorney_button_link' ); ?>'><?php the_sub_field( 'attorney_button_verbiage' ); ?></a><!-- sec_three_att_button -->
			
					</div><!-- attorney_image_wrapper -->
		
				</div><!-- sec_three_attorney -->
			
			<?php endwhile; ?>
		<?php endif; ?>
		
		</div><!-- sec_three_right -->

	</div><!-- sec_three_inner -->

</section><!-- section_three -->