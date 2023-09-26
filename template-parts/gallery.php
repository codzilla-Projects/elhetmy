<?php
    $type_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    $main_type_id = $type_term->term_id;
?>
<?php
    $posts_per_page = get_option('posts_per_page');

    $gallery = hetmy_get_gallery_with_tax($posts_per_page, $main_type_id);
    if($gallery->have_posts()) :
?>
<section class="shop-page">
    <div class="auto-container">
        <div class="row">
             <?php while($gallery->have_posts()) : $gallery->the_post();?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-card__image">
                        <a href="<?php the_post_thumbnail_url()?>" data-fancybox="group">
                            <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title() ?>">
                        </a>
                    </div><!-- /.product-card__image -->
                </div><!-- /.product-card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <?php endwhile; wp_reset_query()?>
        </div><!-- /.row -->
        <div class="text-center load-more-products mt-4">
            <nav class="page-pagination">
                <?php
                    $args = array(
                       'format'             => '?paged=%#%',
                       'current'            => max( 1, get_query_var('paged') ),
                       'total'              => $gallery->max_num_pages,
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
    </div><!-- /.container -->
</section><!-- /.shop-page -->
<?php endif?>
