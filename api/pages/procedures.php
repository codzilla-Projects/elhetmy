<?php
error_reporting('E_ALL');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');
$path = preg_replace( '/wp-content.*$/', '', __DIR__ );
require_once($path.'wp-load.php');
require_once('../helpers/API-Handler.php');

if ( isset($_GET['action']) && $_GET['action'] === 'procedures')  {
    $lang           = $_GET['lang'];


    /*----------------------Procedures Data----------------------*/
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
            $procedures_data->title                 = get_the_title();
            array_push($procedures, $procedures_data);
            endwhile; wp_reset_query(); endif;
            $procedures_cat->posts        = $procedures;
            array_push($terms, $procedures_cat);
        endif;
    endforeach;

    /*----------------------Sending Data----------------------*/
    $data->procedures    = $terms;

    if($data){
        sendResponse($data);
    }else{
        errorResponse('Something Is Wrong !!');
    }
}

if ( isset($_GET['action']) && $_GET['action'] === 'single-procedure-data')  {

    $lang           = $_GET['lang'];


    /*----------------------Procedures Data----------------------*/
    $procedure_id = $_GET['procedure_id'];
    if(empty($procedure_id)) errorResponse('Procedure ID !!');

    $procedure = get_post($procedure_id);

    $procedure_data                        = new stdClass();
    $procedure_id                          = $procedure->ID;
    $procedure_data->id                    = $procedure_id;
    $procedure_data->title                 = $procedure->post_title;
    $procedure_data->content               = $procedure->post_content;
    $procedure_data->image                 = get_the_post_thumbnail_url($procedure_id);

    $procedure_gallary = array();

    $images =  get_post_meta($procedure_id,'thumbnail_ids');

    foreach ($images as $image) {
        $url = wp_get_attachment_url($image);

        array_push($procedure_gallary, $url);

    }
    $procedure_data->gallery = $procedure_gallary;

    /*----------------------Sending Data----------------------*/

    if($procedure_data){
        sendResponse($procedure_data);
    }else{
        errorResponse('Something Is Wrong !!');
    }
}
