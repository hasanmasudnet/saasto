<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saasto
 */

?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
   <!-- ========== Meta Tags ========== -->
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

   <?php 
      wp_body_open();
      $saasto_preloader       = get_theme_mod( 'saasto_preloader', false );
      $saasto_preloader_logo  = get_template_directory_uri() . '/assets/img/favicon.png';
      $preloader_logo         = get_theme_mod('preloader_logo') ? get_theme_mod('preloader_logo') : $saasto_preloader_logo;
      $bg_style               = function_exists( 'get_field' ) ? get_field( 'body_background_style' ) : NULL;
      $loader_spinner         = get_theme_mod( 'saasto_preloader_spinner' ) ? 'spinner' : NULL;

      if ( !empty( $saasto_preloader ) ): ?>
        <!-- ===============  Preloder start =============== -->
            <div class="preloader">
               <div class="spinner-wrap">
                     <div class="preloder-logo">
                     
                        <img src="<?php echo esc_url($preloader_logo); ?>" alt="<?php echo esc_attr__('logo','saasto'); ?>" class="img-fluid">
                     </div>
                     <div class="<?php echo esc_attr($loader_spinner); ?>"></div> 
               </div>
            </div>
         <!-- ===============  Preloder end =============== -->
    <?php endif;?>

   <?php

      /**
      *
      * Set background illustration
      *
      * @since  1.0.0
      * @param  $bg_style -- Controlled from ACF
      */ 
      if( $bg_style == 'style_1' || is_404() ){
         echo '<div class="background-wrap home-bg-one">';
      }
      elseif( $bg_style == 'style_2' ){
         echo '<div class="background-wrap home-bg-two">';
      }
      elseif( $bg_style == 'style_3' ){
         echo '<div class="background-wrap inner-bg">';
      }
   ?>
    
    <?php do_action( 'saasto_header_style' );?>
    
    <!-- wrapper-box start -->
    <?php do_action( 'saasto_before_main_content' );?>