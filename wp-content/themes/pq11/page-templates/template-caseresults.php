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
						
						
							<?php $terms = get_terms( 'case_results_category' );
						
						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						
						echo '<ul>';
							
							foreach ( $terms as $term ) {
								
								echo '<li data-filter="' . $term->slug . '">' . $term->name . '</li>';
    					}
    					
						echo '<li data-filter="view-all">View All +</li></ul>';
					
					} ?>
						<!-- <ul>
								<li data-filter="test-1">Test 1</li>
								<li data-filter="test-2">Test 2</li>
								<li data-filter="test-3">Test 3</li>
								<li data-filter="test-4">Test 4</li>
								<li data-filter="test-5">Test 5</li>
							</ul> -->
						
						</div><!-- select_dropdown_inner -->
					
					</div><!-- select_dropdown -->
				
				</div><!-- select_dropdown_wrapper -->
			
			</div><!-- select_wrapper -->

			<div id='case_result_boxes'>

			<div class='cr_col'>
			
				<div class='single_cr test-1'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially,ecision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				<div class='single_cr test-1 test-2'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>

							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				<div class='single_cr test-3 test-2'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decisioaring Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				<div class='single_cr test-4'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				</div><!-- cr_col -->

				<div class='cr_col'>

				

				<div class='single_cr test-5'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the pCircuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				<div class='single_cr test-5'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				<div class='single_cr test-5'>
				
					<div class='single_cr_inner'>
					
						<span class='single_cr_title'>Client’s Full Driver’s License Granted</span><!-- single_cr_title -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_cr_type'>Driver’s License Restoration</span><!-- single_cr_type -->

						<div class='single_cr_content content'>
						
							<p>Our client lost his driver’s license after two drinking and driving offenses and three minor in possession alcohol offenses. He had not had a driver’s license for approximately seven years. Initially, we were able to obtain a restricted license for our client, but the Secretary of State denied a full license because he had a Michigan Medical Marijuana Act card and had used medical marijuana in the past -even though he no longer used marijuana. After appealing the Secretary of State Hearing Officer’s decision to the 30th Circuit Court, the Circuit Court granted our client a full driver’s license because the Hearing Officer’s decision violated the Michigan Medical Marijuana Act.</p>
						
						</div><!-- single_cr_type -->
					
					</div><!-- single_cr_inner -->
				
				</div><!-- single_cr -->

				</div><!-- cr_col -->

			</div><!-- case_result_boxes -->

		</div><!-- case_results_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
						
<?php get_footer(); ?>

