<?php



/**
 * saasto_scripts description
 * @return [type] [description]
 */
function saasto_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'saasto-fonts', saasto_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap-icons', SAASTO_THEME_CSS_DIR . 'bootstrap-icons.css', [] );
    wp_enqueue_style( 'animate', SAASTO_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', SAASTO_THEME_CSS_DIR . 'swiper-bundle.css', [] );

    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', SAASTO_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', SAASTO_THEME_CSS_DIR.'bootstrap.css', array() );
    }
    wp_enqueue_style( 'saasto-core', SAASTO_THEME_CSS_DIR . 'saasto-core.css', [] );
    wp_enqueue_style( 'saasto-unit', SAASTO_THEME_CSS_DIR . 'saasto-unit.css', [] );
    wp_enqueue_style( 'saasto-responsive', SAASTO_THEME_CSS_DIR . 'responsive.css', [] );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    wp_enqueue_style( 'saasto-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', SAASTO_THEME_JS_DIR . 'bootstrap-bundle.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', SAASTO_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'wow', SAASTO_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'saasto-main', SAASTO_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'saasto_scripts' );


/*
Register Fonts
 */
function saasto_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'saasto' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}