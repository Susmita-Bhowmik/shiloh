<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Shiloh International Church</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/fav-icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Playfair+Display&display=swap" rel="stylesheet">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Noto+Sans&display=swap" rel="stylesheet">

    <!-- main css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body>
<header class="main-header">
        <div class="container">
            <nav class="main-nav">
                <span class="pull_mob_nav">
                    menu
                </span>
                <div class="row align-items-center">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo-main">
                        <a href="<?php echo home_url(); ?>">
                        <?php 
  
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                                
                                ?>
                                </a>
                            </div>
                    </div>
                    <div class="col-md-10 col-sm-10 d-flex justify-content-end">
                        <div class="nav-wapper">
                            <div class="nav-link-main-index">

                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );?>
                                
                            </div>
                            <div class="cart-wapper">
                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
