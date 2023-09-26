<?php

define('hetmy_ROOT', get_stylesheet_directory().'/');

define('hetmy_URL', get_stylesheet_directory_uri() .'/');

define('hetmy_ADMIN', admin_url());

define('hetmy_BlogUrl', get_bloginfo('url'));



require_once( hetmy_ROOT   . '/lib/hetmy_enqueue_scripts.php' );

require_once( hetmy_ROOT   . '/lib/hetmy_theme_init.php' );

require_once( hetmy_ROOT   . '/lib/hetmy_functions.php');

require_once( hetmy_ROOT   . '/lib/hetmy_meta_fields.php');

require_once( hetmy_ROOT   . '/lib/hetmy_taxonomy_terms.php');

require_once( hetmy_ROOT   . '/lib/wp_bootstrap_navwalker.php');

require_once( hetmy_ROOT   . '/switching_language/home_page_switch.php');

require_once( hetmy_ROOT   . '/switching_language/hetmy_switch.php');

require_once( hetmy_ROOT   . '/switching_language/about_page_switch.php');

require_once( hetmy_ROOT   . '/switching_language/procedures_page_switch.php');

require_once( hetmy_ROOT   . '/switching_language/contact_page_switch.php');


add_image_size( 'post-size', 340, 300,array('center','center') );


register_nav_menus();



function hetmy_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}

function hetmy_menu_rtl() {

wp_nav_menu( array(

    'menu'              => 'Main Menu Arabic',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}


function hetmy_mime_types( $mimes ) {

    $mimes['svg']  = 'image/svg+xml';

    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;

}



add_filter( 'upload_mimes', 'hetmy_mime_types' );

/*Remove Title TO Anchor Tag Menu*/

function my_menu_notitle( $menu ){

      return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}

add_filter( 'wp_nav_menu', 'my_menu_notitle' );

add_filter( 'wp_page_menu', 'my_menu_notitle' );

add_filter( 'wp_list_categories', 'my_menu_notitle' );



/*Add Footer Widget*/

function hetmy_widgets_init() {



  register_sidebar( array(

    'name'          => 'First Sidebar Column',

    'id'            => 'first_sidebar',

    'before_widget' => '',

    'after_widget'  => '',

  ));

}

add_action( 'widgets_init', 'hetmy_widgets_init' );



function hetmy_second_widgets_init() {



  register_sidebar( array(

    'name'          => 'Second Sidebar Column',

    'id'            => 'second_sidebar',

    'before_widget' => '',

    'after_widget'  => '',

  ));

}

add_action( 'widgets_init', 'hetmy_second_widgets_init' );



add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )

{

    global $post;

    // Check for single page and image post type and remove

    if ( is_single() && $post->post_type == 'image' )

        remove_filter('the_content', 'wpautop');

    return $content;

}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );


function elhetmy_load_theme_textdomain() {

    load_theme_textdomain( 'hetmy', get_template_directory() . '/languages' );

}

add_action( 'after_setup_theme', 'elhetmy_load_theme_textdomain' );

function change_footer_admin() {

  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';

}

add_filter('admin_footer_text', 'change_footer_admin');

