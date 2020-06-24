<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main" class="no_banner">
	
	<div class="page_container one_col">

		<h1 class="page_header center"><?php the_title();?></h1><!-- page_header -->
		
		<div id='case_results_wrapper'>

		<?php if ( have_rows( 'case_results_page' ) ) : ?>
			<?php while ( have_rows( 'case_results_page' ) ) : the_row(); ?>


			<div class='single_case_result'>
			
			<div class='single_cr_title_wrapper'>
			
				<span class='single_cr_title'><?php the_sub_field( 'type' ); ?></span><!-- single_cr_title -->
			
			</div><!-- single_cr_title_wrapper -->

			<div class='single_cr_content'>
			
				<span class='single_amount'><?php the_sub_field( 'amount' ); ?></span><!-- single_amount -->

				<div class='single_cr_descr'>
				
				<?php the_sub_field( 'description' ); ?>

				</div><!-- single_cr_descr -->
			
			</div><!-- single_cr_content -->
		
		</div><!-- single_case_result -->

		
			<?php endwhile; ?>
		<?php endif; ?>

		
		</div><!-- case_results_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
						
<?php get_footer(); ?>
