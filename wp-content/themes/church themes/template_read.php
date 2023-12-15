<?php 
error_reporting(0);


/** Template Name: Read */
get_header();


if(isset($_GET['title'])){
$read_name = $_GET['title'];
}



global $wpdb;

global $table_prefix;

$table = $table_prefix.'posts';


?>



<!-- About-banner -->

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>

    <!-- About-banner -->

<section class="search_page_main">
        <div class="container">
            <div class="search_input_holder">
                <form action="" id="search_form" method="post">
                    <div class="form_group">
                        <input type="text" id="upper-search" value="" name="read_name" placeholder="Search ..." required>
                        <button class="search-button" type="submit" name="submit" id="read_submit"></button>
                    </div>
                </form>
            </div>
            <div class="search_list_item">
                <div class="row">
                    <?php if($read_name){ ?>
                     <?php

                           $result = $wpdb->get_results("SELECT * FROM $table WHERE `post_type`= 'reads' AND  `post_title` LIKE '%$read_name%' ");
                        
                           
                        
                           ?>
                        
                           <?php 
                        
                            if($result){
                        
                           
                        
                            foreach($result as $row) {
                            $date = get_the_date('F j, Y', $row->ID);
                            
                            
                        
                            ?>
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                    <a href="<?php $url = get_permalink($row->ID);echo $url; ?>"> <?php echo $row->post_title; ?> </a>
                                     <span><?php echo $date; ?></span>
                                      <a href="<?php $pdf_link = get_post_meta($row->ID, 'upload_pdf', true) ; 
                                      if($pdf_link){
                                      $url_pdf = wp_get_attachment_url($pdf_link);

                                      echo $url_pdf; }else{echo get_post_meta($row->ID, 'uploaded_pdf_link', true) ; }?>" class="download_btn" target="_blank" ></a>
                                  </li>
                                </ul>
                            </div>
                            
                            <?php } } else{  echo '<h3 class="text-center m-auto">No Record found. Please Try with another keyword..</h3>';}
                            
                            
                            
                            
                            
                            } else{ ?>
                            
                        <?php
                                $args = array(
                                            'taxonomy' => 'reads-category',
                                            'orderby' => 'name',
                                            'order'   => 'ASC'
                                        );

                                $cats = get_categories($args);

                                foreach($cats as $cat) {
                                ?>
                      
                    <div class="col-md-4">
                        <h3><?php echo '<br /><a href="'. site_url('/reads-category') .'?category='.$cat->slug.'">'.$cat->name.'</a>'; ?></h3>
                        <ul>
                        <?php
                        $args = array( 'post_type' => 'reads', 'posts_per_page' => -1, 'reads-category'=>$cat->name, 'order' => 'DESC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                         $date = get_the_date();
                        
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <span><?php echo $date; ?></span>
                                <a href="<?php 
                            $uploaded_pdf_link = get_field('uploaded_pdf_link');
                            
                            if($uploaded_pdf_link){
                            
                            the_field('uploaded_pdf_link');}else { the_field('upload_pdf');} ?>" class="download_btn" target="_blank" ></a>
                            </li>
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                            
                        </ul>
                    </div>
            
                        <?php
                                } }
                                ?>
                                
                                
                              
                   
                </div>
            </div>
        </div>
    </section>


    

    
<?php get_footer(); ?>