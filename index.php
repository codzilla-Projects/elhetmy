<?php get_header()?>

<?php

if (get_option('slider_hidden') != '1')  :
    $sliders = hetmy_get_slider($slider_number );
    if($sliders->have_posts()) :
?>

<!-- Banner Section -->

<section class="banner-section banner-three">

    <div class="bg-image" style="background-image: url(<?=hetmy_URL?>assets/img/slider/banner-bg-shape-3.png);"></div>

    <div class="banner-carousel owl-theme owl-carousel">

        <?php

            while($sliders->have_posts()) : $sliders->the_post();

            $slider_url     = get_post_meta(get_the_ID(),'hetmy_slider_link_url',true);

            $slider_text    = get_post_meta(get_the_ID(),'hetmy_slider_link_text',true);

        ?>

        <!-- Slide Item -->

        <div class="slide-item">

            <div class="round-shape-1"></div>

            <div class="round-image">

                <div class="image" style="background-image: url(<?php the_post_thumbnail_url()?>);"></div>

            </div>

            <div class="auto-container">

                <div class="content-box">

                    <div class="content">

                        <div class="inner">

                            <h1><?php the_title()?></h1>

                            <div class="text">

                                <?php the_content()?>

                            </div>

                            <?php

                                if(!empty($slider_url)||($slider_text)):

                            ?>

                            <div class="link-box">

                                <a class="theme-btn btn-style-two" href="<?=$slider_url?>">

                                    <i class="btn-curve"></i>

                                    <span class="btn-title"><?=$slider_text;?></span>

                                </a>

                            </div>

                            <?php endif?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php endwhile; wp_reset_query();?>

    </div>

</section>

<!--End Banner Section -->

<?php endif; endif?>

<?php if (get_option('slider_hidden') != '1')  : ?>

<!--Why Us Section-->

<section class="why-us-section">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Left Column-->

            <div class="left-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="round-box">

                        <div class="image-box">

                            <img src="<?=$about_img?>" alt="">

                        </div>



                    </div>

                </div>

            </div>

            <!--Right Column-->

            <div class="right-col col-lg-6 col-md-12 col-sm-12 mt-5">

                <div class="inner">

                    <div class="sec-title">

                        <h2><?=$about_title?><span class="dot">.</span></h2>

                    </div>

                     <p class="about-nine__summery">

                        <?=$about_content?>

                    </p><!-- /.about-nine__summery -->

                   <?=$about_second_content?>

                    <div class="link-box">

                        <a class="theme-btn btn-style-one" href="<?=$about_link_url?>">

                            <i class="btn-curve"></i>

                            <span class="btn-title"><?=$about_link_text?></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--End Why Us Section-->

<?php endif?>

<?php

if (get_option('partners_hidden') != '1')  :

    $partners = hetmy_get_partner($partners_number);

    if($partners->have_posts()) :

?>

<section class="sponsors-section sponsors-section__about-two">

    <div class="sponsors-outer">

        <div class="auto-container">

            <div class="sponsors-carousel owl-carousel owl-theme">

                <?php

                    while($partners->have_posts()) : $partners->the_post();

                ?>

                <div class="slide-item">

                    <figure class="image-box"><img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>"></figure>

                </div>

                <?php endwhile; wp_reset_query();?>

            </div><!-- /.sponsors-carousel -->

        </div><!-- /.auto-container -->

    </div><!-- /.sponsors-outer -->

</section><!-- /.sponsors-section -->

<?php endif; endif ?>

<?php

if (get_option('procedures_hidden') != '1') :


     $terms = get_terms(
     array(
        'taxonomy'      => 'procedures-category',
        'hide_empty'    => false,
        'orderby'       => 'date',
        'order'         => 'DESC',
        'number'        => 4,
        )
    );

?>

<section class="team-three team-three__about-two">

    <div class="auto-container">

        <div class="sec-title centered">

            <h2><?=$procedures_title?><span class="dot">.</span></h2>

        </div>

        <div class="row">

            <?php
                foreach ($terms as $term) {
                $term_link = get_term_link( $term );
                if ($term->count != 0) :
            ?>
            <div class="col-md-6 col-lg-3">

                <div class="team-card-three">

                    <div class="team-card-three__inner">

                        <div class="team-card-three__image">

                            <img src="<?=z_taxonomy_image_url($term->term_id); ?>" alt="">

                        </div><!-- /.team-card-three__image -->

                        <div class="team-card-three__content">

                            <h5 class="team-card-three__name"><?= $term->name;?></h5>

                        </div><!-- /.team-card-three__content -->

                        <div class="team-card-three__hover">

                            <h5 class="team-card-three__name">

                                <a href="<?= $term_link;?>">

                                    <?= $term->name;?>

                                </a>

                            </h5>
                            <?php
                                $procedures = hetmy_get_procedures_with_tax(8, $term->term_id);
                                if($procedures->have_posts()) :
                            ?>
                            <ul class="procedure_list_items clearfix m-0 list-unstyled">
                                <?php while($procedures->have_posts()) : $procedures->the_post();  ?>
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
                                <?php endwhile; wp_reset_query();?>
                            </ul>
                            <?php endif?>
                        </div><!-- /.team-card-three__content -->

                    </div><!-- /.team-card-three__inner -->

                </div><!-- /.team-card-three -->

            </div>

            <?php endif; ?>
            <?php }?>

        </div><!-- /.row -->

        <div class="row">

            <div class="col-md-12 d-flex justify-content-center">

                <div class="link-box">

                    <a class="theme-btn btn-style-one" href="<?=$procedures_link_url?>">

                        <i class="btn-curve"></i>

                        <span class="btn-title"><?=$procedures_link_text?></span>

                    </a>

                </div>

            </div>

        </div>

    </div><!-- /.auto-container -->

