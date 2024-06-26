<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
*/


$footer_bg_img              = get_theme_mod( 'saasto_footer_bg' );
$saasto_footer_logo         = get_theme_mod( 'saasto_footer_logo' );
$saasto_footer_top_space    = function_exists('get_field') ? get_field('saasto_footer_top_space') : '0';
$saasto_copyright_center    = $saasto_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$saasto_footer_bg_url_from_page     = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg' ) : '';
$saasto_footer_bg_color_from_page   = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg_color' ) : '';
$footer_bg_color            = get_theme_mod( 'saasto_footer_bg_color' );

// bg image
$bg_img = !empty( $saasto_footer_bg_url_from_page['url'] ) ? $saasto_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $saasto_footer_bg_color_from_page ) ? $saasto_footer_bg_color_from_page : $footer_bg_color;

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

?>


<!-- ===============  footer style start =============== -->
<footer>
    <div class="footer-style-def">
        <div class="container">
            <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
                <!-- Footer widgets -->
                <div class="footer-widgets">
                    <div class="row">
                    <?php
                        if ( $footer_columns < 4 ) {
                            print '<div class="col-lg-3 col-md-6 col-sm-7">';
                            dynamic_sidebar( 'footer-1' );
                            print '</div>';
        
                            print '<div class="col-lg-3 col-md-3 col-sm-5">';
                            dynamic_sidebar( 'footer-2' );
                            print '</div>';
        
                            print '<div class="col-lg-3 col-md-3 col-sm-5">';
                            dynamic_sidebar( 'footer-3' );
                            print '</div>';
        
                            print '<div class="col-lg-3 col-md-6 col-sm-7">';
                            dynamic_sidebar( 'footer-4' );
                            print '</div>';
                            } else {
                                for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                    if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                        continue;
                                    }
                                    print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                    dynamic_sidebar( 'footer-' . $num );
                                    print '</div>';
                                }
                            }
                    ?>
                    </div>
                </div> <!-- Footer widgets-end -->
            <?php endif; ?>
        </div>

        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text text-center"><?php print saasto_copyright_text(); ?></p>
            </div>
        </div>
        
    </div>
</footer>


<!-- ===============  footer style  end =============== -->