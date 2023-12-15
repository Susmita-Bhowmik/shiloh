<?php get_header();   ?>

<!-- Blog-main -->

    <section class="blog-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-01.jpg);">

        <div class="banner-text">

            <h2><?php the_title(); ?> </h2>

        </div>

    </section>

    <!-- Blog-main -->





    <!-- blog-details -->

    <section class="blog-details-main">

        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!--<div class="wapper">-->

                    <!--    <div class="blog-fig-holder">-->

                    <!--        <figure style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></figure>-->

                    <!--    </div>-->

                        <div class="text">

                           <?php the_content(); ?>

                        </div>

                    </div>

                

                <div class="col-lg-3">

                    <div class="wapper">

                        

                        <div class="sub-wapper">

                            <h3>OUR MINISTRIES</h3>

                            <ul>

                            <?php

                              

                                $args = array( 'post_type' => 'services', 'posts_per_page' => 5, 'post__not_in' => array( $post->ID ), 'order' => 'DESC' );

                                $loop = new WP_Query( $args );

                                while ( $loop->have_posts() ) : $loop->the_post(); 

                              

                                ?>

                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                               

                                <?php endwhile; ?>

                                <?php wp_reset_query(); ?>

                                

                               

                            </ul>

                        </div>

                       

                        

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- blog-details -->





<?php get_footer(); ?>