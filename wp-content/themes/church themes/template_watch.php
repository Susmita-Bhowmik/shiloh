<?php 

/** Template Name: Watch */



get_header();

?>
<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>

    <!-- About-banner -->
<section class="video-section-main">
        <div class="container">
            <div class="row">
                <p><?php the_content(); ?></p>
                <?php
                    if( have_rows('video_box') ):
                     while( have_rows('video_box') ) : the_row(); ?>
                        <div class="col-md-6">
                        <div class="wapper">
                            
                                <div class="fig-holder">
                            <?php 
                            $video_link = get_sub_field('video_link');
                            
                            if($video_link){
                            
                            the_sub_field('video_link');}else
                            { ?>
                            <video style="width:100%" controls>
                              <source src="<?php the_sub_field('upload_video'); ?>" type="video/mp4">
                              
                            Your browser does not support the video tag.
                            </video>
                                                        
                            <?php } ?>
                                </div>
                                
                                <div class="video-name">
                                    <h4><?php the_sub_field('video_title'); ?></h4>
                                   
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





<?php get_footer(); ?>