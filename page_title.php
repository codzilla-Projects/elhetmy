<!-- Banner Section -->

<?php 

    $page_image  = get_the_post_thumbnail_url();

    $page_image_title  = hetmy_URL.'assets/img/page-title/01.jpg'; 

?>

<section class="page-banner">

    <div class="image-layer" style="background-image:url('<?php  if(empty($page_image)){ echo $page_image_title;}elseif (is_tax()){echo $page_image_title;} else{ echo $page_image;}?>');"></div>

    <div class="shape-1"></div>

    <div class="shape-2"></div>

    <div class="banner-inner">

        <div class="auto-container">

            <div class="inner-container clearfix">

                <h1>

                    <?php

                        global $page, $paged, $post;

                        if (is_tax()) {

                            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                            $term_title = $term->name;

                            echo "$term_title ";

                        } 

                        elseif ( is_404() ) 

                        { 

                          echo __('Page Not Found','hetmy');

                        }

                        else 

                        {

                            wp_title( '', true, 'right' );

                        }

                    ?>

                </h1>

                <div class="page-nav">

                    <ul class="bread-crumb clearfix">

                        <li><a href="<?php bloginfo('url')?>"><?php _e('Home','hetmy'); ?></a></li>

                        <li class="active">

                            <?php

                                global $page, $paged, $post;

                                if (is_tax()) {

                                    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                                    $term_title = $term->name;

                                    echo "$term_title ";

                                } 

                                elseif ( is_404() ) 

                                { 

                                  echo __('Page Not Found','hetmy');

                                }

                                else 

                                {

                                    wp_title( '', true, 'right' );

                                }

                            ?>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!--End Banner Section -->

