<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	<div id="internal_banner_two">
			
		<h1 class='banner_title_two'><?php the_title();?></h1><!-- page_header_two -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner_two -->
	
	<div class="page_container">
		
		<div id='pa_directory_wrapper' class='box_wrapper'>
		
			<?php if(get_field('practice_area_directory')): ?>
		
			<ul class="pa_directory_top_menu">
				
				<?php while(has_sub_field('practice_area_directory')): ?>
		 
					<li>
						
						<a><?php the_sub_field( 'title' ); ?></a>
					
						<?php $obj = get_sub_field('pa_nav_menu'); ?>
				
						<?php wp_nav_menu( array( 'menu' => $obj->name) ); ?>
					 
					 </li>
					
				<?php endwhile; ?>
			
			</ul><!-- pa_directory_top_menu -->
		 
		<?php endif; ?>
		
		</div><!-- pa_directory_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
