<section id='section_one'>

  <div id='sec_one_inner'>
  
    <div id='sec_one_content'>
    
      <span id='sec_one_subtitle'><?php the_field( 'section_one_subtitle' ); ?></span><!-- sec_one_subtitle -->

      <span id='sec_one_title'><?php the_field( 'section_one_large_title' ); ?></span><!-- sec_one_title -->

      <a class='button free_consultation' href='#consultation'><span><?php the_field( 'button_verbiage' ); ?></span></a><!-- button -->  
    
    </div><!-- sec_one_content -->
  
  </div><!-- sec_one_inner -->

  <picture>

    <?php $hero_desktop_new_webp = get_field( 'hero_desktop_new_webp' ); ?>
    
    <?php if ( $hero_desktop_new_webp ) { ?>
	  
      <source media="(min-width: 1170px)" srcset="<?php echo $hero_desktop_new_webp['url']; ?>" type="image/webp">
    
    <?php } ?>
    
    <?php $hero_desktop_new = get_field( 'hero_desktop_new' ); ?>
    
    <?php if ( $hero_desktop_new ) { ?>

      <source media="(min-width: 1170px)" srcset="<?php echo $hero_desktop_new['url']; ?>">

    <?php } ?>

    <?php $hero_tablet_webp_new = get_field( 'hero_tablet_webp_new' ); ?>
    
    <?php if ( $hero_tablet_webp_new ) { ?>
	    
      <source media="(min-width: 768px)" srcset="<?php echo $hero_tablet_webp_new['url']; ?>" type="image/webp">
      
    <?php } ?>

    <?php $hero_tablet_new = get_field( 'hero_tablet_new' ); ?>
    
    <?php if ( $hero_tablet_new ) { ?>
	    
      <source media="(min-width: 768px)" srcset="<?php echo $hero_tablet_new['url']; ?>">
      
    <?php } ?>

    <?php $hero_mobile_webp_new = get_field( 'hero_mobile_webp_new' ); ?>
    
    <?php if ( $hero_mobile_webp_new ) { ?>
	    
      <source srcset="<?php echo $hero_mobile_webp_new['url']; ?>" type="image/webp">
      
    <?php } ?>

    <?php $hero_mobile_new = get_field( 'hero_mobile_new' ); ?>

    <img id='sec_one_hero' src='<?php echo $hero_mobile_new['url']; ?>' />

  </picture>

</section><!-- section_one -->