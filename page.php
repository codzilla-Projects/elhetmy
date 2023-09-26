<?php
get_header(); 
get_template_part('page_title'); 
?>
	<section class="about-me-one">

		<div class="auto-container">

		    <div class="row">

		        <div class="col-md-12 col-lg-6">
				<?php 
					if( have_posts() ):
						while( have_posts() ): the_post();
							the_content();
						endwhile;
					endif;
				?>
				</div>
			</div><!-- .container -->
		</main>
	</section>
<?php get_footer(); ?>