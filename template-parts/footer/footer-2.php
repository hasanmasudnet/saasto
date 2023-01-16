<?php 

/**
 * Template part for displaying footer layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
*/

$footer_bg_img = get_theme_mod( 'saasto_footer_bg' );
$saasto_footer_logo = get_theme_mod( 'footer_logo_style_two', true );
$saasto_footer_top_space = function_exists('get_field') ? get_field('saasto_footer_top_space') : '0';
$saasto_copyright_center = $saasto_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$saasto_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg' ) : '';
$saasto_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'saasto_footer_bg_color' );
$footer_top_space = get_theme_mod( 'saasto_footer_top_space' );
$footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

// bg image
$bg_img = !empty( $saasto_footer_bg_url_from_page['url'] ) ? $saasto_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $saasto_footer_bg_color_from_page ) ? $saasto_footer_bg_color_from_page : $footer_bg_color;

// footer space
$footer_space = !empty( $saasto_footer_top_space ) ? $saasto_footer_top_space : $footer_top_space;

$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-2-' . $num ) ) {
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
    $footer_class[3] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5';
    $footer_class[4] = 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<!-- footer area start --> 
 <footer class="d-none">
    <div class="footer__area">
        <?php if ( is_active_sidebar( 'footer-2-1' ) OR is_active_sidebar( 'footer-2-2' ) OR is_active_sidebar( 'footer-2-3' ) OR is_active_sidebar( 'footer-2-4' ) ): ?>
       <div class="footer__top grey-bg-4 pt-95 pb-45" data-top-space="<?php print esc_attr($footer_top_space); ?>" data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">
          <div class="container">
             <div class="row">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-2-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2-2' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2-3' );
                    print '</div>';

                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-2-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-2-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-2-' . $num );
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
                   <div class="col-xxl-12">
                      <div class="footer__copyright text-center">
                         <p><?php print saasto_copyright_text(); ?></p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>

 <!-- =============== newslatter style start ============= -->
 <footer>
    <div class="newslatter-style-one position-relative section-gap-xl-top">
         <div class="container-fluid">
             <div class="row justify-content-center">
                 <div class="col-lg-10">
                     <div class="newslatter-wrap text-center px-3">
                         <h3 class="text-white">Subscribe to Our Newsletter & get the Coupon code.</h3>
                          <p class="body-disply-1 pb-2">All your information is completely confidential</p>

                          <form action="#" method="POST">
                              <div class="newslatter-form-style-one mt-5">
                                  <div class="form-icon">
                                    <img src="assets/img/Icons/form-Icon.svg" alt="">
                                   
                                  </div>
                                  <input type="text" placeholder="Type your email">
                                  <button type="submit" class="submit-defult-btn submit-btn-one">Subscribe</button>
                              </div>
                          </form>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!-- =============== newslatter style end =============== -->

    <!-- ===============  footer style one start ============= -->
    <div class="footer-style-one position-relative">
        <div class="container">
            <div class="row">
            <?php
                if ( $footer_columns < 4 ) {

                if ( is_active_sidebar('footer-2-1') ){
                    print '<div class="col-lg-4">';
                    dynamic_sidebar( 'footer-2-1' );
                    print '</div>';
                }

                if ( is_active_sidebar('footer-2-2') OR is_active_sidebar('footer-2-3') OR is_active_sidebar('footer-2-4') ):

                    print '<div class="col-lg-8">';
                    print '<div class="row">';
                            
                        if ( is_active_sidebar('footer-2-2') ){
                            print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                            dynamic_sidebar( 'footer-2-2' );
                            print '</div>';
                        }
                        if ( is_active_sidebar('footer-2-3') ){
                            print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                            dynamic_sidebar( 'footer-2-3' );
                            print '</div>';
                        }
                        if ( is_active_sidebar('footer-2-4') ){
                            print '<div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-lg-center">';
                            dynamic_sidebar( 'footer-2-4' );
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

            <div class="row">
                <div class="col-md-12 pt-3 footer-right-text pb-4 pt-4">
                    <p><?php echo esc_html( saasto_copyright_text() ); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===============  footer style one end ============= -->

