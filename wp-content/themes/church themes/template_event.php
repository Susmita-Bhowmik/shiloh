<?php 

/** Template Name: Event */

get_header(); ?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>

    <section class="event-section-main">
        <div class="container">
                <?php

                $args = array( 'post_type' => 'events', 'posts_per_page' => -1,'order' => 'ASC','orderby' => 'menu_order'  );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $events_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                ?>
            <div class="event-wapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fig-holder">
                            <figure style="background-image: url(<?php echo $events_image[0]; ?>);"></figure>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="wapper">
                            <h2><?php the_title(); ?></h2>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet culpa hic quis corrupti dolor earum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet culpa hic quis corrupti dolor earum </p> -->
                            <div class="location-wapper">
                                <span class="span-wapper">Location</span>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="date-wapper">
                                <span class="span-wapper">Time</span>
                                <p><?php the_field('time'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
           <?php wp_reset_query(); ?>
            
        </div>
    </section>
 
   
<?php get_footer(); ?>