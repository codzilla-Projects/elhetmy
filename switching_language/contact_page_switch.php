<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $contact_page_title                  = get_option('contact_page_title');
        $contact_page_content                = get_option('contact_page_content');
        $contact_page_shortcode              = get_option('contact_form_shortcode');
        break;
    case 'ar':
        $contact_page_title                  = get_option('contact_page_title_ar');
        $contact_page_content                = get_option('contact_page_content_ar');
        $contact_page_shortcode              = get_option('contact_form_shortcode_ar');
        break;
    default:
        $contact_page_title                  = '';
        $contact_page_content                = '';
        $contact_page_shortcode              = '';
}