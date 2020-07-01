<footer id='consultation'>

  <div id='footer_form_wrapper'>

    <span id='footer_from_title'>Request Free Consultation</span><!-- footer_from_title -->

    <span class='double_line'></span><!-- double_line -->
  
    <?php gravity_form(3, false, false, false, '', true, 1245); ?>

    <span class='required'>Required Field</span><!-- required -->
  
  </div><!-- footer_form_wrapper -->

  <?php get_template_part('page-templates/includes/template','locations');?> 

  <div id='copyright_wrapper'>

    <div id='copyright_inner'>
    
      <ul>
        <li>&copy; COPYRIGHt <?php echo date('Y'); ?> WHITE LAW PLLC</li> 
        <li>ALL RIGHTS RESERVED</li>
        <li><a href="">DISCLAIMER</a></li>
        <li><a href="">PRIVACY POLICY</a></li>
      </ul>

      <a id='ilawyer' href="//ilawyermarketing.com" target="_blank" rel="noopener">
    
      <img src='<?php bloginfo('template_directory');?>/images/ilawyer.svg' />
    
    </a><!-- ilawer-->
    
    </div><!-- copyright_inner -->

  </div><!-- copyright_wrapper -->

</footer><!-- consultation -->

<?php wp_footer();?>

</body>
</html>



