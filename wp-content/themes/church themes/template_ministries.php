<?php 

/** Template Name: Ministries */

get_header();?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>
     <section class="stay-connected-main sunday-service">
        <div class="container text-center">
            

            <div class="row">
                <?php



                $args = array( 'post_type' => 'services', 'posts_per_page' => -1,'services-category'=>'show-ministry' ,'order' => 'ASC','orderby' => 'menu_order'  );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post(); 

                

                ?>

                <div class="col-md-4">
                    <div class="element">
                        <div class="fig-holder">
                            <figure style="background-image: url();"></figure>
                        </div>
                        <div class="text">
                            <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>
                            <span class="time">
                                <p><?php the_content(); ?></p>
                            </span>
                           
                        </div>
                    </div>
                </div>
                 <?php endwhile; ?>

                <?php wp_reset_query(); ?>
                
               

                
            </div>

        </div>
    </section>



<?php get_footer(); ?>