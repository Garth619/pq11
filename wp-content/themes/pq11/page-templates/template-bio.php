<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<div id='att_banner'>

	<div id='att_banner_inner'>
	
		<div id='att_banner_left'>
	
			<div id='att_banner_header_wrapper'>
	
				<h1 id="internal_header" class='att_header' ><?php the_title();?></h1><!-- att_header -->

				<span class='double_line'></span><!-- double_line -->

				<span id='att_position'>Attorney</span><!-- att_position -->
	
			</div><!-- att_banner_header_wrapper -->

		</div><!-- att_banner_left -->

		<div id='att_banner_right'></div><!-- att_banner_right -->

	</div><!-- att_banner_inner -->

	<div id="mobile_image" class='att_image_wrapper'>
		
		<img class="att_image" src='<?php bloginfo('template_directory');?>/images/att-alex-new.jpg' alt=''/><!-- name -->
		
	</div><!-- att_image_wrapper -->
	
</div><!-- att_banner -->

<div class="page_container two_col">
		
		<div class="page_content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- page_content -->

		<?php get_sidebar('bio'); ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