</section>

<?php endif?>

<?php if (get_option('info_hidden') != '1')  :?>

<section class="featured-section featured-section__about-two">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Left Column-->

            <div class="left-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"

                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">

                    <div class="image-box"><img src="<?=$info_img?>" alt=""></div>

                </div>

            </div>

            <!--Right Column-->

            <div class="right-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner">

                    <div class="sec-title">

                        <h2><?=$info_title?><span class="dot">.</span></h2>

                        <div class="lower-text">

                            <?=$info_content?>

                        </div>

                    </div>



                    <div class="link-box mt-3">

                        <a class="theme-btn btn-style-one" href="<?=$info_link_url?>">

                            <i class="btn-curve"></i>

                            <span class="btn-title"><?=$info_link_text?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif?>

<?php if (get_option('parallax_hidden') != '1')  : ?>

<!-- Parallax Section -->

<section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">

    <!-- <div class="image-layer" style="background-image: url(img/image-2.jpg);"></div> -->

    <img src="<?=$parallax_img?>" alt="" class="jarallax-img">

    <div class="auto-container">

        <div class="content-box">

            <h2 class="mb-3"><?=$parallax_title?></h2>



            <div class="link-box">

                <a class="theme-btn btn-style-one" href="<?=$parallax_link_url?>">

                    <i class="btn-curve"></i>

                    <span class="btn-title"><?=$parallax_link_text?></span>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- End Funfacts Section -->

<?php endif?>

<?php

if (get_option('news_hidden') != '1')  :

    $number = 0;

    $news = hetmy_get_news(3);

    if($news->have_posts()) :

?>

 <!--Discover Section-->

<section class="discover-section">

    <div class="auto-container">

        <div class="row clearfix">

            <?php

                while($news->have_posts()) : $news->the_post();$news_id= get_the_ID();

            ?>

            <!--Discover Block-->

            <div class="discover-block col-lg-4 col-md-12 col-sm-12">

                <div class="inner-box">

                    <div class="image-box"><img src="<?php echo get_the_post_thumbnail_url($news_id,'post-size')?>" alt="<?php the_title()?>"></div>

                    <div class="cap-box wow fadeInUp" data-wow-delay="<?=$number?>ms" data-wow-duration="1500ms">

                        <div class="cap-inner">

                            <h5><?php the_title()?></h5>

                            <div class="more-link"><a href="<?php the_permalink()?>"><span class="fa fa-angle-right"></span></a></div>

                        </div>

                    </div>

                </div>

            </div>

            <?php $number = $number + 300; endwhile; wp_reset_query();?>

        </div>

    </div>

</section>

<?php endif; endif?>

<?php if (get_option('form_hidden') != '1')  :?>

<!--Get Quote Section-->

<section class="get-quote-two">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Left Column-->

            <div class="left-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner">

                    <div class="sec-title">

                        <h2><?=$form_title?><span class="dot">.</span></h2>

                    </div>

                    <div class="text">

                        <?=$form_content?>

                    </div>

                    <div class="info">

                        <ul>

                            <li class="address">

                                <span class="icon flaticon-pin-1"></span>

                                <strong><?php _e('Visit Us','hetmy'); ?></strong>

                                <?php $location = '';
                                    if(ICL_LANGUAGE_CODE == 'ar')
                                        $location = get_option('hetmy_location_ar');
                                    else
                                        $location = get_option('hetmy_location'); ?>
                                <a href="<?=get_option('hetmy_map')?>"><?= $location;?></a>



                            </li>

                            <li>

                                <span class="icon flaticon-email-2"></span>

                                <strong><?php _e('Email address','hetmy'); ?></strong>

                                <a href="mailto:<?=get_option('hetmy_email') ?>"><?=get_option('hetmy_email') ?></a>

                            </li>

                            <li>

                                <span class="icon flaticon-call"></span>

                                <strong><?php _e('Call now','hetmy'); ?></strong>

                                <a href="tel:<?=get_option('hetmy_phone') ?>"><?=get_option('hetmy_phone') ?></a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <!--Right Column-->

            <div class="right-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner">

                    <div class="form-box">

                        <div class="default-form">

                           <?= do_shortcode('[wpforms id="'.$form_shortcode.'"]'); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php endif?>

<?php if (get_option('map_hidden') != '1')  :?>

<?php $hetmy_map = get_option('hetmy_map_code');

    if(!empty($hetmy_map)) :

?>

<section class="map-section">

    <div class="auto-container">

        <div class="map-container">

           <?=$hetmy_map?>

        </div>

    </div>

</section>

<?php endif;endif ?>

<?php if (get_option('contact_hidden') != '1')  :?>

<!-- Call To Section -->

<section class="call-to-section-two alternate">

    <div class="auto-container">

        <div class="inner clearfix">

            <h2><?=$contact_title?></h2>

            <div class="link-box">

                <a class="theme-btn btn-style-two" href="<?=$contact_link_url?>">

                    <i class="btn-curve"></i>

                    <span class="btn-title"><?=$contact_link_text?></span>

                </a>

            </div>

        </div>

    </div>

</section>

<?php endif?>

<?php get_footer()?>
