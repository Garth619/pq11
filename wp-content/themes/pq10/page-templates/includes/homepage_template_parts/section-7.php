<section id='section_seven'>

<div id='section_seven_inner'>

    <span class='sec_seven_title'><?php the_field( 'section_seven_title' ); ?></span><!-- sec_seven_title -->
  
    <div id='sec_seven_slider'>

    <?php if ( have_rows( 'section_seven_testimonials' ) ) : ?>
	    <?php while ( have_rows( 'section_seven_testimonials' ) ) : the_row(); ?>
      
        <div class='sec_seven_single_slide'>
      
          <?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ) ?>

          <span class='sec_seven_desc'><?php the_sub_field( 'description' ); ?></span><!-- sec_seven_desc -->

          <div class='sec_seven_content'>
      
            <?php the_sub_field( 'content' ); ?>
    
          </div><!-- sec_seven_content -->

          <span class='sec_seven_name'><?php the_sub_field( 'name' ); ?></span><!-- sec_seven_name -->
    
        </div><!-- sec_seven_single_slide -->

	    <?php endwhile; ?>
    <?php endif; ?>

    </div><!-- sec_seven_slider -->
  
  </div><!-- section_seven_inner -->

</section><!-- section_seven -->