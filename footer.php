<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saasto
 */

 
$bg_style = function_exists( 'get_field' ) ? get_field( 'body_background_style' ) : NULL;
do_action( 'saasto_footer_area' );

if( $bg_style != 'normal_style' ||  is_404()){
    echo '</div>'; // bg style closing
}

wp_footer();?>
        <div class="cursor"></div>
    </body>
</html>