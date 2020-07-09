<div id="mobile_image" class='att_image_wrapper'>
		
<?php if ( $attorney_profile ) : ?>
		
		<img class="att_image" src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

		<?php else: ?>

		<div class="placeholder">

			<div class='placeholder_inner'></div><!-- placeholder_inner -->

			<img class="att_image" src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' />

		</div><!-- placeholder -->

	<?php endif;?>
		
	</div><!-- att_image_wrapper -->