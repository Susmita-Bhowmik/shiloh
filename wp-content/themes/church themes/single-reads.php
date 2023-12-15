<?php get_header();   ?>

 <!-- About-banner -->
 <section class="contact-page-banner">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <!-- About-banner -->




    <!-- blog-details -->

    <section class="blog-details-main">

        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12" id="printableContent">

                    <div class="wapper">
                        <span class="print-icon" id="printButton"></span>

                        <!--<div class="blog-fig-holder">-->

                        <!--    <figure  style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></figure>-->

                        <!--</div>-->

                        <div class="text">

                           <?php the_content(); ?>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="wapper">

                        

                        <div class="sub-wapper">

                            <h3>Our Reads</h3>

                            <ul>

                            <?php

                              

                                $args = array( 'post_type' => 'reads', 'posts_per_page' => -6, 'post__not_in' => array( $post->ID ), 'order' => 'DESC' );

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