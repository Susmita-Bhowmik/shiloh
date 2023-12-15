<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

 <!-- footer -->
 <footer class="main-footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="wapper">
                        <span class="icon-holder"><img src="<?php bloginfo('template_url'); ?>/img/icon-mail.png" alt=""></span>
                        <a href="mailto: <?php  dynamic_sidebar('contact_email'); ?>" ><?php  dynamic_sidebar('contact_email'); ?></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wapper">
                        <span class="icon-holder"><img src="<?php bloginfo('template_url'); ?>/img/icon-phone.png" alt=""></span>
                        <a href="tel:<?php  dynamic_sidebar('contact_number1'); ?>" ><?php  dynamic_sidebar('contact_number1'); ?></a> 
                        <a href="tel: <?php  dynamic_sidebar('contact_number2'); ?>" ><?php  dynamic_sidebar('contact_number2'); ?></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wapper">
                        <span class="icon-holder"><img src="<?php bloginfo('template_url'); ?>/img/icon-location.png" alt=""></span>
		          
                        <span class="address"><?php  dynamic_sidebar('location'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- extra js -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/placeholder.min.js"></script>

    <!-- main js -->
    <script src="<?php bloginfo('template_url'); ?>/js/coustom.js"></script>


<script>
$('#search_form').submit(function(event){
   event.preventDefault();
    $('#result_msg1').html('');
    var link="<?php echo admin_url('admin-ajax.php') ;?>";
    var form = $('#search_form').serialize();
    var formData = new FormData;
    formData.append('action','search_content');
    formData.append('search_content',form);
    $('#read_submit').attr('disabled',true);
    $.ajax({
        url:link,
        type:'post',
        data:formData,
        processData:false,
        contentType:false,
       
        success:function(resp){
          
            var data = $.parseJSON(resp)
        
            
             if(data.status == 1){
                
                 location.replace("<?php echo site_url('read/?title=');?>"+data.title);
                 return false;
            
             }     
           
        }
    });
});    
</script>

<script>
$('#search_testimoni').submit(function(event){
   event.preventDefault();
    $('#result_msg1').html('');
    var link="<?php echo admin_url('admin-ajax.php') ;?>";
    var form = $('#search_testimoni').serialize();
    var formData = new FormData;
    formData.append('action','search_testimoni');
    formData.append('search_testimoni',form);
    $('#testimoni_submit').attr('disabled',true);
    $.ajax({
        url:link,
        type:'post',
        data:formData,
        processData:false,
        contentType:false,
       
        success:function(resp){
          
            var data = $.parseJSON(resp)
        
            
             if(data.status == 1){
                
                 location.replace("<?php echo site_url('testimonies/?search=');?>"+data.title);
                 return false;
            
             }     
           
        }
    });
});    
</script>


<script>
    $(document).ready(function() {
  // Attach a click event listener to the print button
  $('#printButton').click(function() {
    // Trigger the browser's print dialog
    window.print();
  });
});

</script>


<?php wp_footer(); ?>

</body>
</html>
