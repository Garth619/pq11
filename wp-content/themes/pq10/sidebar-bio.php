
<div id="sidebar_bio_wrapper" class="content">

	<div id='sidebar_att_box'>

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
		
		<?php if ( have_rows( 'attorney_accolades' ) ) : ?>
			
			<?php while ( have_rows( 'attorney_accolades' ) ) : the_row(); ?>

			<div id='att_bio_lists'>
			
				<h3><?php the_sub_field( 'title' ); ?></h3>
			
				<?php if ( have_rows( 'list_items' ) ) : ?>
					
					<ul class="single_line_list">
				
						<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					
							<li><?php the_sub_field( 'list_item' ); ?></li>
				
						<?php endwhile; ?>

					</ul>
		
			<?php endif; ?>

		</div><!-- att_bio_lists -->
	
	<?php endwhile; ?>

	<?php endif; ?>

		</div><!-- sidebar_att_box -->
		
</div><!-- sidebar_bio_wrapper -->

