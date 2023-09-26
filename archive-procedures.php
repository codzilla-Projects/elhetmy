<?php
/**
** Template Name: Procedures Template
**/
get_header();
get_template_part('page_title');
?>
    <?php
        $number = 0;
        $posts_per_page = get_option('posts_per_page');

        $procedures = hetmy_get_procedures(-1);
        if($procedures->have_posts()) :
    ?>
    <section class="service-eight">
        <div class="auto-container">
            <div class="sec-title-eight text-center">
                <p class="sec-title-eight__text"><?=$second_about_page_title?></p><!-- /.sec-title-eight__text -->
                <h2 class="sec-title-eight__title"><?=$second_about_page_small_title?></h2><!-- /.sec-title-eight__title -->
            </div><!-- /.sec-title-eight -->
            <div class="row">
                <?php
                    while($procedures->have_posts()) : $procedures->the_post();
                ?>
                <div class="col-md-12 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="<?=$number?>ms">
                    <div class="service-eight__card">
                        <div class="service-eight__card__inner">
                            <h3 class="service-eight__title">
                                <a href="<?php the_permalink()?>"><?php the_title()?></a>
                            </h3><!-- /.service-eight__title -->
                        </div><!-- /.service-eight__card__inner -->
                    </div><!-- /.service-eight__card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <?php $number = $number + 300; endwhile; wp_reset_query();?>
            </div><!-- /.row -->
            <div class="text-center load-more-products mt-4">
            <nav class="page-pagination">
                <?php
                    $args = array(
                       'format'             => '?paged=%#%',
                       'current'            => max( 1, get_query_var('paged') ),
                       'total'              => $procedures->max_num_pages,
                       'show_all'           => false,
                       'end_size'           => 1,
                       'mid_size'           => 2,
                       'prev_next'          => true,
                       'next_text'          => '<i class="fa fa-angle-right"></i>',
                       'prev_text'          => '<i class="fa fa-angle-left"></i>',
                       'type'               => 'list',
                      );
                ?>
                <?php echo paginate_links($args); ?>
            </nav>
        </div>
        </div><!-- /.auto-container -->
    </section><!-- /.service-eight -->
    <?php endif?>
    <section class="subscribe-two">
        <div class="subscribe-two__shape"></div><!-- /.subscribe-two__shape -->
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h3 class="subscribe-two__title">
                       <?=$contact_title?>
                    </h3><!-- /.subscribe-two__title -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6 text-lg-end d-flex justify-content-end align-items-center">
                    <div class="link-box">

                        <a class="theme-btn btn-style-two" href="<?=$contact_link_url?>">

                            <i class="btn-curve"></i>

                            <span class="btn-title"><?=$contact_link_text?></span>

                        </a>

                    </div>
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.auto-container -->
    </section>
<?php get_footer()?>
