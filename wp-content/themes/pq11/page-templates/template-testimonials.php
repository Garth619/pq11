<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>
	
	<div class="page_container">

		<div id='testimonials_wrapper' class="internal_wrapper">

			<div class='single_test'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

				<span class='single_test_descrip'>I am indebted to Mr. White and White Law for the rest of my life. They are like family to me.</span><!-- single_test_descrip -->

				<div class='single_test_content content'>
				
					<p>People v. F.T. (2009) - “When my case started, it looked like my life was over with. I didn’t know what to do. I was charged with first degree criminal sexual assault and six counts of rape; I was facing prison for the rest of my life. I went to jail, my children were taken from me… I didn’t know what to do. ​ A friend of mine recommended White Law PLLC and attorney James White. They jumped right into my case and my situation. Mr. White opened my eyes and shined the light on my case; they did everything in their power to help me. They hired a private investigator and expert witnesses. The last week of my trial, I was in the office almost every day; I know that Mr. White put his heart and soul into my trial, and that he believed in me. ​ When my trial began, everyone that I saw would look at me funny, like I was a bad person. By the time the witnesses had finished testifying at trial, everyone was using those bad looks for my accusers. I was found not guilty and cleared of all charges. ​ God helped me through White Law PLLC, and I am indebted to Mr. White and White Law for the rest of my life. They are like family to me. If you’re in trouble and you think your life is over, call White Law. They gave me my wife, my family, and my life back.”</p>
				
				</div><!-- single_test_content -->

				<span class='double_line'></span><!-- double_line -->

				<span class='single_test_name'>First Last Name</span><!-- single_test_name -->
			
			</div><!-- single_test -->

		</div><!-- testimonials_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
