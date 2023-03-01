<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
*/



$saasto_footer_logo         = get_theme_mod( 'footer_logo_style_one' );
$saasto_footer_top_space    = function_exists('get_field') ? get_field('saasto_footer_top_space') : '0';
$saasto_copyright_center    = $saasto_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

?>


<!-- ===============  footer style start =============== -->
<footer>
    <div class="footer-style-one">
        <div class="container">
            <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
                <!-- Footer widgets -->
                <div class="footer-widgets">
                    <div class="row">
                    <?php
                        if ( $footer_columns < 4 ) {

                        if ( is_active_sidebar('footer-1') ){
                            print '<div class="col-lg-4">';
                            dynamic_sidebar( 'footer-1' );
                            print '</div>';
                        }

                        if ( is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ):

                            print '<div class="col-lg-8">';
                            print '<div class="row">';
                                    
                                if ( is_active_sidebar('footer-2') ){
                                    print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                    dynamic_sidebar( 'footer-2' );
                                    print '</div>';
                                }
                                if ( is_active_sidebar('footer-3') ){
                                    print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                    dynamic_sidebar( 'footer-3' );
                                    print '</div>';
                                }
                                if ( is_active_sidebar('footer-4') ){
                                    print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                    dynamic_sidebar( 'footer-4' );
                                    print '</div>';
                                }
                                
                            print '</div>';
                            print '</div>';
                       
                        endif;

                        } else {
                            for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                if ( !is_active_sidebar( 'footer-3-' . $num ) ) {
                                    continue;
                                }
                                print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                dynamic_sidebar( 'footer-3-' . $num );
                                print '</div>';
                            }
                        }
                    ?>
                    </div>
                </div> <!-- Footer widgets-end -->
            <?php endif; ?>

            <div class="footer-main-wrap">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-3">
                        <div class="footer-icon">
                            <?php
                            // Site Logo
                            if( $saasto_footer_logo ){
                                print wp_get_attachment_image( $saasto_footer_logo, 'full', '', ['class' => 'footer-logo']);
                            }else{
                                saasto_header_logo();
                            }
                            ?>
                        </div>
                    </div>

                    <?php 
                    // Print if the menu is available
                    if ( has_nav_menu( 'footer-menu' ) ): ?>
                        <div class="col-lg-9 col-md-6">
                            <?php saasto_footer_menu(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row gy-3">
                    <div class="col-lg-7 col-md-6 d-flex gap-5 flex-wrap">
                        <p class="footer-defult-links text-md-end"><?php print saasto_copyright_text(); ?></p>
                    </div>
                    
                    <?php 
                        echo '<div class="col-lg-5 col-md-6">';
                            if( function_exists('saasto_footer_social_profiles') ){
                                saasto_footer_social_profiles('footer-one');
                            }
                        echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===============  footer style  end =============== -->