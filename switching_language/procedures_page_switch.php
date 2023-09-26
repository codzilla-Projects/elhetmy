<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $second_about_page_title            = get_option('second_about_page_title');
        $second_about_page_small_title      = get_option('second_about_page_small_title');
        $contact_title                      = get_option('contact_title');
        $contact_link_url                   = get_option('contact_link_url');
        $contact_link_text                  = get_option('contact_link_text');
        break;
    case 'ar':
        $second_about_page_title            = get_option('second_about_page_title_ar');
        $second_about_page_small_title      = get_option('second_about_page_small_title_ar');
        $contact_title                      = get_option('contact_title_ar');
        $contact_link_url                   = get_option('contact_link_url_ar');
        $contact_link_text                  = get_option('contact_link_text_ar');
        break;
    default:
        $second_about_page_title            = '';
        $second_about_page_small_title      = '';
        $contact_title                      = '';
        $contact_link_url                   = '';
        $contact_link_text                  = '';
}