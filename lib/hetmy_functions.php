<?php

function hetmy_get_slider($no){

    $args = array(

        'post_type'       => 'slider',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}



function hetmy_get_partner($no){

    $args = array(

        'post_type'       => 'partner',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}



function hetmy_get_gallery($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'gallery',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}

function hetmy_get_procedures($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'procedures',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}


function hetmy_get_procedures_with_tax($no,$term_id){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'procedures',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC',

        'tax_query' => array(

            array(

                'taxonomy' => 'procedures-category',

                'field' => 'term_id',

                'terms' => $term_id,

            ),

        ),

    );

    return $posts = new WP_Query( $args );

}

function hetmy_get_gallery_with_tax($no,$term_id){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'gallery',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC',

        'tax_query' => array(

            array(

                'taxonomy' => 'procedures-gallery',

                'field' => 'term_id',

                'terms' => $term_id,

            ),

        ),

    );

    return $posts = new WP_Query( $args );

}



function hetmy_get_faq($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'faq',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}



function hetmy_get_customer_reviews($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'customer-reviews',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}





function hetmy_get_news($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'post',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );

}



function hetmy_get_news_with_exclude($no){

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'post',

        'post_status'     => 'publish',

        'exclude'         => array(get_the_ID()),

        'post__not_in'    => array(get_the_ID()),

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );

}
