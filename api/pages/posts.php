<?php
error_reporting('E_ALL');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: application/json');
$path = preg_replace( '/wp-content.*$/', '', __DIR__ );
require_once($path.'wp-load.php');
require_once('../helpers/API-Handler.php');

if ( isset($_GET['action']) && $_GET['action'] === 'posts')  {



    $offset                    = $_GET['offset'] ? $_GET['offset'] : '0';
    $posts_per_page            = intval($_GET['posts_per_page']) ? intval($_GET['posts_per_page']) : 10;
    $lang                      = $_GET['lang'];
    $new_args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $posts_per_page,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'offset'          => $offset,
        'lang'            => $lang
    );

    $xposts = new WP_Query( $new_args );

     $posts = array();

    if ( $xposts->have_posts() ) : while ( $xposts->have_posts() ) : $xposts->the_post();

        $post_data                       = new stdClass();
        $post_id                         = get_the_ID();
        $post_data->id                   = $post_id;
        $post_data->image                = get_the_post_thumbnail_url($post_id);
        $post_data->title                = get_the_title();
        $post_data->content              = strip_tags(get_the_content());
        $post_data->excerpt              = strip_tags(get_the_excerpt());

    array_push($posts, $post_data);

    endwhile; wp_reset_query(); endif;

    $data = $posts;

    $response = array(
        'status' 	=> 'success',
        'data'		=> $data
    );
    header("HTTP/1.1 200 OK");
    echo json_encode($response);
    die();

    if($data){
        sendResponse($data);
    }else{
        errorResponse('Something Is Wrong !!');
    }
}
