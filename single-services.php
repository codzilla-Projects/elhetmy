<?php  
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
$post_title = get_the_title();
get_template_part('page_title'); 
?>
<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        <img src="<?php the_post_thumbnail_url()?>" alt="">
                    </div>
                    <div class="text-content">
                        <h3><?php the_title()?></h3>
                        <p>
                        	<?php the_content()?>
                        </p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                	<?php 
					    $services = hetmy_get_services(10);
					    if($services->have_posts()) :
					?>
                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                            	<?php
					                while($services->have_posts()) : $services->the_post();; 
					            ?>              
					            <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
					        	<?php endwhile; wp_reset_query();?>
                            </ul>
                        </div>
                    </div>
                	<?php endif?>
                    <div class="sidebar-widget call-up">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>need help?</h4>
                            </div>
                            <div class="phone">
                            	<a href="tel:<?=get_option('hetmy_phone')?>">
                            		<span class="icon flaticon-call"></span>
                                    <?=get_option('hetmy_phone')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- Call To Section -->
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
<?php endwhile; endif;?>
<?php get_footer()?>