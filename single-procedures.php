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
                 <?php
                    $first_images =  get_post_meta($post_id,'thumbnail_ids');
                    if(!empty($first_images)):
                ?>
                <!--Sponsors Section-->
                <section class="sponsors-section">
                    <div class="sponsors-outer">
                        <!--Sponsors-->
                        <div class="auto-container">
                            <div class="sec-title">
                                <h2><?php _e('Picture Gallery','hetmy'); ?></h2>
                            </div>
                            <!--Sponsors Carousel-->
                            <div class="sponsors-carousel owl-theme owl-carousel">
                                <?php
                                    foreach ($first_images as $first_image) :
                                    $slider_image = wp_get_attachment_image_src($first_image, 'large')[0];
                                ?>
                                <div class="slide-item">
                                    <figure class="image-box"><a href="<?=$slider_image?>" data-fancybox="group" class="lightbox-image"><img src="<?=$slider_image?>" alt=""></a></figure>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif?>
            </div>



            <!--Sidebar Side-->

            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">

                <aside class="sidebar blog-sidebar">

                    <?php

                        $procedures = hetmy_get_procedures(10);

                        if($procedures->have_posts()) :

                    ?>

                    <div class="sidebar-widget services">

                        <div class="widget-inner">

                            <div class="sidebar-title">

                                <h4><?php _e('Most Procedures','hetmy'); ?></h4>

                            </div>

                            <ul>

                                <?php

                                    while($procedures->have_posts()) : $procedures->the_post();;

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

                                <h4><?php _e('need help?','hetmy'); ?></h4>

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

                   <?=$contact_title?>

                </h3><!-- /.subscribe-two__title -->

            </div><!-- /.col-md-12 col-lg-6 -->

            <div class="col-md-12 col-lg-6 text-lg-end d-flex justify-content-end align-items-center">

                <a href="<?=$contact_link_url?>" class="thm-btn__seven"><?=$contact_link_text?></a>

            </div><!-- /.col-md-12 col-lg-6 -->

        </div><!-- /.row -->

    </div><!-- /.auto-container -->

</section>

<?php endwhile; endif;?>

<?php get_footer()?>
