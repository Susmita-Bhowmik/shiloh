<?php 



/** Template Name: About */



get_header();?>



<!-- About-banner -->

<section class="about-page-banner only_about" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

               

            </div>

        </div>

    </section>

    <!-- About-banner -->

    

    <!-- About-text -->

    <section class="welcome-about">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="wapper">

                        <h2><?php the_field('about_text_title'); ?></h2>

                        <?php the_field('about_content'); ?>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="wapper">

                        <div class="fig-holder">

                            <figure style="background-image: url(<?php the_field('about_image');  ?>);"></figure>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- About-text -->

    <section class="out-experts">

        <div class="container text-center">

            <h2><?php the_field('our_expert_area_title'); ?></h2>

            <p><?php the_field('our_expert_content'); ?></p>

            

        </div>

     

    </section>

    <!-- Why Choose us -->

    <section class="why-chose-about">

        <div class="container">

            <div class="row">

                <!--<div class="col-lg-6 col-md-12">-->

                <!--    <div class="wapper">-->

                <!--        <div class="fig-holder">-->

                <!--            <figure style="background-image: url(<?php the_field('why_choose_us_image'); ?>);"></figure>-->

                <!--        </div>-->

                <!--    </div>-->

                <!--</div>-->

                <div class="col-lg-12 col-md-12">

                    <div class="wapper">

                        <h2><?php the_field('why_choose_us_area_title'); ?></h2>

                        <p><?php the_field('why_choose_us_content'); ?></p>

                   <?php     if( have_rows('why_choose_us_box') ): ?>

                        <ul>

                        <?php

                            if( have_rows('why_choose_us_box') ):

                            while( have_rows('why_choose_us_box') ) : the_row(); ?>

                             <li>

                                <span><img src="<?php the_sub_field('icon'); ?>" alt=""></span>

                                <h3><?php the_sub_field('title'); ?></h3>

                                <p><?php the_sub_field('content'); ?></p>

                            </li>

                            <?php

                                endwhile;

                                endif;

                            ?>



                            

                        </ul>

                        <?php  endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Why Choose us -->

    <!--<section class="out-experts script-content">-->

    <!--   <div class="container ">-->

    <!--        <h3>SCRIPTURE REFERENCES</h3>-->

    <!--    <p><?php the_field('scripture_content'); ?></p>-->

    <!--     </div>-->

    <!--</section>-->

    <!-- About Expart -->

   



    <!-- About Expart -->



    <!-- main-about -->











































<?php get_footer(); ?>