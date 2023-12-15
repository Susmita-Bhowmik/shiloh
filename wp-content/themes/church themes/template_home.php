<?php 



/** Template Name: Home */







get_header(); ?>



 <section class="banner-main">

        <div class="banner-slick-slider">

        <?php

            if( have_rows('banner_slider') ):

            while( have_rows('banner_slider') ) : the_row(); ?>

            <div class="element">

                <div class="fig-holder">

                    <figure style="background-image: url(<?php the_sub_field('banner_bg'); ?>);"></figure>

                </div>

                <div class="banner-text">

                    <h1><?php the_sub_field('banner_title'); ?></h1>

                    <h3><?php the_sub_field('banner_subtitle'); ?></h3>

                    <p><?php the_sub_field('banner_content'); ?></p>

                    <a href="<?php the_sub_field('banner_link'); ?>" class="a_btn"><span>WATCH RECENT SERMON</span></a>

                </div>

            </div>



            <?php

                endwhile;

                endif;

            ?>

               

            

        </div>

    </section>

    <!-- banner -->

 <section class="out-experts">

        <div class="container text-center">

            <h2><?php the_field('about_title'); ?></h2>

            <!--<p><?php the_field('our_expert_content',9); ?></p>-->

            <div class="row">

            <?php

            if( have_rows('our_expert_box',9) ):

            while( have_rows('our_expert_box',9) ) : the_row(); ?>



                <div class="col-lg-3">

                    <div class="wapper">

                        <div class="fig-holder">

                            <figure style="background-image: url(<?php the_sub_field('expert_image',9); ?>);"></figure>

                        </div>

                        <div class="expart-name">

                            <div class="wapper">

                                <h3><?php the_sub_field('expert_title',9); ?></h3>

                            </div>

                        </div>

                    </div>

                </div>



                <?php

                    endwhile;

                    endif;

                ?>

            

                

                

                

            </div>

        </div>

     

    </section>

    <!-- about - us -->

    <!--<section class="about-main">-->

    <!--    <div class="container">-->

    <!--        <div class="row">-->

    <!--            <div class="col-md-12">-->

    <!--                <div class="wapper-text">-->

    <!--                    <h2><?php the_field('about_title'); ?></h2>-->

    <!--                    <?php the_field('about_content'); ?>-->

    <!--                    <a href="<?php the_field('learn_more_btn'); ?>" class="a_btn"><span>Learn More</span></a>-->

    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->

    <!--            <div class="col-md-3">-->

    <!--                <div class="box_wapper">-->

    <!--                    <div class="fig-holder">-->

    <!--                        <figure style="background-image: url(<?php the_field('about_image'); ?>);"></figure>-->

    <!--                    </div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--            <div class="col-md-3">-->

    <!--                <div class="box_wapper">-->

    <!--                    <div class="fig-holder">-->

    <!--                        <figure style="background-image: url(<?php the_field('about_image'); ?>);"></figure>-->

    <!--                    </div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--            <div class="col-md-3">-->

    <!--                <div class="box_wapper">-->

    <!--                    <div class="fig-holder">-->

    <!--                        <figure style="background-image: url(<?php the_field('about_image'); ?>);"></figure>-->

    <!--                    </div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--            <div class="col-md-3">-->

    <!--                <div class="box_wapper">-->

    <!--                    <div class="fig-holder">-->

    <!--                        <figure style="background-image: url(<?php the_field('about_image'); ?>);"></figure>-->

    <!--                    </div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->

    <!--</section>-->

    <!-- about - us -->

    

    <!-- Stay-Connected -->

    <section class="stay-connected-main ">

        <div class="container text-center">

            <h2><?php the_field('stay_connected_area_title'); ?></h2>

            <p><?php the_field('stay_connected_area_subtitle'); ?></p>

            <div class="services-slick-slider">

            <?php



                $args = array( 'post_type' => 'services', 'posts_per_page' => -1,'services-category'=>'show-home' ,'order' => 'ASC' );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post(); 

                $service_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

                ?>



                <div class="element">

                    <div class="wapper">
                        

                            <div class="text">

                            <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3></a>

                            <span class="time"><?php the_content(); ?></span>

                           

                        </div>
                    </div>

                </div>



                <?php endwhile; ?>

                <?php wp_reset_query(); ?>



            </div>

            <!--<a href="<?php echo site_url('/ministries'); ?>" class="a_btn"><span>VIEW ALL MINISTRIES</span></a>-->

        </div>

    </section>

    <!-- Stay-Connected -->

    

     



    <?php get_footer(); ?>