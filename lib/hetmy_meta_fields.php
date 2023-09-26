<?php 
function hetmy_add_meta_slider() {
    add_meta_box( "slider_extra_data", "Additional Data", "hetmy_slider_data_callback", array("slider"),"normal" );
}
add_action( 'add_meta_boxes', 'hetmy_add_meta_slider' );
/* Display the post meta box. */
    function hetmy_slider_data_callback( $object, $box ) { 
    $hetmy_slider_link_text = esc_attr( get_post_meta( $object->ID, 'hetmy_slider_link_text', true ) );
    $hetmy_slider_link_url = esc_attr( get_post_meta( $object->ID, 'hetmy_slider_link_url', true ) );
?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="hetmy_slider_link_text"><?php _e('Link Text: ','hetmy'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="hetmy_slider_link_text" class="form-control w-100" value="<?php echo $hetmy_slider_link_text; ?>"><br>

            </div>

        </div>

    </div>

</div>
<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="hetmy_slider_link_url"><?php _e('Link URL: ','hetmy'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="hetmy_slider_link_url" class="form-control w-100" value="<?php echo $hetmy_slider_link_url; ?>"><br>

            </div>

        </div>

    </div>

</div>
<?php
}

function hetmy_add_meta_cleints() {
    add_meta_box( "cleints_extra_data", "Additional Data", "hetmy_cleints_data_callback", array("customer-reviews"), "normal" );
}
add_action( 'add_meta_boxes', 'hetmy_add_meta_cleints' );
/* Display the post meta box. */
    function hetmy_cleints_data_callback( $object, $box ) { 
    $hetmy_cleint_position = esc_attr( get_post_meta( $object->ID, 'hetmy_cleint_position', true ) );;
?>
<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="hetmy_cleint_position"><?php _e('Position: ','hetmy'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="hetmy_cleint_position" class="form-control w-100" value="<?php echo $hetmy_cleint_position; ?>"><br>

            </div>

        </div>

    </div>

</div>
<?php
}
add_action( 'save_post', 'hetmy_save_custom_meta', 10, 2 );
function hetmy_save_custom_meta($post_id){
    /*--------------------------------------Slider---------------------------------------*/
    if( isset($_POST['hetmy_slider_link_text']) ){
        update_post_meta($post_id, 'hetmy_slider_link_text', $_POST['hetmy_slider_link_text']);
    }
    else
        delete_post_meta($post_id,'hetmy_slider_link_text');

    if( isset($_POST['hetmy_slider_link_url']) ){
        update_post_meta($post_id, 'hetmy_slider_link_url', $_POST['hetmy_slider_link_url']);
    }
    else
        delete_post_meta($post_id,'hetmy_slider_link_url');

    /*---------------------------------------------Events------------------------------------------------*/
    if( isset($_POST['hetmy_cleint_position']) ){
        update_post_meta($post_id, 'hetmy_cleint_position', $_POST['hetmy_cleint_position']);
    }
    else
        delete_post_meta($post_id,'hetmy_cleint_position');
}