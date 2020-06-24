<footer id='consultation'>

<div id='footer_form_wrapper'>

	<div id='footer_form_inner'>

		<div id='footer_form_left'>
		
			<div id='footer_left_inner'>
		
				<span id='footer_form_title'><?php the_field( 'form_title','option'); ?></span><!-- footer_form_title -->

				<div id='footer_desc'>
			
					<?php the_field( 'form_content','option'); ?>
			
				</div><!-- footer_desc -->

				<span id='schedule'><?php the_field( 'schedule_verbiage','option'); ?></span><!-- schedule -->

				</div><!-- footer_left_inner -->
		
			</div><!-- footer_form_left -->

			<div id='footer_form_right'>
		
				<?php gravity_form(1, false, false, false, '', true, 12); ?>

				<span id='required'><?php the_field( 'required_field_verbiage','option'); ?></span><!-- required -->
		
			</div><!-- footer_form_right -->
		
		</div><!-- footer_form_inner -->

	</div><!-- footer_form_wrapper -->

	<div id='footer_bottom'>
	
			<?php get_template_part('page-templates/includes/template','locations');?>

		<div id='copyright'>
	
			<div id='copyright_inner'>

				<ul>
					<li>&copy; <?php echo date('Y'); ?> <?php the_field( 'copyright_law_firm_name','option'); ?></li>
					<?php if(get_field('all_rights_reserved','option')) {?>
						<li><?php the_field( 'all_rights_reserved','option'); ?></li>
					<?php } ?>
					<?php if(get_field('disclaimer','option') && get_field('disclaimer_title','option')) {?>
						<li><a href="<?php the_field( 'disclaimer','option'); ?>"><?php the_field( 'disclaimer_title','option'); ?></a></li>
					<?php } ?>
					<?php if(get_field('privacy_policy','option') && get_field('privacy_policy_title','option')) {?>
						<li><a href="<?php the_field( 'privacy_policy','option'); ?>"><?php the_field( 'privacy_policy_title','option'); ?></a></li>
					<?php } ?>
					<?php if(get_field('site_map','option') && get_field('site_map_title','option')) {?>
						<li><a href="<?php the_field( 'site_map','option'); ?>"><?php the_field( 'site_map_title','option'); ?></a></li>
					<?php } ?>
				</ul>

				<a id='ilawyer' href='//ilawyermarketing.com' target="_blank" rel="noopener">
				
					<?php echo file_get_contents( get_template_directory() . '/images/footer-01.svg' ) ?>
				
				</a><!-- ilawyer -->

			</div><!-- copyright_inner -->
	
		</div><!-- copyright -->

	</div><!-- footer_bottom -->

</footer>

<?php wp_footer();?>



