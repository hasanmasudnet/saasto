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
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>


    <?php
         $saasto_preloader = get_theme_mod( 'saasto_preloader', false );
         $saasto_backtotop = get_theme_mod( 'saasto_backtotop', false );

         $saasto_preloader_logo = get_template_directory_uri() . '/assets/img/favicon.png';

         $preloader_logo = get_theme_mod('preloader_logo') ? get_theme_mod('preloader_logo') : $saasto_preloader_logo;
         $bg_style = function_exists( 'get_field' ) ? get_field( 'body_background_style' ) : NULL;
         $loader_spinner = get_theme_mod( 'saasto_preloader_spinner' ) ? 'spinner' : NULL;

    ?>
    <?php if ( !empty( $saasto_preloader ) ): ?>
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


    <?php if ( !empty( $saasto_backtotop ) ): ?>
    <!-- back to top start -->
    <div class="progress-wrap">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
     </svg>
    </div>
    <!-- back to top end -->
    <?php endif;?>

   <?php
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
    
    <!-- header start -->
    <?php do_action( 'saasto_header_style' );?>
    <!-- header end -->
    
    <!-- wrapper-box start -->
    <?php do_action( 'saasto_before_main_content' );?>