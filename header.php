<!DOCTYPE html>

<html lang="en" class="<?php if ( ICL_LANGUAGE_CODE=='ar' ){echo "translated-rtl";}?>">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>

        <?php wp_title('|','true','right') ?>

        <?php bloginfo('name'); ?>

    </title>

    <!-- Favicon -->

    <link rel="shortcut icon" href="<?=get_option('hetmy_favicon');?>" id="fav-shortcut" type="image/x-icon">

    <link rel="icon" href="<?=get_option('hetmy_favicon');?>" id="fav-icon" type="image/x-icon">

    <!-- Stylesheets -->

    <?php wp_head()?>

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->

        <div class="loader-wrapper">
            <div class="ring">
                <img class="preload-img" alt="<?php bloginfo('name')?>" src="<?=get_option('hetmy_logo_img')?>">
                <span></span>
            </div>
        </div>

        <!-- Main Header -->

        <header class="main-header header-style-two">

            <!-- Header Upper -->

            <div class="header-upper">

                <div class="inner-container clearfix">

                    <!--Logo-->

                    <div class="logo-box">

                        <div class="logo">

                            <a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>">

                                <img src="<?=get_option('hetmy_logo_img')?>" class="main-logo" alt="<?php bloginfo('name')?>">

                                <img src="<?=get_option('hetmy_sticky_img')?>" alt="<?php bloginfo('name')?> " class="stricked-logo">

                            </a>

                        </div>

                    </div>

                    <div class="nav-outer clearfix">

                        <!--Mobile Navigation Toggler-->

                        <div class="mobile-nav-toggler">

                            <span class="icon flaticon-menu-2"></span>

                            <span class="txt">Menu</span>

                        </div>

                        <!-- Main Menu -->

                        <nav class="main-menu navbar-expand-md navbar-light">

                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
                                <?php hetmy_menu()?>
                                <?php elseif ( ICL_LANGUAGE_CODE=='ar' ) :?>
                                <?php hetmy_menu_rtl()?>
                                <?php endif?>
                            </div>

                        </nav>

                    </div>



                    <div class="other-links clearfix">

                        <!--Search Btn-->

                        <div class="search-btn">

                            <button type="button" class="theme-btn search-toggler">

                                <span class="flaticon-loupe"></span>

                            </button>

                        </div>

                        <div class="link-box">

                            <div class="header-six__social">

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

                            </div><!-- /.header-six__social -->

                        </div>

                    </div>

                </div>

            </div>

            <!--End Header Upper-->

        </header>

        <!-- End Main Header -->

        <!--Mobile Menu-->

        <div class="side-menu__block">

            <div class="side-menu__block-overlay custom-cursor__overlay">

                <div class="cursor"></div>

                <div class="cursor-follower"></div>

            </div><!-- /.side-menu__block-overlay -->

            <div class="side-menu__block-inner ">

                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn">

                        <img src="<?=hetmy_URL?>assets/img/icons/close-1-1.png" alt="">

                    </a>

                </div><!-- /.side-menu__top -->

                <nav class="mobile-nav__container">

                    <!-- content is loading via js -->

                </nav>

                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

                <div class="side-menu__content">

                    <p><a href="mailto:<?=get_option('hetmy_email')?>"><?=get_option('hetmy_email')?></a> <br> <a href="tel:<?=get_option('hetmy_phone')?>"><?=get_option('hetmy_phone')?></a></p>

                    <div class="side-menu__social">

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

                    </div>

                </div><!-- /.side-menu__content -->

            </div><!-- /.side-menu__block-inner -->

        </div><!-- /.side-menu__block -->



        <!--Search Popup-->

        <div class="search-popup">

            <div class="search-popup__overlay custom-cursor__overlay">

                <div class="cursor"></div>

                <div class="cursor-follower"></div>

            </div><!-- /.search-popup__overlay -->

            <div class="search-popup__inner">

                <form action="#" class="search-popup__form">

                    <input type="text" name="search" placeholder="Type here to Search....">

                    <button type="submit"><i class="fa fa-search"></i></button>

                </form>

            </div><!-- /.search-popup__inner -->

        </div><!-- /.search-popup -->

</body>

</html>
