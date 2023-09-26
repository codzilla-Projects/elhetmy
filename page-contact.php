<?php

/**

** Template Name: Contact Template

**/

get_header();

get_template_part('page_title');

?>

<!--Contact Section-->

<section class="contact-section contact-two">

    <div class="auto-container">

        <div class="row">

            <div class="col-lg-4">

                <div class="contact-two__content">

                    <div class="sec-title">

                        <h2><?=$contact_page_title?><span class="dot">.</span></h2>

                    </div>

                    <p class="contact-two__text">

                        <?=$contact_page_content?>

                    </p>

                    <!-- /.contact-two__text -->

                    <div class="contact-two__social">

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

                    </div><!-- /.contact-two__social -->

                </div><!-- /.contact-two__content -->

            </div><!-- /.col-lg-4 -->

            <div class="col-lg-8">

                <div class="form-box">

                    <div class="default-form">
                        <?= do_shortcode('[wpforms id="'.$contact_page_shortcode.'"]'); ?>
                    </div>

                </div>

            </div><!-- /.col-lg-8 -->

        </div><!-- /.row -->



    </div>

</section>





<section class="contact-info-two">

    <div class="auto-container">

        <div class="row">

            <div class="col-md-12 col-lg-4">

                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">

                    <i class="fa fa-map-marker-alt"></i>


                    <?php $location = '';
                        if(ICL_LANGUAGE_CODE == 'ar')
                            $location = get_option('hetmy_location_ar');
                        else
                            $location = get_option('hetmy_location'); ?>
                    <a href="<?=get_option('hetmy_map')?>"><?= $location;?></a>


                </div><!-- /.contact-info-two__card -->

            </div><!-- /.col-md-12 col-lg-4 -->

            <div class="col-md-12 col-lg-4">

                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms"

                    data-wow-delay="300ms">

                    <i class="fa fa-envelope"></i>

                    <a href="mailto:<?=get_option('hetmy_email') ?>"><?=get_option('hetmy_email') ?></a>

                </div><!-- /.contact-info-two__card -->

            </div><!-- /.col-md-12 col-lg-4 -->

            <div class="col-md-12 col-lg-4">

                <div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms"

                    data-wow-duration="1500ms">

                    <i class="fa fa-phone"></i>

                    <a href="tel:+<?=get_option('hetmy_phone') ?>">+<?=get_option('hetmy_phone') ?></a>

                </div><!-- /.contact-info-two__card -->

            </div><!-- /.col-md-12 col-lg-4 -->

        </div><!-- /.row -->

    </div><!-- /.auto-container -->

</section><!-- /.contact-info-two -->

<?php $hetmy_map = get_option('hetmy_map_code');

    if(!empty($hetmy_map)) :

?>

<section class="map-box">

    <?=$hetmy_map?>


</section>

<?php endif?>


<?php get_footer()?>
