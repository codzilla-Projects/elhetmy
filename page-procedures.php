<?php

/**

** Template Name: Procedures Page Template

**/

get_header();

get_template_part('page_title');

?>

    <?php
        $number = 0;
        $terms = get_terms(
         array(
            'taxonomy'      => 'procedures-category',
            'hide_empty'    => false,
            'orderby'       => 'name',
            'order'         => 'ASC',
            )
        );
    ?>

    <section class="service-eight">

        <div class="auto-container">

            <div class="sec-title-eight text-center">

                <p class="sec-title-eight__text"><?=$second_about_page_title?></p><!-- /.sec-title-eight__text -->

                <h2 class="sec-title-eight__title"><?=$second_about_page_small_title?></h2><!-- /.sec-title-eight__title -->

            </div><!-- /.sec-title-eight -->

            <div class="row">

                <?php
                foreach ($terms as $term) {
                    $term_link = get_term_link( $term );
                if ($term->count != 0) :

                ?>

                <div class="col-md-12 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="<?=$number?>ms">

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


    <section class="subscribe-two">

            <div class="subscribe-two__shape"></div><!-- /.subscribe-two__shape -->

            <div class="auto-container">

                <div class="row">

                    <div class="col-md-12 col-lg-9">

                        <h3 class="subscribe-two__title">

                           <?=$contact_title?>

                        </h3><!-- /.subscribe-two__title -->

                    </div><!-- /.col-md-12 col-lg-6 -->

                    <div class="col-md-12 col-lg-3 text-lg-end d-flex justify-content-end align-items-center">

                        <div class="link-box">

                            <a class="theme-btn btn-style-two" href="<?=$contact_link_url?>">

                                <i class="btn-curve"></i>

                                <span class="btn-title"><?=$contact_link_text?></span>

                            </a>

                        </div>

                    </div><!-- /.col-md-12 col-lg-6 -->

                </div><!-- /.row -->

            </div><!-- /.auto-container -->

        </section>

<?php get_footer()?>
