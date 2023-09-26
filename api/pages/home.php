<?php
error_reporting('E_ALL');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');
$path = preg_replace( '/wp-content.*$/', '', __DIR__ );
require_once($path.'wp-load.php');
require_once('../helpers/API-Handler.php');

if ( isset($_GET['action']) && $_GET['action'] === 'homepage')  {
    /*----------------------Slider Data----------------------*/
    $lang           = $_GET['lang'];

    $slider_args = array(
        'post_type'       => 'slider',
        'post_status'     => 'publish',
        'posts_per_page'  =>  1,
        'orderby'         => 'date',
        'order'           => 'ASC',
        'lang'            => $lang
    );
     $xsliders = new WP_Query( $slider_args );

         $sliders = array();
        if ( $xsliders->have_posts() ) : while ( $xsliders->have_posts() ) : $xsliders->the_post();

            $slider_data                       = new stdClass();
            $slider_id                         = get_the_ID();
            $slider_data->id                   = $slider_id;
            $slider_data->title                = get_the_title();
            $slider_data->content              = get_the_content();
            $slider_data->image               = get_the_post_thumbnail_url($slider_id);
            $slider_data->link_text          = get_post_meta( $slider_id, 'hetmy_slider_link_text', true );

        array_push($sliders, $slider_data);

        endwhile; wp_reset_query(); endif;

    /*----------------------About Data----------------------*/
    $about_home                    = new stdClass();
    $about_home->image             =  get_option_lang('about_img',$lang);
    $about_home->title             =  get_option_lang('about_title',$lang);
    $about_home->content           =  get_option_lang('about_content',$lang);
    $about_home->second_content    =  get_option_lang('about_second_content',$lang);
    $about_home->link_text         =  get_option_lang('about_link_text',$lang);
    /*----------------------Partners Data----------------------*/
    $number_partners      = $_GET['number_partners'];
    $partner_args = array(
        'post_type'       => 'partner',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $number_partners,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
     $xpartners = new WP_Query( $partner_args );

         $partners = array();
        if ( $xpartners->have_posts() ) : while ( $xpartners->have_posts() ) : $xpartners->the_post();

            $partners_data                       = new stdClass();
            $partners_id                         = get_the_ID();
            $partners_data->id                   = $partners_id;
            $partners_data->image               = get_the_post_thumbnail_url($partners_id);

        array_push($partners, $partners_data);

        endwhile; wp_reset_query(); endif;
    /*----------------------Procedures Data----------------------*/
    $procedures_home                             = new stdClass();
    $procedures_home->title           = get_option_lang('procedures_title',$lang);
    /*----------------------Procedures Data----------------------*/
    $procedures_number                           = $_GET['procedures_number'];
    $xterms = get_terms(
     array(
        'taxonomy'        => 'procedures-category',
        'hide_empty'      => false,
        'orderby'         => 'name',
        'order'           => 'ASC',
        'number'          => $procedures_number
        )
    );
    $terms = array();
    foreach ($xterms as $xterm) : 
        if ($xterm->count != 0) :
        $procedures_cat              = new stdClass();
        $procedures_cat_id           = $xterm->term_id;
        $procedures_cat->id          = $procedures_cat_id;
        $procedures_cat->image      = z_taxonomy_image_url($xterm->term_id);
        $procedures_cat->title       = $xterm->name;
    $procedures_args = array(
        'post_type'       => 'procedures',
        'post_status'     => 'publish',
        'posts_per_page'  =>  -1,
        'orderby'         => 'date',
        'order'           => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'procedures-category',
                'field' => 'term_id',
                'terms' => $procedures_cat_id,
            ),
        ),
    );
    $xprocedures = new WP_Query( $procedures_args );
    $procedures = array();
    if ( $xprocedures->have_posts() ) : while ( $xprocedures->have_posts() ) : $xprocedures->the_post();
    $procedures_data                        = new stdClass();
    $procedures_id                          = get_the_ID();
    $procedures_data->id                    = $procedures_id;
    $procedures_data->title                  = get_the_title();
    array_push($procedures, $procedures_data);
    endwhile; wp_reset_query(); endif;
    $procedures_cat->posts        = $procedures;
    array_push($terms, $procedures_cat);
    endif; endforeach;
    /*----------------------Featured Data----------------------*/
    $featured_home                           = new stdClass();
    $featured_home->image                 = get_option_lang('info_img',$lang);
    $featured_home->title               = get_option_lang('info_title',$lang);
    $featured_home->content             = get_option_lang('info_content',$lang);
    $featured_home->link_text           = get_option_lang('info_link_text',$lang);
    /*----------------------Parallax Data----------------------*/
    $parallax_home                           = new stdClass();
    $parallax_home->image             = get_option_lang('parallax_img',$lang);
    $parallax_home->title           = get_option_lang('parallax_title',$lang);
    $parallax_home->link_text       = get_option_lang('parallax_link_text',$lang);
    /*----------------------News Data----------------------*/
    $number_news      = $_GET['posts'];
    $new_args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $number_news,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
     $xnews = new WP_Query( $new_args );

        $news = array();
        if ( $xnews->have_posts() ) : while ( $xnews->have_posts() ) : $xnews->the_post();

            $news_data                       = new stdClass();
            $news_id                         = get_the_ID();
            $news_data->id                   = $news_id;
            $news_data->image                = get_the_post_thumbnail_url($news_id);
            $news_data->title                = get_the_title();
            $news_data->content              = get_the_content();
            $news_data->excerpt              =  get_the_excerpt();

        array_push($news, $news_data);

        endwhile; wp_reset_query(); endif;
    /*----------------------Form Data----------------------*/
    $form_home                               = new stdClass();
    $form_home->title                  = get_option_lang('form_title',$lang);
    $form_home->location               = get_option('hetmy_location');
    $form_home->email                  = get_option('hetmy_email');
    $form_home->phone                  = get_option('hetmy_phone');
    $first_section->facebook           =  get_option('hetmy_fb');
    $first_section->twitter            =  get_option('hetmy_twitter');
    $first_section->insta              =  get_option('hetmy_insta');

    /*----------------------Sending Data----------------------*/
    $data->hero_data       = $sliders;
    $data->about_home        = $about_home;
    $data->partners_data     = $partners;
    $data->procedures_home   = $procedures_home;
    $data->procedures_cat    = $terms;
    $data->featured_home     = $featured_home;
    $data->parallax_home     = $parallax_home;
    $data->news_data         = $news;
    $data->form_home         = $form_home;

    if($data){
        sendResponse($data);
    }else{
        errorResponse('Something Is Wrong !!');
    }
}
