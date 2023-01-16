<?php 

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
*/

$footer_bg_img = get_theme_mod( 'saasto_footer_bg' );
$saasto_footer_logo = get_theme_mod( 'footer_logo_style_three', true );
$saasto_footer_top_space = function_exists('get_field') ? get_field('saasto_footer_top_space') : '0';
$saasto_copyright_center = $saasto_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$saasto_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg' ) : '';
$saasto_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'saasto_footer_bg_color' );
$footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

// bg image
$bg_img = !empty( $saasto_footer_bg_url_from_page['url'] ) ? $saasto_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $saasto_footer_bg_color_from_page ) ? $saasto_footer_bg_color_from_page : $footer_bg_color;

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
case '4':
    $footer_class[1] = 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7';
    $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5';
    $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-3 col-sm-5';
    $footer_class[4] = 'col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-7';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>


<footer class="d-none">
   <div class="footer__area">
    <?php if ( is_active_sidebar('footer-3-1') OR is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') ): ?>
      <div class="footer__top grey-bg-4 pt-95 pb-45" data-top-space="<?php print esc_attr($saasto_footer_top_space); ?>px" data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">
         <div class="container">
            <div class="row">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3-3' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-3-4' );
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
         </div>
      </div>
    <?php endif; ?>  
      <div class="footer__bottom grey-bg-4">
         <div class="container">
            <div class="footer__bottom-inner">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="footer__bottom-link">
                        <?php saasto_footer_menu(); ?>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="footer__social footer__social-3 text-md-end">
                        <?php //echo $saasto_helper->social_profile_one('class name'); ?>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>


<footer>
        <!-- ===============  footer area start =============== -->
        <div class="footer-style-three section-gap-top-y-1 position-relative">
            <div class="container">
                <div class="footer-top gap-4 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="footer-logo">
                        <a href="<?php echo esc_attr( home_url() ) ?>">
                            <?php echo wp_get_attachment_image( $saasto_footer_logo, 'full', '', ['class' => 'w-100']); ?>
                        </a>
                    </div>

                    <?php 
                        if( function_exists('saasto_footer_social_profiles') ){
                            saasto_footer_social_profiles('footer-three');
                        }
                     ?>
                </div>

                <div class="foooter-main-wrap row">
                    <?php
                    if ( $footer_columns < 4 ) {

                    if ( is_active_sidebar('footer-3-1') ){
                        print '<div class="col-lg-4">';
                        dynamic_sidebar( 'footer-3-1' );
                        print '</div>';
                    }

                    if ( is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') ):

                        print '<div class="col-lg-8">';
                        print '<div class="row">';
                                
                            if ( is_active_sidebar('footer-3-2') ){
                                print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                dynamic_sidebar( 'footer-3-2' );
                                print '</div>';
                            }
                            if ( is_active_sidebar('footer-3-3') ){
                                print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                dynamic_sidebar( 'footer-3-3' );
                                print '</div>';
                            }
                            if ( is_active_sidebar('footer-3-4') ){
                                print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                                dynamic_sidebar( 'footer-3-4' );
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

                <div class="footer-bottom">
                    <div class="row gy-3">
                        <div class="col-md-12 pt-4 footer-right-text pb-4">
                            <p><?php echo esc_html( saasto_copyright_text() ); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ===============  footer area end =============== -->
    </div> <!-- Bg wrapper -->
</footer>
