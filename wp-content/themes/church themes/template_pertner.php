<?php 

/** Template Name: Partner */

 get_header(); ?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>
    <section class="welcome-about">

<div class="container">

<div class="row">
    

<div class="col-md-12"><h3>e-transfer at : <strong><a href="mailto: <?php the_field('e_transfer');  ?> " ><?php the_field('e_transfer');  ?> </a></strong></h3></div>

</div>

</div>

</section>

















<?php get_footer(); ?>