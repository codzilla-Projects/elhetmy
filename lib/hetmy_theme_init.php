<?php

add_theme_support('post-thumbnails');

add_action( 'init', 'hetmy_custom_post_types' );

/**********************

** create CPT Types

**********************/

function hetmy_custom_post_types() {

	

 $cpts = [



    array(

        'single'   => 'Sliders',

        'plural'   => 'Sliders',

        'cptname'  => 'slider',

        'icon'     => 'dashicons-slides',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 4

        ),

    array(

        'single'   => 'Procedures',

        'plural'   => 'Procedures',

        'cptname'  => 'Procedures',

        'icon'     => 'dashicons-image-filter',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 5

        ),

    array(

        'single'   => 'FAQ',

        'plural'   => 'FAQ',

        'cptname'  => 'faq',

        'icon'     => 'dashicons-editor-ol',

        'supports' => ["title","editor"],

        'show_in_menu'=> true,

        'position' => 6

        ),

    array(

        'single'   => 'Customer Reviews',

        'plural'   => 'Customer Reviews',

        'cptname'  => 'customer-reviews',

        'icon'     => 'dashicons-format-quote',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 7

        ),

    array(

        'single'   => 'Partners',

        'plural'   => 'Partners',

        'cptname'  => 'partner',

        'icon'     => 'dashicons-buddicons-friends',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 8

        ),



    array(

        'single'   => 'Gallery',

        'plural'   => 'Gallery',

        'cptname'  => 'gallery',

        'icon'     => 'dashicons-format-gallery',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 9

        ),

    

 ];

 foreach ($cpts as $cpt) {



     $labels = array(

        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'hetmy' ),

        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'hetmy' ),

        'menu_name'             => __( $cpt['plural'], 'hetmy' ),

        'all_items'             => __( 'All '.$cpt['plural'], 'hetmy' ),

        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'hetmy' ),

        'add_new'               => __( 'Add New', 'hetmy' ),

        'new_item'              => __( 'New '.$cpt['single'], 'hetmy' ),

        'edit_item'             => __( 'Edit '.$cpt['single'], 'hetmy' ),

        'update_item'           => __( 'Update '.$cpt['single'], 'hetmy' ),

        'view_item'             => __( 'View '.$cpt['single'], 'hetmy' ),

        'search_items'          => __( 'Search '.$cpt['plural'], 'hetmy' ),

        'not_found'             => __( 'Not found', 'hetmy' ),

        'not_found_in_trash'    => __( 'Not found in Trash', 'hetmy' ),

        'featured_image'        => __( 'Featured Image', 'hetmy' ),

        'set_featured_image'    => __( 'Set featured image', 'hetmy' ),

        'remove_featured_image' => __( 'Remove featured image', 'hetmy' ),

        'use_featured_image'    => __( 'Use as featured image', 'hetmy' ),

      );

      $args = array(

        'label'                 => __( $cpt['plural'], 'hetmy' ),

        'description'           => __( $cpt['plural'].' Description', 'hetmy' ),

        'labels'                => $labels,

        'supports'              => $cpt['supports'],

        'hierarchical'          => false,

        'public'                => true,

        'show_ui'               => true,

        'show_in_menu'          =>$cpt['show_in_menu'],

        'menu_position'         => $cpt['position'],

        'menu_icon'             => $cpt['icon'],

        'show_in_admin_bar'     => true,

        'show_in_nav_menus'     => true,

        'can_export'            => true,

        'has_archive'           => true,    

        'exclude_from_search'   => false,

        'publicly_queryable'    => true,

        'capability_type'       => 'post',

        

      );

    

    // Register Custom Post Type>

	register_post_type( $cpt['cptname'], $args );



    }   



}

/*Create Gallery Services*/
add_filter( 'rwmb_meta_boxes', 'bedaya_gallery' );
function bedaya_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Gallery Image', 'hetmy' ),
        'context'    => 'side',
        'priority'   => 'low',
        'post_types' => array('Procedures','gallery'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Upload Images'),
                'id'   => "thumbnail_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}
/*Show Post Type Under Category In Menu WordPress*/

/* create my custom menu pages */



function hetmy_register_custom_menu_pages() {



    add_menu_page(



        'website options',



        'General Options',



        'manage_options',



        'content-area',



        'main_content_area_callback',



        get_option('hetmy_favicon'),



        2



    ); 

       add_submenu_page(



        'content-area',



        'Home Page Options',



        'Home Page Options',



        'manage_options',



        'home-page-content',



        'home_page_area_callback'



    );

       

    add_submenu_page(



        'content-area',



        'About Page Options',



        'About Page Options',



        'manage_options',



        'about-page-content',



        'about_page_area_callback'



    );

    add_submenu_page(



        'content-area',



        'Contact Page Options',



        'Contact Page Options',



        'manage_options',



        'contact-page-content',



        'contact_page_area_callback'



    );  

}



add_action( 'admin_menu', 'hetmy_register_custom_menu_pages' );



require_once ( hetmy_ROOT . 'hetmy_options/hetmy_options.php');

require_once ( hetmy_ROOT . 'hetmy_options/home_page_options.php');

require_once ( hetmy_ROOT . 'hetmy_options/about_page_options.php');

require_once ( hetmy_ROOT . 'hetmy_options/contact_page_options.php');



add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>

    <style type="text/css">

        body{

            background:#c5c5d8!important; 

        }

        #login h1 a, .login h1 a {

            background-image: url(<?= get_option('hetmy_logo_img'); ?>);

            width: 100%;

            height: 100px;

            background-size: contain;

            margin: 0 auto;

        }

        .login form{

            background: rgba(3, 3, 4, .9)!important;

            border-radius: .5rem;

        }

        .login label{

            font-weight: 600!important;

            color: #fff!important;

        }

        .wp-core-ui p .button {

            background: rgba(3, 3, 4, .9)!important;

            border-color: rgba(3, 3, 4, .9)!important;

        }

        .wp-core-ui p .button:hover{

            background-color: #005b52 !important;

            border-color: #005b52 !important;

            color: #fff;

        }

        #reg_passmail{color:#fff;}

    </style>

<?php }

