<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saasto
*/

$footer_bg_img = get_theme_mod( 'saasto_footer_bg' );
$saasto_footer_logo = get_theme_mod( 'saasto_footer_logo' );
$saasto_footer_top_space = function_exists('get_field') ? get_field('saasto_footer_top_space') : '0';
$saasto_copyright_center = $saasto_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$saasto_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg' ) : '';
$saasto_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'saasto_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'saasto_footer_bg_color' );

// bg image
$bg_img = !empty( $saasto_footer_bg_url_from_page['url'] ) ? $saasto_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $saasto_footer_bg_color_from_page ) ? $saasto_footer_bg_color_from_page : $footer_bg_color;

?>


<!-- ===============  footer style start =============== -->
<footer>
    <div class="footer-style-two">
        <div class="container">
            <div class="footer-main-wrap">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-3">
                        <div class="footer-icon">
                            <?php
                            // Site Logo
                            saasto_header_logo();?>
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
                    <div class="col-lg-5 col-md-6">
                        <?php echo saasto_footer_social_profiles(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===============  footer style  end =============== -->