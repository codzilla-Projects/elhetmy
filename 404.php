<?php get_header(); 
get_template_part('page_title'); 
?>
<!--Error Section-->
<section class="error-section">
    <div class="auto-container">
        <div class="content">
            <div class="big-text">
                <img src="<?=hetmy_URL?>assets/img/icons/404-image.webp" id="error-404" class="img-fluid" alt="">
            </div>
            <h2><?php _e('Sorry We Can\'t Find That Page!','hetmy')?></h2>
            <div class="text"><?php _e('The page you are looking for was moved, removed, renamed or never existed.','hetmy')?></div>
            <div class="link-box">
                <a class="theme-btn btn-style-one" href="<?php bloginfo('url')?>">
                    <i class="btn-curve"></i>
                    <span class="btn-title"><?php _e('Back to Home','hetmy')?></span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>