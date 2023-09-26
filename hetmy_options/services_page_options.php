<?php 
function services_page_area_callback(){
	$wp_editor_settings = array( 		
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2	);    	
	if( isset( $_POST['hetmy_save'] ) && !empty( $_POST['hetmy_save']) ){		
		foreach ($_POST as $key => $value) {			
			if(in_array($key,[])){
				$value = stripcslashes($value);			
			}							
			update_option( $key, $value);}
			}
		?>

		<div class="container-fluid text-left padding-right-4">

			<div class="row">				
				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">

					<!-- Top Navigation -->

					<header class="codrops-header">

						<h1 class="text-center hetmy-title"><span>Services Page Settings</span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Services</button>

						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Appoinment</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
						<form class="form-horizontal form_back p-5" method="post" action="#">				<div class="tab-content" id="v-pills-tabContent">						        
								<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">  	
									<div class="form-group text-left">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="services_page_hidden" name="services_page_hidden" value="1" <?=get_option('services_page_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="services_page_hidden" class="text-white">Hidden Section</label>
			                        </div>			                        
									<div class="form-group">
										<label for="services_page_small_title" class="col-sm-12 text-left  control-label text-white">Small Tilte</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_small_title" name="services_page_small_title" value="<?=get_option('services_page_small_title'); ?>">
										</div>
									</div>

						        	<div class="form-group">
										<label for="services_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_title" name="services_page_title" value="<?=get_option('services_page_title'); ?>">
										</div>
									</div>
								</div>

								<div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">									
									<div class="form-group text-left">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="second_services_hidden" name="second_services_hidden" value="1" <?=get_option('second_services_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="second_services_hidden" class="text-white">Hidden Section</label>
			                        </div>

						        	<div class="form-group">
										<label for="second_services_title" class="col-sm-12 text-left  control-label text-white">Title</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="second_services_title" name="second_services_title" value="<?=get_option('second_services_title'); ?>">
										</div>
									</div>


									<div class="form-group">
										<label for="second_services_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="second_services_link_text" name="second_services_link_text" value="<?=get_option('second_services_link_text'); ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="second_services_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="second_services_link_url" name="second_services_link_url" value="<?=get_option('second_services_link_url'); ?>">
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
<?php

}