<?php

/**

** Template Name: Gallery page Template

**/

get_header();

get_template_part('page_title');

$terms = get_terms(
array(
  'taxonomy'      => 'procedures-gallery',
  'hide_empty'    => false,
  'orderby'       => 'name',
  'order'         => 'ASC'
  )
);

?>

<section class="team-three team-three__about-two gallery-page">

    <div class="auto-container">

        <div class="sec-title centered">

            <h2><?php _e('Picture Gallery','hetmy'); ?></h2>

        </div>

        <div class="row">

            <?php
                foreach ($terms as $term) {
                $term_link = get_term_link( $term );
                if ($term->count != 0) :
            ?>
            <div class="col-md-6 col-lg-3">

                <div class="team-card-three">

                    <div class="team-card-three__inner">

                        <div class="team-card-three__image">

                            <img src="<?=z_taxonomy_image_url($term->term_id)?>" alt="">

                        </div><!-- /.team-card-three__image -->

                        <div class="team-card-three__hover">

                            <h5 class="team-card-three__name">

                                <a href="<?=$term_link?>">

                                    <?=$term->name?>

                                </a>

                            </h5>
                            <?php
                                $gallery = hetmy_get_gallery_with_tax(8, $term->term_id);
                                if($gallery->have_posts()) :
                            ?>
                            <ul class="procedure_list_items clearfix m-0 list-unstyled">
                                <?php while($gallery->have_posts()) : $gallery->the_post();?>
                                <li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
                                <?php endwhile; wp_reset_query()?>
                            </ul>
                            <?php endif?>
                        </div><!-- /.team-card-three__content -->

                    </div><!-- /.team-card-three__inner -->

                </div><!-- /.team-card-three -->

            </div>

            <?php endif?>
            <?php }?>

        </div><!-- /.row -->

    </div><!-- /.auto-container -->

</section>
<?php get_footer()?>
