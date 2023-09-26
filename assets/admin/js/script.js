jQuery(document).ready(function($) {

    $('.header_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.header_img').attr('src', attachment.url);
                $('.header_img_url').val(attachment.url);
            })
        .open();
    });  

    $('.header_sticky_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.header_sticky_img').attr('src', attachment.url);
                $('.header_sticky_img_url').val(attachment.url);
            })
        .open();
    });

    $('.footer_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.footer_img').attr('src', attachment.url);
                $('.footer_img_url').val(attachment.url);
            })
        .open();
    });

    $('.favicon_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.favicon_img').attr('src', attachment.url);
                $('.favicon_img_url').val(attachment.url);
            })
    .open();
    });

    $('.about_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_img').attr('src', attachment.url);
                $('.about_img_url').val(attachment.url);
            })
    .open();
    });

    $('.info_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.info_img').attr('src', attachment.url);
                $('.info_img_url').val(attachment.url);
            })
    .open();
    });

    $('.parallax_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.parallax_img').attr('src', attachment.url);
                $('.parallax_img_url').val(attachment.url);
            })
    .open();
    });
    /*--------------------------------------Arabic Version-----------------------------------*/
    $('.about_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_img_ar').attr('src', attachment.url);
                $('.about_img_ar_url').val(attachment.url);
            })
    .open();
    });

    $('.info_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.info_img_ar').attr('src', attachment.url);
                $('.info_img_ar_url').val(attachment.url);
            })
    .open();
    });

    $('.parallax_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.parallax_img_ar').attr('src', attachment.url);
                $('.parallax_img_ar_url').val(attachment.url);
            })
    .open();
    });
    /*-------------------------About Page----------------------------------------------------*/
    $('.about_page_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_img').attr('src', attachment.url);
                $('.about_page_img_url').val(attachment.url);
            })
    .open();
    });

    $('.about_page_second_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_second_img').attr('src', attachment.url);
                $('.about_page_second_img_url').val(attachment.url);
            })
    .open();
    });

    $('.about_page_third_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_third_img').attr('src', attachment.url);
                $('.about_page_third_img_url').val(attachment.url);
            })
    .open();
    });

    $('.third_about_page_img_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.third_about_page_img').attr('src', attachment.url);
                $('.third_about_page_img_url').val(attachment.url);
            })
    .open();
    });

        /*-------------------------About Page Arabic----------------------------------------------------*/
    $('.about_page_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_img_ar').attr('src', attachment.url);
                $('.about_page_img_ar_url').val(attachment.url);
            })
    .open();
    });

    $('.about_page_second_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_second_img_ar').attr('src', attachment.url);
                $('.about_page_second_img_ar_url').val(attachment.url);
            })
    .open();
    });

    $('.about_page_third_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.about_page_third_img_ar').attr('src', attachment.url);
                $('.about_page_third_img_ar_url').val(attachment.url);
            })
    .open();
    });

    $('.third_about_page_img_ar_upload').click(function(e) {
        e.preventDefault();
            var custom_uploader = wp.media({
                title: 'Image Choose',
                button: {
                text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be  selected
            })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('.third_about_page_img_ar').attr('src', attachment.url);
                $('.third_about_page_img_ar_url').val(attachment.url);
            })
    .open();
    });
});


   