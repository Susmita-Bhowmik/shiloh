<?php 



/** Template Name: Listen */







get_header();



?>


<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

    <div class="banner-text">

        <div class="container">

            <h2><?php the_title(); ?></h2>

        </div>

    </div>

</section>






<section class="audio_main_section">
    <div class="container">
        <div class="row">
              <?php  if( have_rows('audio_box') ):
                 while( have_rows('audio_box') ) : the_row(); ?>
                 
                <div class="col-md-4">
                    <div class="audio_palyer_main_output">
                        <h3><?php the_sub_field('audio_title'); ?></h3>
                        <audio controls>
                            <source src="
                            <?php 
                            $audio_link = get_sub_field('audio_link');
                            
                            if($audio_link){
                            
                            the_sub_field('audio_link');}else
                            {the_sub_field('audio_file_upload');}; ?>" type="audio/ogg">
                            <source src="<?php 
                            $audio_link = get_sub_field('audio_link');
                            
                            if($audio_link){
                            
                            the_sub_field('audio_link');}else
                            {the_sub_field('audio_file_upload');}; ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
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