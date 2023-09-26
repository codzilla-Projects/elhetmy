<?php

function hetmy_admin_scripts_styles($hook) {

	wp_enqueue_style( 'hetmy-main', hetmy_URL . 'assets/admin/css/main-style.css');

    //var_dump($hook);

	$hetmy_pages = ['toplevel_page_content-area','general-options_page_home-page-content','general-options_page_about-page-content','general-options_page_services-page-content','general-options_page_contact-page-content','post.php','post-new.php'];

	if( in_array($hook, $hetmy_pages) ) { 



        wp_enqueue_style( 'hetmy-bootsrtap', hetmy_URL . 'assets/admin/css/bootstrap.min.css');

        wp_enqueue_style( 'hetmy-style', hetmy_URL . 'assets/admin/css/style.css');

            /*wp_enqueue_style( 'hetmy-bootsrtap', hetmy_URL . 'assets/admin/css/bootstrap.rtl.min.css');

            wp_enqueue_style( 'hetmy-style', hetmy_URL . 'assets/admin/css/style.css');

            wp_enqueue_style( 'hetmy-style-rtl', hetmy_URL . 'assets/admin/css/style.rtl.css');*/

        wp_enqueue_script( 'hetmy-popper', hetmy_URL .'assets/admin/js/popper.min.js', array() ,false, true );

        wp_enqueue_script( 'hetmy-bootsrtap',hetmy_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );

		wp_enqueue_script( 'hetmy-script', hetmy_URL .'assets/admin/js/script.js', array() ,false, true );

		if(function_exists( 'wp_enqueue_media' )){

			wp_enqueue_media();

		}else{

			wp_enqueue_style('thickbox');

			wp_enqueue_script('media-upload');

			wp_enqueue_script('thickbox');

		}

	}

}

 

add_action('admin_enqueue_scripts', 'hetmy_admin_scripts_styles');





function hetmy_scripts_styles() {





    wp_enqueue_style( 'hetmy-bootstrap-css', hetmy_URL . 'assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'hetmy-fontawesome-css', hetmy_URL . 'assets/css/fontawesome-all.css' );

    wp_enqueue_style( 'hetmy-owl-theme-css', hetmy_URL . 'assets/css/owl.css');

    wp_enqueue_style( 'hetmy-flaticon-css', hetmy_URL . 'assets/css/flaticon.css' );

    wp_enqueue_style( 'hetmy-animate-css', hetmy_URL . 'assets/css/animate.css' );

    wp_enqueue_style( 'hetmy-hover-css', hetmy_URL . 'assets/css/hover.css' );
    wp_enqueue_style( 'ibrahim-fancybox-css', hetmy_URL . 'assets/css/jquery.fancybox.min.css' );

    wp_enqueue_style( 'hetmy-custom-animate-css', hetmy_URL . 'assets/css/custom-animate.css' );

    wp_enqueue_style( 'hetmy-jarallax-css', hetmy_URL . 'assets/css/jarallax.css' );

    wp_enqueue_style( 'hetmy-style-css', hetmy_URL . 'assets/css/new-style.css' );

    if ( ICL_LANGUAGE_CODE=='ar' ){

    wp_enqueue_style( 'hetmy-style-rtl-css', hetmy_URL . 'assets/css/rtl.css' );
    
    }
    wp_enqueue_style( 'hetmy-responsive-css', hetmy_URL . 'assets/css/responsive.css' );


    wp_enqueue_script( 'hetmy-jquery-js',  hetmy_URL . 'assets/js/jquery.js', array() ,false, true );

    wp_enqueue_script( 'hetmy-popper-js',  hetmy_URL . 'assets/js/popper.min.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-bootstrap-js',  hetmy_URL . 'assets/js/bootstrap.min.js' , array() ,false, true );
    wp_enqueue_script( 'ibrahim-fancybox-js',  hetmy_URL . 'assets/js/jquery.fancybox.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-TweenMax-js',  hetmy_URL . 'assets/js/TweenMax.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-owl-js',  hetmy_URL . 'assets/js/owl.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-jarallax-js',  hetmy_URL . 'assets/js/jarallax.min.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-knob-js',  hetmy_URL . 'assets/js/knob.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-appear-js',  hetmy_URL . 'assets/js/appear.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-wow-js',  hetmy_URL . 'assets/js/wow.js' , array() ,false, true );

    //wp_enqueue_script( 'hetmy-jquery-easing-js',  hetmy_URL . 'assets/js/jquery.easing.min.js' , array() ,false, true );

    wp_enqueue_script( 'hetmy-script-js',  hetmy_URL . 'assets/js/new-script.js' , array() ,false, true );





}

add_action( 'wp_enqueue_scripts', 'hetmy_scripts_styles' );



