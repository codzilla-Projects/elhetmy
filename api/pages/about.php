<?php
error_reporting('E_ALL');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');
$path = preg_replace( '/wp-content.*$/', '', __DIR__ );
require_once($path.'wp-load.php');
require_once('../helpers/API-Handler.php');

if ( isset($_GET['action']) && $_GET['action'] === 'aboutme')  {
    /*----------------------Slider Data----------------------*/
    $lang           = $_GET['lang'];

    /*----------------------First Section----------------------*/
    $first_section                            = new stdClass();
    $first_section->image                     =  get_option_lang('about_page_img',$lang);
    $first_section->title                     =  get_option_lang('about_page_title',$lang);
    $first_section->content                   =  get_option_lang('about_page_content',$lang);
    $first_section->second_title              =  get_option_lang('about_page_second_title',$lang);
    $first_section->second_image              =  get_option_lang('about_page_second_img',$lang);
    $first_section->third_image               =  get_option_lang('about_page_third_img',$lang);
    $first_section->facebook                  =  get_option('hetmy_fb');
    $first_section->twitter                   =  get_option('hetmy_twitter');
    $first_section->insta                     =  get_option('hetmy_insta');
    /*----------------------Second Section----------------------*/

    $second_section                           = new stdClass();
    $second_section->title                    =  get_option_lang('second_about_page_title',$lang);
    $second_section->subtitle                 =  get_option_lang('second_about_page_small_title',$lang);

    $procedures_number      =  get_option('second_about_page_number');

    $xterms = get_terms(
     array(
        'taxonomy'        => 'procedures-category',
        'hide_empty'      => false,
        'orderby'         => 'name',
        'order'           => 'ASC',
        )
    );
    $terms = array();
    foreach ($xterms as $xterm) :
        if ($xterm->count != 0) :
            $procedures_cat              = new stdClass();
            $procedures_cat_id           = $xterm->term_id;
            $procedures_cat->id          = $procedures_cat_id;
            $procedures_cat->title       = $xterm->name;

            array_push($terms, $procedures_cat);
        endif;
    endforeach;
    $second_section->services                 =  $terms;


/*----------------------Third Section----------------------*/

    $third_section                           = new stdClass();
    $third_section->image                    =  get_option('third_about_page_img');

    $testimonials_number      =  get_option('third_about_page_number');

    $args = array(
        'post_type'       => 'customer-reviews',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $testimonials_number,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    $testimonials =get_posts($args);
    $xtestimonials = array();
    foreach ($testimonials as $testimonial) :

        $testimonial_data              = new stdClass();
        $testimonial_id                = $testimonial->ID;
        $testimonial_data->id          = $testimonial_id;
        $testimonial_data->title       = $testimonial->post_title;
        $testimonial_data->content     = $testimonial->post_content;

        array_push($xtestimonials, $testimonial_data);
    endforeach;

    $third_section->testimonials           =  $xtestimonials;



    /*----------------------Sending Data----------------------*/
    $data->first_section        = $first_section;
    $data->second_section       = $second_section;
    $data->third_section        = $third_section;

    if($data){
        sendResponse($data);
    }else{
        errorResponse('Something Is Wrong !!');
    }
}
