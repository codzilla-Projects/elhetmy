        <!-- Main Footer -->

        <footer class="main-footer">

            <div class="auto-container">

                <!--Widgets Section-->

                <div class="widgets-section">

                    <div class="row clearfix">
                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget logo-widget">

                                <div class="widget-content">

                                    <div class="logo">

                                        <a href="<?php bloginfo('url')?>"><img id="fLogo" src="<?=get_option('hetmy_footer_logo_img')?>" width="160" alt="<?php bloginfo('name')?>" /></a>

                                    </div>

                                    <div class="text">
                                        <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
                                        <?=get_option('footer_content');?>
                                        <?php elseif ( ICL_LANGUAGE_CODE=='ar' ) :?>
                                        <?=get_option('footer_content_ar');?>
                                        <?php endif?>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Useful Links','hetmy'); ?></h6>

                                    <div>

                                        <?php if ( is_active_sidebar('first_sidebar') ) : ?>

                                            <?php dynamic_sidebar('first_sidebar'); ?>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Procedures','hetmy'); ?></h6>

                                    <div>

                                        <?php if ( is_active_sidebar('second_sidebar') ) : ?>

                                                <?php dynamic_sidebar('second_sidebar'); ?>

                                            <?php endif; ?>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget info-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Contact','hetmy'); ?></h6>

                                    <ul class="contact-info">

                                        <li class="address">

                                            <span class="icon flaticon-pin-1"></span>

                                            <?php $location = '';
                                                  if(ICL_LANGUAGE_CODE == 'ar')
                                                       $location = get_option('hetmy_location_ar');
                                                   else
                                                       $location = get_option('hetmy_location');  ?>
                                            <a href="<?=get_option('hetmy_map')?>"><?= $location;?></a>
                                        </li>

                                        <li>

                                            <span class="icon flaticon-call"></span>

                                            <a href="tel:<?=get_option('hetmy_phone')?>">

                                                <?=get_option('hetmy_phone')?>

                                            </a>

                                        </li>

                                        <li>

                                            <span class="icon flaticon-email-2"></span>

                                            <a href="mailto:<?=get_option('hetmy_email')?>"><?=get_option('hetmy_email')?></a>

                                        </li>

                                    </ul>

                                </div>

                                <div class="social-media">

                                    <ul class="social-links clearfix">

                                        <?php $facebook = get_option('hetmy_fb');

                                            if(!empty($facebook)) :

                                        ?>

                                        <li>

                                            <a href="<?=$facebook?>"><span class="fab fa-facebook-f"></span></a>

                                        </li>

                                        <?php endif?>

                                        <?php $twitter = get_option('hetmy_twitter');

                                            if(!empty($twitter)) :

                                        ?>

                                        <li><a href="<?=$twitter?>"><span class="fab fa-twitter"></span></a></li>

                                        <?php endif ?>

                                        <?php $instagram = get_option('hetmy_insta');

                                            if(!empty($instagram)) :

                                        ?>

                                        <li><a href="<?=$instagram?>"><span class="fab fa-instagram"></span></a></li>

                                        <?php endif?>

                                        <?php $youtube = get_option('hetmy_youtube');

                                            if(!empty($youtube)) :

                                        ?>

                                        <li><a href="<?=$youtube?>"><span class="fab fa-youtube"></span></a></li>

                                        <?php endif?>
                                        <?php $whatsapp = get_option('hetmy_whatsapp');

                                            if(!empty($whatsapp)) :

                                        ?>

                                         <li><a href="<?=$whatsapp?>"><span class="fab fa-whatsapp"></span></a></li>

                                        <?php endif?>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <section class="main-footer-copyright">

                <div class="auto-container text-center">

                    <div class="row">

                        <div class="col-md-6 text-lg-<?php if ( ICL_LANGUAGE_CODE=='ar' ){ echo "end"; }else{echo "start";}?>">

                            <p><?php _e('All Right Reserved to Dr.Mohamed Al-Haitamy','hetmy'); ?>© <?php the_date('Y') ?></p>

                        </div>

                        <div class="col-md-6 text-lg-<?php if ( ICL_LANGUAGE_CODE=='ar' ){ echo "start";}else{echo "end";}?>">

                             <p><?php _e('Designed & Developed by ','hetmy'); ?><a href="https://codzilla.net/" class="egns-lab"><img src="<?=hetmy_URL?>assets/img/codezilla-logo.webp">Codezilla</a>

                        </p>

                        </div>

                    </div>



                </div><!-- /.auto-container -->

            </section><!-- /.main-footer-copyright -->

        </footer>

    </div>

    <!--End pagewrapper-->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <?php wp_footer()?>

</body>

</html>
