<?php 
function contact_page_area_callback(){
    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );    
    if( isset( $_POST['hetmy_save'] ) && !empty( $_POST['hetmy_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['contact_page_content'])){
                $value = stripcslashes($value);
            }               
            update_option( $key, $value);
        }
    }
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
<div class="container-fluid text-left padding-right-4">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center hetmy-title"><span>Contact Us Page Settings</span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <form class="form-horizontal p-4" method="post" action="#">
                <div class="form-group">
                    <label for="contact_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
                    <div class="col-sm-12 text-left ">
                        <input type="text" class="form-control" id="contact_page_title" name="contact_page_title" value="<?php echo get_option('contact_page_title'); ?>">
                    </div>
                </div>

                <div class="form-group text-left">
                    <label for="contact_page_content" class="col-sm-6 control-label text-white">content</label>
                    <div class="col-sm-12">
                        <?php wp_editor( get_option('contact_page_content'), 'contact_page_content',  array('textarea_rows'=>5,'textarea_name'=> 'contact_page_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_page_content','class'=>'form-control',) );  ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact_form_shortcode" class="col-sm-12 text-left  control-label text-white">Contact Form Shortcode ID</label>
                    <div class="col-sm-12 text-left ">
                        <input type="text" class="form-control" id="contact_form_shortcode" name="contact_form_shortcode" value="<?php echo get_option('contact_form_shortcode'); ?>">
                    </div>
                </div>
                      
                <div class="form-group text-left">
                    <div class="col-sm-12">
                    <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="Save Settings">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- /container -->
<?php elseif ( ICL_LANGUAGE_CODE=='ar' ) : ?>
 <div dir="rtl" class="container-fluid text-right padding-right-4">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1 class="text-center hetmy-title"><span>إعدادات صفحة تواصل معنا </span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <form class="form-horizontal p-4" method="post" action="#">
                <div class="form-group">
                    <label for="contact_page_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>
                    <div class="col-sm-12 text-right ">
                        <input type="text" class="form-control" id="contact_page_title_ar" name="contact_page_title_ar" value="<?php echo get_option('contact_page_title_ar'); ?>">
                    </div>
                </div>

                <div class="form-group text-right">
                    <label for="contact_page_content_ar" class="col-sm-6 control-label text-white">المقال</label>
                    <div class="col-sm-12">
                        <?php wp_editor( get_option('contact_page_content_ar'), 'contact_page_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'contact_page_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_page_content_ar','class'=>'form-control',) );  ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact_form_shortcode_ar" class="col-sm-12 text-right  control-label text-white">Contact Form Arabic Shortcode ID</label>
                    <div class="col-sm-12 text-right ">
                        <input type="text" class="form-control" id="contact_form_shortcode_ar" name="contact_form_shortcode_ar" value="<?php echo get_option('contact_form_shortcode_ar'); ?>">
                    </div>
                </div>
                      
                <div class="form-group text-right">
                    <div class="col-sm-12">
                    <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="حفظ الاعدادات ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- /container -->   
<?php endif ?>
<?php

}