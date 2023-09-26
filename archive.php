<?php
/**
** Template Name: News Archive Template
**/
get_header();
get_template_part('page_title');
?>
<?php
    $posts_per_page = get_option('posts_per_page');

    $news = hetmy_get_news($posts_per_page);
    if($news->have_posts()) :
?>
<section class="blog-eight">
    <div class="auto-container">
        <div class="row justify-content-center">
            <?php
                while($news->have_posts()) : $news->the_post();$news_id = get_the_ID();
            ?>
            <div class="col-md-12 col-lg-4">
                <div class="blog-eight__card">
                    <div class="blog-eight__image">
                        <img src="<?php the_post_thumbnail_url($news_id, 'post-size')?>" alt="<?php the_title()?>">
                    </div><!-- /.blog-eight__image -->
                    <div class="blog-eight__content">
                        <div class="blog-eight__date"><?= get_the_date('d M')?></div><!-- /.blog-eight__date -->
                        <h3 class="blog-eight__title">
                            <a href="<?php the_permalink()?>">
                                <?=wp_trim_words( get_the_title() ,5, ' ...' )?>
                            </a>
                        </h3><!-- /.blog-eight__title -->
                        <p class="blog-eight__text">
                            <?=wp_trim_words( get_the_content() ,20, ' ...' )?>
                        </p><!-- /.blog-eight__text -->
                        <div class="blog-eight__meta">
                            <span><i class="far fa-user-circle"></i>by <?php the_author();?></span>
                            <span><i class="far fa-clock"></i> <?= get_the_date('d M, Y')?></span>
                        </div><!-- /.blog-eight__meta -->
                    </div><!-- /.blog-eight__content -->
                </div><!-- /.blog-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <?php endwhile;?>
        </div><!-- /.row -->
        <div class="text-center load-more-products mt-4">
            <nav class="page-pagination">
                <?php
                    $args = array(
                       'format'             => '?paged=%#%',
                       'current'            => max( 1, get_query_var('paged') ),
                       'total'              => $news->max_num_pages,
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
</section><!-- /.blog-eight -->
<?php wp_reset_query(); endif?>
<?php get_footer()?>
