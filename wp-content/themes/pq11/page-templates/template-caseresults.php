<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>
	
	<div class="page_container">

		<div id='case_results_wrapper' class="internal_wrapper">

			<div id='select_wrapper'>
			
				<span id='select_category_title'>Select Category</span><!-- select_category_title -->

				<div id='select_dropdown_wrapper'>
				
					<div id='select_input'>
					
						<span id='select_input_title'>Test</span><!-- class -->
					
					</div><!-- select_input -->

					<div id='select_dropdown'>
					
						<div id='select_dropdown_inner'>
						
							<ul>
								<li>Test 1</li>
								<li>Test 2</li>
								<li>Test 3</li>
								<li>Test 4</li>
								<li>Test 5</li>
								<li>Test 6</li>
								<li>Test 7</li>
								<li>Test 8</li>
								<li>Test 9</li>
							</ul>
						
						</div><!-- select_dropdown_inner -->
					
					</div><!-- select_dropdown -->
				
				</div><!-- select_dropdown_wrapper -->
			
			</div><!-- select_wrapper -->

		</div><!-- case_results_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
						
<?php get_footer(); ?>
