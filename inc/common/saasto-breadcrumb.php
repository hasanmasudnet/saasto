<?php
/**
 * Breadcrumbs for Saasto theme.
 *
 * @package     Saasto
 * @author      wprealizer
 * @copyright   Copyright (c) 2022, wprealizer
 * @link        https://www.wprealizer.com
 * @since       Saasto 1.0.0
 */


function saasto_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $title =  __('Blog','saasto');
    $header_transparent = function_exists( 'get_field' ) ? (get_field( 'transparent_header' ) == true ) ? 'breadcrumb-transparent' : NULL : NULL;

    // hide breadcrumb for 404 page
    if(is_404()){
        return;
    }

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','saasto'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','saasto'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }

    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'saasto' ) );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'saasto' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'saasto' );
    } 
    elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'saasto' ) );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 

    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'breadcrumb_invisibility', $_id ) : '';
    if( !empty($_GET['s']) ) {
      $is_breadcrumb = null;
    }

      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );
        $saasto_breadcrumb_shape_switch = get_theme_mod( 'saasto_breadcrumb_shape_switch', false );
        $breadcrumb_switch = get_theme_mod( 'breadcrumb_switch', true );

        if ( $hide_bg_img && empty($_GET['s']) ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }?>

         <!-- page title area start -->
        <?php if(!empty($breadcrumb_switch)) : ?>
            <div class="breadcrumb-area position-relative overflow-hidden <?php print esc_attr( $breadcrumb_class); print esc_attr( $header_transparent )?>" data-background="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-info text-center">
                                <h3 class="breadcrumb__title"><?php echo wp_kses_post( $title ); ?></h3>
                                <?php if(function_exists('bcn_display')) {
                                bcn_display();
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php if( !empty($saasto_breadcrumb_shape_switch) ): ?>
                <img class="top-0 start-0 position-absolute d-none d-lg-block" src="<?php echo esc_url(get_template_directory_uri( )) ?>/assets/img/shapes/breadcrumb-sp-1.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
            <img class="position-absolute end-0 d-none d-lg-block" style=" bottom: -20px;" src="<?php echo esc_url(get_template_directory_uri( )) ?>/assets/img/shapes/breadcrumb-sp-2.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                <?php endif; ?>
            </div>
         <?php endif; ?>
         <!-- page title area end -->
        <?php
      }
}

add_action( 'saasto_before_main_content', 'saasto_breadcrumb_func' );

?>
