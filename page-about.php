<?php

/**

** Template Name: About Template

**/

get_header();

get_template_part('page_title');

?>

<?php if (get_option('about_page_hidden') != '1')  : ?>

    <section class="about-me-one">

        <div class="auto-container">

            <div class="row">

                <div class="col-md-12 col-lg-6">

                    <div class="about-me-one__image">

                        <img src="<?=$about_page_img?>" alt="">

                    </div><!-- /.about-me-one__image -->

                </div><!-- /.col-md-12 -->

                <div class="col-md-12 col-lg-6">

                    <div class="about-me-one__content">

                        <div class="sec-title">

                            <h2><?=$about_page_title?><span class="dot">.</span></h2>

                        </div>

                        <div class="about-me-one__social">

                            <?php $facebook = get_option('hetmy_fb');

                                if(!empty($facebook)) :

                            ?>

                            <a href="<?=$facebook?>" class="fab fa-facebook-f"></a>

                            <?php endif ?>

                            <?php $twitter = get_option('hetmy_twitter');

                                if(!empty($twitter)) :

                            ?>

                            <a href="<?=$twitter?>" class="fab fa-twitter"></a>

                            <?php endif?>

                            <?php $instagram = get_option('hetmy_insta');

                                if(!empty($instagram)) :

                            ?>

                            <a href="<?=$instagram?>" class="fab fa-instagram"></a>

                            <?php endif?>

                        </div><!-- /.about-me-one__social -->

                        <p class="about-me-one__text">

                            <?=$about_page_content?>

                        </p>



                        <p class="about-me-one__qoute">

                            <?=$about_page_second_title?>

                        </p>

                        <!-- /.about-me-one__qoute -->



                        <div class="row about-me-one__certificate-row">

                            <div class="col-md-6">

                                <img src="<?=$about_page_second_img?>" alt="">

                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6">

                                <img src="<?=$about_page_third_img?>" alt="">

                            </div><!-- /.col-md-6 -->

                        </div><!-- /.row -->

                    </div><!-- /.about-me-one__content -->

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.auto-container -->

    </section><!-- /.about-me-one -->

    <?php endif ?>

    <?php if (get_option('second_about_page_hidden') != '1')  :?>
    <?php
        $number = 0;
        $terms = get_terms(
         array(
            'taxonomy'      => 'procedures-category',
            'hide_empty'    => false,
            'orderby'       => 'date',
            'order'         => 'DESC',
            'number'        => $second_about_page_number,
            )
        );
    ?>

    <section class="service-eight">

        <div class="auto-container">

            <div class="sec-title-eight text-center">

                <p class="sec-title-eight__text"><?=$second_about_page_title?></p><!-- /.sec-title-eight__text -->

                <h2 class="sec-title-eight__title"><?=$second_about_page_small_title?></h2><!-- /.sec-title-eight__title -->

            </div><!-- /.sec-title-eight -->

            <div class="row" style="justify-content: center;">

                <?php
                foreach ($terms as $term) {
                    $term_link = get_term_link( $term );
                if ($term->count != 0) :

                ?>

                <div class="col-md-12 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="<?=$number?>ms">

                    <div class="service-eight__card">

                        <div class="service-eight__card__inner">

                            <h3 class="service-eight__title">

                                <a href="<?=$term_link?>"><?= $term->name;?></a>

                            </h3><!-- /.service-eight__title -->

                            <div class="service-eight__icon">

                               <img src=" ">

                            </div><!-- /.service-eight__icon -->

                        </div><!-- /.service-eight__card__inner -->

                    </div><!-- /.service-eight__card -->

                </div><!-- /.col-md-12 col-lg-4 -->
                <?php endif; ?>
                <?php $number = $number + 300;}?>

            </div><!-- /.row -->

        </div><!-- /.auto-container -->

    </section><!-- /.service-eight -->

    <?php endif ?>

    <?php

        if (get_option('third_about_page_hidden') != '1')  :



        $testimonials = hetmy_get_customer_reviews($third_about_page_number);

        if($testimonials->have_posts()) :

    ?>

    <!-- Testimonials Section -->

    <section class="testimonials-section-two jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">

        <!-- <div class="image-layer" style="background-image: url(images/background/image-6.jpg);"></div> -->

        <img class="jarallax-img image-layer" src="<?=$third_about_page_img?>" alt="" />

        <div class="auto-container">

            <div class="carousel-box">

                <div class="testimonials-carousel-two owl-theme owl-carousel">

                    <?php

                        while($testimonials->have_posts()) : $testimonials->the_post();

                    ?>

                    <div class="testi-block-two">

                        <div class="inner">

                            <div class="icon"><span>“</span></div>

                            <div class="text">

                                <?php the_content()?>

                            </div>

                            <div class="info">

                                <div class="name"><?php the_title()?></div>

                            </div>

                        </div>

                    </div>

                    <?php endwhile; wp_reset_query();?>

                </div>

            </div>

        </div>

    </section>

<?php endif; endif?>

<?php get_footer()?>
