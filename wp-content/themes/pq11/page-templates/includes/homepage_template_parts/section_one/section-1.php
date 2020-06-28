<section id='section_one'>

  <div id='sec_one_left'>
  
    <div id='sec_one_left_inner'>
    
      <div id='sec_left_top'>
        
        <?php get_template_part('page-templates/includes/homepage_template_parts/section_one/template','video'); ?>

        <span id="sec_one_title">Fighting for our clients is our highest priority</span>

        <div id='laptop_content'>

          <?php get_template_part('page-templates/includes/homepage_template_parts/section_one/template','video'); ?>

          <ul id='sec_one_selling_points'>  
          
            <li>60+ YEARS EXpERTISE</li>
            <li>$500M+ IN RESULTS</li>
            <li>10K+ CLIENTS SERVED</li>
          
          </ul><!-- sec_one_selling_points -->

        </div><!-- laptop_content -->

        <div>
            
            <a class='button free_consult_button' href='#consultation'><span>Request a free consultation</span></a><!-- button free_consult_button -->
          
          </div>
            
       
      
      </div><!-- sec_left_top -->

      <div id='sec_left_bottom'>
      
        <div id='sec_one_logos'>
        
          <span id='sec_one_logo_title'>NaTIONAL MEDIA RECOGNITION</span><!-- sec_one_logo_title -->

          <div id='sec_one_slider'>
          
            <div class='sec_one_slide'>

              <div class='sec_one_slide_inner'>
              
                <?php echo file_get_contents( get_template_directory() . '/images/cnn-new.svg' ); ?>
              
              </div><!-- sec_one_slide_inner -->
            
            </div><!-- sec_one_slide -->

            <div class='sec_one_slide'>

              <div class='sec_one_slide_inner'>
              
                <?php echo file_get_contents( get_template_directory() . '/images/time-new.svg' ); ?>
              
              </div><!-- sec_one_slide_inner -->
            
            </div><!-- sec_one_slide -->

            <div class='sec_one_slide'>

              <div class='sec_one_slide_inner'>

                <?php echo file_get_contents( get_template_directory() . '/images/cnn-new.svg' ); ?>

              </div><!-- sec_one_slide_inner -->

            </div><!-- sec_one_slide -->

            <div class='sec_one_slide'>

              <div class='sec_one_slide_inner'>
              
                <?php echo file_get_contents( get_template_directory() . '/images/espn-new.svg' ); ?>
              
              </div><!-- sec_one_slide_inner -->
            
            </div><!-- sec_one_slide -->

        </div><!-- sec_one_slider -->
        
        </div><!-- sec_one_logos -->
      
      </div><!-- sec_left_bottom -->
    
    </div><!-- sec_one_left_inner -->

    <picture>

      <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-new.jpg'>
    
      <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-tablet-new.jpg'>

      <img id='hero' src='<?php bloginfo('template_directory');?>/images/hero-mobile-new.jpg' /><!-- hero -->
    
    </picture>

  </div><!-- sec_one_left -->

  <div id='sec_one_right'>

    <div id='sec_one_right_inner'>
    
      <span id='sec_one_form_title'>Request Free Consultation</span><!-- sec_one_form_title -->

      <span class='double_line'></span><!-- double_line -->

      <?php gravity_form(1, false, false, false, '', true, 1234); ?>

      <span class='required'>Required Field</span><!-- required -->

    </div><!-- sec_one_right_inner -->
  
  </div><!-- sec_one_right -->

</section><!-- sec_one -->