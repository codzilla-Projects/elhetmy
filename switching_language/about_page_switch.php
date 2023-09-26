<?php
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $about_page_img                      = get_option('about_page_img');
        $about_page_title                    = get_option('about_page_title');
        $about_page_content                  = get_option('about_page_content');
        $about_page_second_title             = get_option('about_page_second_title');
        $about_page_second_img               = get_option('about_page_second_img');
        $about_page_third_img                = get_option('about_page_third_img');
        $second_about_page_title             = get_option('second_about_page_title');
        $second_about_page_small_title       = get_option('second_about_page_small_title');
        $second_about_page_number             = get_option('second_about_page_number');
        $third_about_page_number             = get_option('third_about_page_number');
        $third_about_page_img                = get_option('third_about_page_img');
        break;
    case 'ar':
        $about_page_img                      = get_option('about_page_img_ar');
        $about_page_title                    = get_option('about_page_title_ar');
        $about_page_content                  = get_option('about_page_content_ar');
        $about_page_second_title             = get_option('about_page_second_title_ar');
        $about_page_second_img               = get_option('about_page_second_img_ar');
        $about_page_third_img                = get_option('about_page_third_img_ar');
        $second_about_page_title             = get_option('second_about_page_title_ar');
        $second_about_page_small_title       = get_option('second_about_page_small_title_ar');
        $second_about_page_number            = get_option('second_about_page_number_ar');
        $third_about_page_number             = get_option('third_about_page_number_ar');
        $third_about_page_img                = get_option('third_about_page_img_ar');
        break;
    default:
        $about_page_img                      = '';
        $about_page_title                    = '';
        $about_page_content                  = '';
        $about_page_second_title             = '';
        $about_page_second_img               = '';
        $about_page_third_img                = '';
        $second_about_page_title             = '';
        $second_about_page_small_title       = '';
        $third_about_page_number             = '';
        $third_about_page_img                = '';
}
