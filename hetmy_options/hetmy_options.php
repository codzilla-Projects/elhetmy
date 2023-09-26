<?php function main_content_area_callback(){	$wp_editor_settings = array(
    'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ),
// note that spaces in this list seem to cause an issue
    'textarea_rows'=> 2	);
if( isset( $_POST['hetmy_save'] ) && !empty( $_POST['hetmy_save']) ){
    foreach ($_POST as $key => $value) {
        if(in_array($key,['footer_content','hetmy_map_code'])){
            $value = stripcslashes($value);
        }
            update_option( $key, $value);
        }
    }?>

    <div class="container-fluid text-left padding-right-4">

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center hetmy-title"><span>General Settings</span></h1>

            </header>

        </div>

            <br/>

        <div class="d-flex align-items-start p-0 m-0">

            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>

                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>

                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>

                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>
            </div>

            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form class="form-horizontal form_back p-5" method="post" action="#">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group">
                                  <label for="hetmy_website_logo" class="col-sm-12 text-left  control-label text-white"> Header Logo</label>
                                  <div class="col-sm-12 text-left ">
                                    <input class="header_img_url hetmy_half" type="text" name="hetmy_logo_img" size="60" value="<?php echo get_option('hetmy_logo_img'); ?>">
                                    <a href="#" class="header_img_upload btn btn-info">Choose</a>
                                    <img class="header_img" src="<?php echo get_option('hetmy_logo_img'); ?>" height="100" style="max-width:100%" />
                                  </div>
                            </div>

                            <div class="form-group">
                                  <label for="hetmy_sticky_logo" class="col-sm-12 text-left  control-label text-white"> Header Sticky Logo</label>
                                  <div class="col-sm-12 text-left ">
                                    <input class="header_sticky_img_url hetmy_half" type="text" name="hetmy_sticky_img" size="60" value="<?php echo get_option('hetmy_sticky_img'); ?>">
                                    <a href="#" class="header_sticky_img_upload btn btn-info">Choose</a>
                                    <img class="header_sticky_img" src="<?php echo get_option('hetmy_sticky_img'); ?>" height="100" style="max-width:100%" />
                                  </div>
                            </div>

                            <div class="form-group">
                                  <label for="hetmy_footer_logo" class="col-sm-12 text-left  control-label text-white"> Footer Logo</label>
                                  <div class="col-sm-12 text-left ">
                                    <input class="footer_img_url hetmy_half" type="text" name="hetmy_footer_logo_img" size="60" value="<?php echo get_option('hetmy_footer_logo_img'); ?>">
                                    <a href="#" class="footer_img_upload btn btn-info">Choose</a>
                                    <img class="footer_img" src="<?php echo get_option('hetmy_footer_logo_img'); ?>" height="100" style="max-width:100%" />
                                  </div>
                            </div>

                            <div class="form-group">
                                  <label for="hetmy_favicon" class="col-sm-12 text-left  control-label text-white"> Favicon </label>
                                  <div class="col-sm-12 text-left ">
                                    <input class="favicon_img_url hetmy_half" type="text" name="hetmy_favicon" size="60" value="<?php echo get_option('hetmy_favicon'); ?>">
                                    <a href="#" class="favicon_img_upload btn btn-info">Choose</a>
                                    <img class="favicon_img" src="<?php echo get_option('hetmy_favicon'); ?>" height="100" style="max-width:100%" />
                                  </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                            <div class="form-group">
                                <label for="hetmy_phone" class="col-sm-12 text-left  control-label text-white">Phone Number</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_phone" name="hetmy_phone" value="<?php echo get_option('hetmy_phone'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hetmy_email" class="col-sm-12 text-left  control-label text-white">Email Address</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="email" class="form-control text-left" id="hetmy_email" name="hetmy_email" value="<?php echo get_option('hetmy_email'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hetmy_location" class="col-sm-12 text-left  control-label text-white">Location</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control text-left" id="hetmy_location" name="hetmy_location" value="<?php echo get_option('hetmy_location'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hetmy_location_ar" class="col-sm-12 text-left  control-label text-white">Arabic Location</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control text-left" id="hetmy_location_ar" name="hetmy_location_ar" value="<?php echo get_option('hetmy_location_ar'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hetmy_map" class="col-sm-12 text-left  control-label text-white">Maps Link</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control text-left" id="hetmy_map" name="hetmy_map" value="<?php echo get_option('hetmy_map'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_map_code" class="col-sm-6 control-label text-white">Map Iframe </label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('hetmy_map_code'), 'hetmy_map_code',  array('textarea_rows'=>5,'textarea_name'=> 'hetmy_map_code', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_map_code','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                            <div class="form-group">
                                <label for="hetmy_fb" class="col-sm-12 text-left  control-label text-white">Facebook</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_fb" name="hetmy_fb" value="<?php echo get_option('hetmy_fb'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hetmy_twitter" class="col-sm-12 text-left  control-label text-white">Twitter</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_twitter" name="hetmy_twitter" value="<?php echo get_option('hetmy_twitter'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hetmy_youtube" class="col-sm-12 text-left  control-label text-white">Youtube</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_youtube" name="hetmy_youtube" value="<?php echo get_option('hetmy_youtube'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hetmy_insta" class="col-sm-12 text-left  control-label text-white">Instagram</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_insta" name="hetmy_insta" value="<?php echo get_option('hetmy_insta'); ?>">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="hetmy_whatsapp" class="col-sm-12 text-left  control-label text-white">WhatsApp</label>
                                <div class="col-sm-12 text-left ">
                                    <input type="text" class="form-control" id="hetmy_whatsapp" name="hetmy_whatsapp" value="<?php echo get_option('hetmy_whatsapp'); ?>">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                            <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
                            <div class="form-group text-left">
                                <label for="footer_content" class="col-sm-6 control-label text-white">Footer Content</label>

                                <div class="col-sm-12">

                                    <?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                            <?php elseif ( ICL_LANGUAGE_CODE=='ar' ) :?>
                            <div class="form-group text-right">
                                <label for="footer_content_ar" class="col-sm-6 control-label text-white">المحتوى العربى</label>

                                <div class="col-sm-12">

                                    <?php wp_editor( get_option('footer_content_ar'), 'footer_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content_ar','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                            <?php endif?>
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
<?php
}
