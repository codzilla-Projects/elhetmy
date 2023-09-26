<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $footer_content                 = get_option('footer_content');
        break;
    case 'ar':
        $footer_content                 = get_option('footer_content_ar');
        break;
    default:
        $footer_content                 = '';
}