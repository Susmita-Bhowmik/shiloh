
<?php 

/** Template Name: Reads Category */



get_header();

?>
<?php $cat_slug = $_GET['category']; ?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

            <h2 style="text-transform: capitalize;">Category : <?php echo $cat_slug  ; ?></h2>

            </div>

        </div>

    </section>

    <!-- About-banner -->

    <section class="search_page_main">
        <div class="container">
            
            <div class="search_list_item">
                <div class="row">
                    
                       <?php

                            $args = array( 'post_type' => 'reads','reads-category'=> $cat_slug, 'posts_per_page' => -1,'order' => 'DESC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $id  = get_the_ID();
                             $date = get_the_date();
                            ?>
                            <div class="col-md-4">

                                 <ul>
                                            

                                           <li>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <span><?php echo $date; ?></span>
                                                <a href="<?php 
                            $uploaded_pdf_link = get_field('uploaded_pdf_link');
                            
                            if($uploaded_pdf_link){
                            
                            the_field('uploaded_pdf_link');}else { the_field('upload_pdf');} ?>" class="download_btn" target="_blank" ></a>
                                            </li>
                                                           
                                    </ul>
                                        </div>

                                        

                                   
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                       
                   
                </div>
            </div>
        </div>
    </section>




<?php
get_footer(); ?>
