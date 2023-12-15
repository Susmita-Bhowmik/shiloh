<?php 
error_reporting(0);

/** Template Name: Testimonies */

get_header();

if(isset($_GET['search'])){
$search = $_GET['search'];

}



global $wpdb;

global $table_prefix;

$table = $table_prefix.'posts';
?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <div class="banner-text">

            <div class="container">

                <h2><?php the_title(); ?></h2>

            </div>

        </div>

    </section>


<section class="testi-index">
   
        <div class="container text-center">
             <div class="search_input_holder">
                <form action="" id="search_testimoni" method="post">
                    <div class="form_group">
                        <input type="text" id="testimoni-search" value="" name="testimoni_name" placeholder="Search ..." required>
                        <button class="search-button" type="submit" name="testimoni_submit" id="testimoni_submit"></button>
                    </div>
                </form>
            </div>
            <div class="testi-index-slick-slider">
                <?php if($search){ 
                     $regex = "/[a-zA-Z]/";

                       if (preg_match($regex, $search)) {
                           $result = $wpdb->get_results("SELECT * FROM $table WHERE `post_type`= 'testimoni' AND `post_status`= 'publish'  AND `post_title`   LIKE '%$search%'  ");
                        
                        }else{
                             $result = $wpdb->get_results("SELECT * FROM $table WHERE `post_type`= 'testimoni' AND `post_status`= 'publish' AND `post_date`   LIKE '%$search%'  ");
                        }
                        
                           ?>
                        
                           <?php 
                        
                            if($result){
                        
                           
                        
                            foreach($result as $row) {
                            $date = get_the_date('F j, Y', $row->ID);
                            $client_location = get_post_meta($row->ID, 'client_location', true) ;
                            $heading = get_post_meta($row->ID, 'testimony_heading', true) ;
                            $testi_image = wp_get_attachment_image_src($row->ID, 'full');
                            
                            
                            ?>
                            <div class="element">
                                <div class="wapper">
                                    <span class="profile-holder">
                                        <?php if(!$testi_image){ ?>
                                        <img src="<?php bloginfo("template_url"); ?>/img/testi-icon-01.png" alt="">
                                        <?php }else{ ?>
                                        <img src="<?php echo $testi_image[0]; ?>" alt="">
                                        <?php } ?>
                                    </span>
                                    <h3><?php echo $row->post_title; ?></h3>
                                    <span class="work_name"><?php echo $client_location; ?></span>
                                    <h6><?php echo $heading; ?></h6>
                                   <p><?php echo $row->post_content; ?></p> <br>
                                    <h6><?php echo $date; ?></h6>
                                </div>
                            </div>
                             <?php } } else{  echo '<h3 class="text-center m-auto">No Record found. Please Try with another keyword..</h3>';}
                            
                            
                            
                            
                            
                            } else{ ?>
                <?php
               
                $args = array( 'post_type' => 'testimoni', 'posts_per_page' => -1, 'order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $testi_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            
               
                
                   
                   
                    $country = get_field('client_location');
                    $heading = get_field('testimony_heading');
                   
                ?>
                <div class="element">
                    <div class="wapper">
                        <span class="profile-holder">
                            <?php if(!$testi_image){ ?>
                            <img src="<?php bloginfo("template_url"); ?>/img/testi-icon-01.png" alt="">
                            <?php }else{ ?>
                            <img src="<?php echo $testi_image[0]; ?>" alt="">
                            <?php } ?>
                        </span>
                        <h3><?php the_title(); ?></h3>
                        <span class="work_name"><?php echo $country; ?></span>
                        <h6><?php echo $heading; ?></h6>
                        <?php the_content(); ?><br>
                        <h6><?php echo get_the_date(); ?></h6>
                    </div>
                </div>
                 <?php endwhile; ?>
                <?php wp_reset_query(); }?>
                
            </div>
        </div>
    </section>
    <!-- testimonials-Main -->


<?php get_footer(); ?>