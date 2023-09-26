<?php

function home_page_area_callback(){

    $wp_editor_settings = array(

        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

        'textarea_rows'=> 2	);

    if( isset( $_POST['hetmy_save'] ) && !empty( $_POST['hetmy_save']) ){

        foreach ($_POST as $key => $value) {

            if(in_array($key,['about_content','about_second_content','about_content_ar','about_second_content_ar','hetmy_map_code'])){

                $value = stripcslashes($value);

            }

            update_option( $key, $value);}



                if(!isset($_POST['slider_hidden'])) {delete_option('slider_hidden');}



                if(!isset($_POST['about_hidden'])) {delete_option('about_hidden');}



                if(!isset($_POST['partners_hidden'])) {delete_option('partners_hidden');}



                if(!isset($_POST['procedures_hidden'])) {delete_option('procedures_hidden');}



                if(!isset($_POST['info_hidden'])) {delete_option('info_hidden');}



                if(!isset($_POST['news_hidden'])) {delete_option('news_hidden');}



                if(!isset($_POST['form_hidden'])) {delete_option('form_hidden');}



                if(!isset($_POST['map_hidden'])) {delete_option('map_hidden');}



                if(!isset($_POST['contact_hidden'])) {delete_option('contact_hidden');}

            }

        ?>


        <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
        <div class="container-fluid text-left padding-right-4">



            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">



                    <!-- Top Navigation -->



                    <header class="codrops-header">



                        <h1 class="text-center hetmy-title"><span>Home Page Settings</span></h1>



                    </header>



                </div>



                    <br/>



                <div class="d-flex align-items-start p-0 m-0">



                    <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                        <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Slider</button>



                        <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">About Company</button>



                        <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Partners</button>



                        <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Procedures</button>



                        <button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">Information</button>



                        <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Parallax Image</button>



                        <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">Blog</button>



                        <button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="false">Contact Form</button>



                        <button class="nav-link" id="v-pills-ninthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ninthsection" type="button" role="tab" aria-controls="v-pills-ninthsection" aria-selected="false">Map</button>



                        <button class="nav-link" id="v-pills-tenthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenthsection" type="button" role="tab" aria-controls="v-pills-tenthsection" aria-selected="false">Contact Us</button>



                    </div>

                    <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                        <form class="form-horizontal form_back p-5" method="post" action="#">				<div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="slider_hidden" name="slider_hidden" value="1" <?=get_option('slider_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="slider_hidden" class="text-white">Hidden Section</label>

                                    </div>

                                    <div class="form-group text-left">



                                          <label for="slider_number" class="col-sm-12 control-label text-white">Slider Number Show in Home Page</label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="slider_number" size="60" value="<?=get_option('slider_number'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="about_hidden" name="about_hidden" value="1" <?=get_option('about_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="about_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                          <label for="about_img" class="col-sm-12 text-left  control-label text-white">First Image</label>

                                          <div class="col-sm-12 text-left ">

                                            <input class="about_img_url hetmy_half" type="text" name="about_img" size="60" value="<?=get_option('about_img'); ?>">

                                            <a href="#" class="about_img_upload btn btn-info">Choose</a>

                                            <img class="about_img" src="<?=get_option('about_img'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="about_title" name="about_title" value="<?=get_option('about_title'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="about_content" class="col-sm-6 control-label text-white">First Content</label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('about_content'), 'about_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content','class'=>'form-control',) );  ?>



                                        </div>



                                    </div>



                                    <div class="form-group">



                                        <label for="about_second_content" class="col-sm-6 control-label text-white">Second Content</label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('about_second_content'), 'about_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_second_content','class'=>'form-control',) );  ?>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="about_link_text" name="about_link_text" value="<?=get_option('about_link_text'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="about_link_url" name="about_link_url" value="<?=get_option('about_link_url'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="partners_hidden" name="partners_hidden" value="1" <?=get_option('partners_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="partners_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group text-left">

                                          <label for="partners_number" class="col-sm-12 control-label text-white">partners Number Show in home Page</label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="partners_number" size="60" value="<?=get_option('partners_number'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="procedures_hidden" name="procedures_hidden" value="1" <?=get_option('procedures_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="procedures_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                        <label for="procedures_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="procedures_title" name="procedures_title" value="<?=get_option('procedures_title'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="procedures_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="procedures_link_text" name="procedures_link_text" value="<?=get_option('procedures_link_text'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="procedures_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="procedures_link_url" name="procedures_link_url" value="<?=get_option('procedures_link_url'); ?>">

                                        </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="info_hidden" name="info_hidden" value="1" <?=get_option('info_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="info_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                          <label for="info_img" class="col-sm-12 text-left  control-label text-white">Image</label>

                                          <div class="col-sm-12 text-left ">

                                            <input class="info_img_url hetmy_half" type="text" name="info_img" size="60" value="<?=get_option('info_img'); ?>">

                                            <a href="#" class="info_img_upload btn btn-info">Choose</a>

                                            <img class="info_img" src="<?=get_option('info_img'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="info_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="info_title" name="info_title" value="<?=get_option('info_title'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="info_content" class="col-sm-6 control-label text-white">Content</label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('info_content'), 'info_content',  array('textarea_rows'=>5,'textarea_name'=> 'info_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'info_content','class'=>'form-control',) );  ?>



                                        </div>



                                    </div>



                                    <div class="form-group">

                                        <label for="info_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="info_link_text" name="info_link_text" value="<?=get_option('info_link_text'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="info_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="info_link_url" name="info_link_url" value="<?=get_option('info_link_url'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="parallax_hidden" name="parallax_hidden" value="1" <?=get_option('parallax_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="parallax_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                          <label for="parallax_img" class="col-sm-12 text-left  control-label text-white">Image</label>

                                          <div class="col-sm-12 text-left ">

                                            <input class="parallax_img_url hetmy_half" type="text" name="parallax_img" size="60" value="<?=get_option('parallax_img'); ?>">

                                            <a href="#" class="parallax_img_upload btn btn-info">Choose</a>

                                            <img class="parallax_img" src="<?=get_option('parallax_img'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="parallax_title" name="parallax_title" value="<?=get_option('parallax_title'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="parallax_link_text" name="parallax_link_text" value="<?=get_option('parallax_link_text'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="parallax_link_url" name="parallax_link_url" value="<?=get_option('parallax_link_url'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="news_hidden" name="news_hidden" value="1" <?=get_option('news_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="news_hidden" class="text-white">Hidden Section</label>

                                    </div>

                                    <div class="form-group text-left">



                                          <label for="news_number" class="col-sm-12 control-label text-white">News Number Show in Home Page</label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="news_number" size="60" value="<?=get_option('news_number'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="form_hidden" name="form_hidden" value="1" <?=get_option('form_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="form_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                        <label for="form_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="form_title" name="form_title" value="<?=get_option('form_title'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="form_content" class="col-sm-6 control-label text-white">Content</label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('form_content'), 'form_content',  array('textarea_rows'=>5,'textarea_name'=> 'form_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'form_content','class'=>'form-control',) );  ?>

                                        </div>



                                    </div>



                                    <div class="form-group">

                                        <label for="form_shortcode" class="col-sm-12 text-left  control-label text-white">Contact Form Shortcode ID</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="form_shortcode" name="form_shortcode" value="<?=get_option('form_shortcode'); ?>">

                                        </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-ninthsection" role="tabpanel" aria-labelledby="v-pills-ninthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="map_hidden" name="map_hidden" value="1" <?=get_option('map_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="map_hidden" class="text-white">Hidden Section</label>

                                    </div>
                                    <div class="form-group">
                                        <label for="contact_map_code" class="col-sm-6 control-label text-white">Map Iframe </label>
                                        <div class="col-sm-12">
                                            <?php wp_editor( get_option('hetmy_map_code'), 'hetmy_map_code',  array('textarea_rows'=>5,'textarea_name'=> 'hetmy_map_code', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_map_code','class'=>'form-control',) );  ?>
                                        </div>
                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-tenthsection" role="tabpanel" aria-labelledby="v-pills-tenthsection-tab">



                                    <div class="form-group text-left">

                                        <div class="inline-block">

                                            <input type="checkbox" id="contact_hidden" name="contact_hidden" value="1" <?=get_option('contact_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="contact_hidden" class="text-white">Hidden Section</label>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_title" class="col-sm-12 text-left  control-label text-white">Title</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="contact_title" name="contact_title" value="<?=get_option('contact_title'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="contact_link_text" name="contact_link_text" value="<?=get_option('contact_link_text'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

                                        <div class="col-sm-12 text-left ">

                                            <input type="text" class="form-control" id="contact_link_url" name="contact_link_url" value="<?=get_option('contact_link_url'); ?>">

                                        </div>

                                    </div>



                                </div>

                            </div>

                            <div class="form-group">

                                <div class="col-sm-12">

                                    <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="Save Settings">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div><!-- /container -->
        <?php elseif ( ICL_LANGUAGE_CODE=='ar' ) :?>
            <div dir="rtl" class="container-fluid text-right padding-right-4">



            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">



                    <!-- Top Navigation -->



                    <header class="codrops-header">



                        <h1 class="text-center hetmy-title"><span>إعدادات الصفحة الرئيسية</span></h1>



                    </header>



                </div>



                    <br/>



                <div class="d-flex align-items-start p-0 m-0">



                    <div class="nav flex-column nav-pills ms-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                        <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الصور المتحركة </button>



                        <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">عن الدكتور </button>



                        <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">العملاء </button>



                        <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">الاجراءات </button>



                        <button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">المعلومات </button>



                        <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">صورة المنظر</button>



                        <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">المقالات </button>



                        <button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="false">نموذج اتصل بنا </button>



                        <button class="nav-link" id="v-pills-ninthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ninthsection" type="button" role="tab" aria-controls="v-pills-ninthsection" aria-selected="false">الخريطة </button>



                        <button class="nav-link" id="v-pills-tenthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenthsection" type="button" role="tab" aria-controls="v-pills-tenthsection" aria-selected="false">تواصل معنا </button>



                    </div>

                    <div class="tab-content col-sm-9 col-md-9 col-lg-9" id="v-pills-tabContent">

                        <form class="form-horizontal form_back_ar p-5" method="post" action="#">				<div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="slider_hidden" name="slider_hidden" value="1" <?=get_option('slider_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="slider_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>

                                    <div class="form-group text-right">



                                          <label for="slider_number_ar" class="col-sm-12 control-label text-white">عدد الصور المتحركه التى تظهر فى الصفحة الرئيسية</label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="slider_number_ar" size="60" value="<?=get_option('slider_number_ar'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="about_hidden" name="about_hidden" value="1" <?=get_option('about_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="about_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                          <label for="about_img_ar" class="col-sm-12 text-right  control-label text-white">الصورة الاولى </label>

                                          <div class="col-sm-12 text-right ">

                                            <input class="about_img_ar_url hetmy_half" type="text" name="about_img_ar" size="60" value="<?=get_option('about_img_ar'); ?>">

                                            <a href="#" class="about_img_ar_upload btn btn-info">اختر </a>

                                            <img class="about_img_ar" src="<?=get_option('about_img_ar'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="about_title_ar" name="about_title_ar" value="<?=get_option('about_title_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="about_content_ar" class="col-sm-6 control-label text-white">المقال الاول </label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('about_content_ar'), 'about_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content_ar','class'=>'form-control',) );  ?>



                                        </div>



                                    </div>



                                    <div class="form-group">



                                        <label for="about_second_content_ar" class="col-sm-6 control-label text-white">المقال الثانى </label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('about_second_content_ar'), 'about_second_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_second_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_second_content_ar','class'=>'form-control',) );  ?>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_link_text_ar" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="about_link_text_ar" name="about_link_text_ar" value="<?=get_option('about_link_text_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="about_link_url_ar" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="about_link_url_ar" name="about_link_url_ar" value="<?=get_option('about_link_url_ar'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="partners_hidden" name="partners_hidden" value="1" <?=get_option('partners_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="partners_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group text-right">

                                          <label for="partners_number_ar" class="col-sm-12 control-label text-white">عدد العملاء التى تود اظهارها فى الصفحة الرئيسية </label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="partners_number_ar" size="60" value="<?=get_option('partners_number_ar'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="procedures_hidden" name="procedures_hidden" value="1" <?=get_option('procedures_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="procedures_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                        <label for="procedures_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="procedures_title_ar" name="procedures_title_ar" value="<?=get_option('procedures_title_ar'); ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="procedures_link_text_ar" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="procedures_link_text_ar" name="procedures_link_text_ar" value="<?=get_option('procedures_link_text_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="procedures_link_url_ar" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="procedures_link_url_ar" name="procedures_link_url_ar" value="<?=get_option('procedures_link_url_ar'); ?>">

                                        </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="info_hidden" name="info_hidden" value="1" <?=get_option('info_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="info_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                          <label for="info_img_ar" class="col-sm-12 text-right  control-label text-white">الصورة </label>

                                          <div class="col-sm-12 text-right ">

                                            <input class="info_img_ar_url hetmy_half" type="text" name="info_img_ar" size="60" value="<?=get_option('info_img_ar'); ?>">

                                            <a href="#" class="info_img_ar_upload btn btn-info">اختر </a>

                                            <img class="info_img_ar" src="<?=get_option('info_img_ar'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="info_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="info_title_ar" name="info_title_ar" value="<?=get_option('info_title_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="info_content_ar" class="col-sm-6 control-label text-white">المقال </label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('info_content_ar'), 'info_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'info_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'info_content_ar','class'=>'form-control',) );  ?>



                                        </div>



                                    </div>



                                    <div class="form-group">

                                        <label for="info_link_text_ar" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="info_link_text_ar" name="info_link_text_ar" value="<?=get_option('info_link_text_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="info_link_url_ar" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="info_link_url_ar" name="info_link_url_ar" value="<?=get_option('info_link_url_ar'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="parallax_hidden" name="parallax_hidden" value="1" <?=get_option('parallax_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="parallax_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                          <label for="parallax_img_ar" class="col-sm-12 text-right  control-label text-white">الصورة </label>

                                          <div class="col-sm-12 text-right ">

                                            <input class="parallax_img_ar_url hetmy_half" type="text" name="parallax_img_ar" size="60" value="<?=get_option('parallax_img_ar'); ?>">

                                            <a href="#" class="parallax_img_ar_upload btn btn-info">اختر </a>

                                            <img class="parallax_img_ar" src="<?=get_option('parallax_img_ar'); ?>" height="100" style="max-width:100%" />

                                          </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="parallax_title_ar" name="parallax_title_ar" value="<?=get_option('parallax_title_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_link_text_ar" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="parallax_link_text_ar" name="parallax_link_text_ar" value="<?=get_option('parallax_link_text_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="parallax_link_url_ar" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="parallax_link_url_ar" name="parallax_link_url_ar" value="<?=get_option('parallax_link_url_ar'); ?>">

                                        </div>

                                    </div>



                                </div>



                                <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="news_hidden" name="news_hidden" value="1" <?=get_option('news_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="news_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>

                                    <div class="form-group text-right">



                                          <label for="news_number_ar" class="col-sm-12 control-label text-white">عدد المقالات التى تود اظهارها فى الصفحة الرئيسية </label>

                                          <div class="col-sm-12">

                                            <input class="atco_half w-100" type="number" name="news_number_ar" size="60" value="<?=get_option('news_number_ar'); ?>">

                                      </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="form_hidden" name="form_hidden" value="1" <?=get_option('form_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="form_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                        <label for="form_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="form_title_ar" name="form_title_ar" value="<?=get_option('form_title_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">



                                        <label for="form_content_ar" class="col-sm-6 control-label text-white">المقال </label>



                                        <div class="col-sm-12">



                                            <?php wp_editor( get_option('form_content_ar'), 'form_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'form_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'form_content_ar','class'=>'form-control',) );  ?>

                                        </div>



                                    </div>

                                    <div class="form-group">

                                        <label for="form_shortcode_ar" class="col-sm-12 text-right  control-label text-white">Contact Form Arabic Shortcode ID</label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="form_shortcode_ar" name="form_shortcode_ar" value="<?=get_option('form_shortcode_ar'); ?>">

                                        </div>

                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-ninthsection" role="tabpanel" aria-labelledby="v-pills-ninthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="map_hidden" name="map_hidden" value="1" <?=get_option('map_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="map_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>
                                    <div class="form-group">
                                        <label for="contact_map_code" class="col-sm-6 control-label text-white">كود الخريطة </label>
                                        <div class="col-sm-12">
                                            <?php wp_editor( get_option('hetmy_map_code'), 'hetmy_map_code',  array('textarea_rows'=>5,'textarea_name'=> 'hetmy_map_code', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_map_code','class'=>'form-control',) );  ?>
                                        </div>
                                    </div>

                                </div>



                                <div class="tab-pane fade show" id="v-pills-tenthsection" role="tabpanel" aria-labelledby="v-pills-tenthsection-tab">



                                    <div class="form-group text-right">

                                        <div class="inline-block">

                                            <input type="checkbox" id="contact_hidden" name="contact_hidden" value="1" <?=get_option('contact_hidden') == '1' ? 'checked' : ''; ?>>

                                        </div>

                                        <label for="contact_hidden" class="text-white">إخفاء السكشن </label>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="contact_title_ar" name="contact_title_ar" value="<?=get_option('contact_title_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_link_text_ar" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="contact_link_text_ar" name="contact_link_text_ar" value="<?=get_option('contact_link_text_ar'); ?>">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <label for="contact_link_url_ar" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>

                                        <div class="col-sm-12 text-right ">

                                            <input type="text" class="form-control" id="contact_link_url_ar" name="contact_link_url_ar" value="<?=get_option('contact_link_url_ar'); ?>">

                                        </div>

                                    </div>



                                </div>

                            </div>

                            <div class="form-group">

                                <div class="col-sm-12">

                                    <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="حفظ الاعدادات ">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div><!-- /container -->
    <?php else:?>
        <div class="container-fluid d-flex align-items-center justify-content-center vw-100">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Top Navigation -->
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                          <div>
                            Please Choose Language
                          </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif?>
<?php



}
