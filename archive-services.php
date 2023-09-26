<?php  
/**
** Template Name: Services Template
**/
get_header();
get_template_part('page_title'); 
?>
	<?php 
	    $number = 0;
	    $services = hetmy_get_services(-1);
	    if($services->have_posts()) : 
	?>
	<section class="service-eight">
        <div class="auto-container">
            <div class="sec-title-eight text-center">
                <p class="sec-title-eight__text"><?=get_option('second_about_page_title'); ?></p><!-- /.sec-title-eight__text -->
                <h2 class="sec-title-eight__title"><?=get_option('second_about_page_small_title'); ?></h2><!-- /.sec-title-eight__title -->
            </div><!-- /.sec-title-eight -->
            <div class="row">
            	<?php
	            	while($services->have_posts()) : $services->the_post();
	            ?>
                <div class="col-md-12 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="<?=$number?>ms">
                    <div class="service-eight__card">
                        <div class="service-eight__card__inner">
                            <h3 class="service-eight__title">
                                <a href="<?php the_permalink()?>"><?php the_title()?></a>
                            </h3><!-- /.service-eight__title -->
                            <div class="service-eight__icon">
                               <img src="<?php the_post_thumbnail_url()?>">
                            </div><!-- /.service-eight__icon -->
                        </div><!-- /.service-eight__card__inner -->
                    </div><!-- /.service-eight__card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <?php $number = $number + 300; endwhile; wp_reset_query();?>
            </div><!-- /.row -->
        </div><!-- /.auto-container -->
    </section><!-- /.service-eight -->
	<?php endif?>
	<section class="subscribe-two">
        <div class="subscribe-two__shape"></div><!-- /.subscribe-two__shape -->
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h3 class="subscribe-two__title">
                       <?=get_option('contact_title') ?>
                    </h3><!-- /.subscribe-two__title -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6 text-lg-end d-flex justify-content-end align-items-center">
                    <a href="<?=get_option('contact_link_url') ?>" class="thm-btn__seven"><?=get_option('contact_link_text') ?></a>
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.auto-container -->
    </section>
<?php get_footer()?>