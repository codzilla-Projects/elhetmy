<?php 
function about_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['hetmy_save'] ) && !empty( $_POST['hetmy_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['about_page_content','about_page_content_ar'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);

			if(!isset($_POST['about_page_hidden'])) {delete_option('about_page_hidden');}

			if(!isset($_POST['second_about_page_hidden'])) {delete_option('second_about_page_hidden');}

			if(!isset($_POST['third_about_page_hidden'])) {delete_option('third_about_page_hidden');}

		}
	}
?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
<div class="container-fluid text-left padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center hetmy-title"><span>About Page Settings</span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-section" type="button" role="tab" aria-controls="v-pills-first-section" aria-selected="true">First Section</button>
				<button class="nav-link" id="v-pills-second-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-section" type="button" role="tab" aria-controls="v-pills-second-section" aria-selected="false">Second Section</button>
				<button class="nav-link" id="v-pills-third-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third-section" type="button" role="tab" aria-controls="v-pills-third-section" aria-selected="false">Third Section</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
				<form class="form-horizontal form_back p-5" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-section" role="tabpanel" aria-labelledby="v-pills-first-section-tab">
				        	<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="about_page_hidden" name="about_page_hidden" value="1" <?=get_option('about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="about_page_hidden" class="text-white">Hidden Section</label>
	                        </div>
	                        <div class="form-group">
							  	<label for="about_page_img" class="col-sm-12 text-left  control-label text-white">Image</label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_img_url hetmy_half" type="text" name="about_page_img" size="60" value="<?=get_option('about_page_img'); ?>">
							    	<a href="#" class="about_page_img_upload btn btn-info">Choose</a>
							    	<img class="about_page_img" src="<?=get_option('about_page_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
				        	<div class="form-group">
								<label for="about_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="about_page_title" name="about_page_title" value="<?=get_option('about_page_title'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="about_page_content" class="col-sm-6 control-label text-white">Content</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('about_page_content'), 'about_page_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_page_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_page_content','class'=>'form-control',) );  ?>
								</div>
							</div>
							<div class="form-group">
								<label for="about_page_second_title" class="col-sm-12 text-left  control-label text-white">Title</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="about_page_second_title" name="about_page_second_title" value="<?=get_option('about_page_second_title'); ?>">
								</div>
							</div>

							<div class="form-group">
							  	<label for="about_page_second_img" class="col-sm-12 text-left  control-label text-white">Image</label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_second_img_url hetmy_half" type="text" name="about_page_second_img" size="60" value="<?=get_option('about_page_second_img'); ?>">
							    	<a href="#" class="about_page_second_img_upload btn btn-info">Choose</a>
							    	<img class="about_page_second_img" src="<?=get_option('about_page_second_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
							  	<label for="about_page_third_img" class="col-sm-12 text-left  control-label text-white">Image</label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_third_img_url hetmy_half" type="text" name="about_page_third_img" size="60" value="<?=get_option('about_page_third_img'); ?>">
							    	<a href="#" class="about_page_third_img_upload btn btn-info">Choose</a>
							    	<img class="about_page_third_img" src="<?=get_option('about_page_third_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
							
				        </div>

						<div class="tab-pane fade" id="v-pills-second-section" role="tabpanel" aria-labelledby="v-pills-second-section-tab">									
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="second_about_page_hidden" name="second_about_page_hidden" value="1" <?=get_option('second_about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="second_about_page_hidden" class="text-white">Hidden Section</label>
	                        </div>

				        	<div class="form-group">
								<label for="second_about_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="second_about_page_title" name="second_about_page_title" value="<?=get_option('second_about_page_title'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="second_about_page_small_title" class="col-sm-12 text-left  control-label text-white">Small Title</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="second_about_page_small_title" name="second_about_page_small_title" value="<?=get_option('second_about_page_small_title'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="second_about_page_number" class="col-sm-12 text-left  control-label text-white">Show Services Number</label>
								<div class="col-sm-12 text-left ">
									<input type="number" class="form-control" id="second_about_page_number" name="second_about_page_number" value="<?=get_option('second_about_page_number'); ?>">
								</div>
							</div>

						</div>

						<div class="tab-pane fade" id="v-pills-third-section" role="tabpanel" aria-labelledby="v-pills-third-section-tab">									
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="third_about_page_hidden" name="third_about_page_hidden" value="1" <?=get_option('third_about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="third_about_page_hidden" class="text-white">Hidden Section</label>
	                        </div>

	                        <div class="form-group">
							  	<label for="third_about_page_img" class="col-sm-12 text-left  control-label text-white">Image</label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="third_about_page_img_url hetmy_half" type="text" name="third_about_page_img" size="60" value="<?=get_option('third_about_page_img'); ?>">
							    	<a href="#" class="third_about_page_img_upload btn btn-info">Choose</a>
							    	<img class="third_about_page_img" src="<?=get_option('third_about_page_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
								<label for="third_about_page_number" class="col-sm-12 text-left  control-label text-white">Show Customer Reviews Number</label>
								<div class="col-sm-12 text-left ">
									<input type="number" class="form-control" id="third_about_page_number" name="third_about_page_number" value="<?=get_option('third_about_page_number'); ?>">
								</div>
							</div>
						</div>
                        <div class="form-group text-left">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="Save Settings">
                            </div>
                        </div>
                    </div>
				</form>
		    </div>
	    </div>
    </div>
</div><!-- /container -->
<?php elseif ( ICL_LANGUAGE_CODE=='ar' ) : ?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center hetmy-title"><span>اعدادات صفحة عن الدكتور محمد </span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills ms-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-section" type="button" role="tab" aria-controls="v-pills-first-section" aria-selected="true">السكشن الاول</button>
				<button class="nav-link" id="v-pills-second-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-section" type="button" role="tab" aria-controls="v-pills-second-section" aria-selected="false">السكشن الثانى</button>
				<button class="nav-link" id="v-pills-third-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third-section" type="button" role="tab" aria-controls="v-pills-third-section" aria-selected="false">السكشن الثالث</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9 col-lg-9" id="v-pills-tabContent">
				<form class="form-horizontal form_back_ar p-5" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-section" role="tabpanel" aria-labelledby="v-pills-first-section-tab">
				        	<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="about_page_hidden" name="about_page_hidden" value="1" <?=get_option('about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="about_page_hidden" class="text-white">إخفاء السكشن </label>
	                        </div>
	                        <div class="form-group">
							  	<label for="about_page_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_img_ar_url hetmy_half" type="text" name="about_page_img_ar" size="60" value="<?=get_option('about_page_img_ar'); ?>">
							    	<a href="#" class="about_page_img_ar_upload btn btn-info">اختر </a>
							    	<img class="about_page_img_ar" src="<?=get_option('about_page_img_ar'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
				        	<div class="form-group">
								<label for="about_page_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="about_page_title_ar" name="about_page_title_ar" value="<?=get_option('about_page_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="about_page_content_ar" class="col-sm-6 control-label text-white">المقال</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('about_page_content_ar'), 'about_page_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_page_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_page_content_ar','class'=>'form-control',) );  ?>
								</div>
							</div>
							<div class="form-group">
								<label for="about_page_second_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="about_page_second_title_ar" name="about_page_second_title_ar" value="<?=get_option('about_page_second_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
							  	<label for="about_page_second_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_second_img_ar_url hetmy_half" type="text" name="about_page_second_img_ar" size="60" value="<?=get_option('about_page_second_img_ar'); ?>">
							    	<a href="#" class="about_page_second_img_ar_upload btn btn-info">اختر </a>
							    	<img class="about_page_second_img_ar" src="<?=get_option('about_page_second_img_ar'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
							  	<label for="about_page_third_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="about_page_third_img_ar_url hetmy_half" type="text" name="about_page_third_img_ar" size="60" value="<?=get_option('about_page_third_img_ar'); ?>">
							    	<a href="#" class="about_page_third_img_ar_upload btn btn-info">اختر </a>
							    	<img class="about_page_third_img_ar" src="<?=get_option('about_page_third_img_ar'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
							
				        </div>

						<div class="tab-pane fade" id="v-pills-second-section" role="tabpanel" aria-labelledby="v-pills-second-section-tab">									
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="second_about_page_hidden" name="second_about_page_hidden" value="1" <?=get_option('second_about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="second_about_page_hidden" class="text-white">إخفاء السكشن </label>
	                        </div>

				        	<div class="form-group">
								<label for="second_about_page_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="second_about_page_title_ar" name="second_about_page_title_ar" value="<?=get_option('second_about_page_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="second_about_page_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعى </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="second_about_page_small_title_ar" name="second_about_page_small_title_ar" value="<?=get_option('second_about_page_small_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="second_about_page_number_ar" class="col-sm-12 text-left  control-label text-white">عدد الاجراءات التى تود اظهارها فى الصفحة </label>
								<div class="col-sm-12 text-left ">
									<input type="number_ar" class="form-control" id="second_about_page_number_ar" name="second_about_page_number_ar" value="<?=get_option('second_about_page_number_ar'); ?>">
								</div>
							</div>

						</div>

						<div class="tab-pane fade" id="v-pills-third-section" role="tabpanel" aria-labelledby="v-pills-third-section-tab">									
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="third_about_page_hidden" name="third_about_page_hidden" value="1" <?=get_option('third_about_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="third_about_page_hidden" class="text-white">إخفاء السكشن </label>
	                        </div>

	                        <div class="form-group">
							  	<label for="third_about_page_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="third_about_page_img_ar_url hetmy_half" type="text" name="third_about_page_img_ar" size="60" value="<?=get_option('third_about_page_img_ar'); ?>">
							    	<a href="#" class="third_about_page_img_ar_upload btn btn-info">اختر</a>
							    	<img class="third_about_page_img_ar" src="<?=get_option('third_about_page_img_ar'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
								<label for="third_about_page_number_ar" class="col-sm-12 text-left  control-label text-white">عدد اراء العملاء التى تود اظهارها فى الصفحة</label>
								<div class="col-sm-12 text-left ">
									<input type="number_ar" class="form-control" id="third_about_page_number_ar" name="third_about_page_number_ar" value="<?=get_option('third_about_page_number_ar'); ?>">
								</div>
							</div>
						</div>
                        <div class="form-group text-left">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 hetmy_save_route" name="hetmy_save" value="حفظ الاعدادات ">
                            </div>
                        </div>
                    </div>
				</form>
		    </div>
	    </div>
    </div>
</div><!-- /container -->	
<?php endif?>
<?php

}