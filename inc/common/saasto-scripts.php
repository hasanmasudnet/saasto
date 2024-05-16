<?php



/**
 * saasto_scripts description
 * @return [type] [description]
 */
function saasto_scripts()
{

    /**
     * all css files
     */


    // Load Elementor assets for front end  if elementor installed
    if (class_exists('\Elementor\Plugin')) {
        $elementor = \Elementor\Plugin::instance();
        $elementor->frontend->enqueue_styles();
    }

    if (class_exists('\ElementorPro\Plugin')) {
        $elementor_pro = \ElementorPro\Plugin::instance();
        $elementor_pro->enqueue_styles();
    }

    // wp_enqueue_style( 'saasto-fonts', saasto_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style('bootstrap-icons', SAASTO_THEME_CSS_DIR . 'bootstrap-icons.css', []);
    wp_enqueue_style('animate', SAASTO_THEME_CSS_DIR . 'animate.css', []);
    wp_enqueue_style('magnific-popup', SAASTO_THEME_CSS_DIR . 'magnific-popup.css', []);
    wp_enqueue_style('swiper-bundle', SAASTO_THEME_CSS_DIR . 'swiper-bundle.css', []);

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', SAASTO_THEME_CSS_DIR . 'bootstrap.rtl.min.css');
    } else {
        wp_enqueue_style('bootstrap', SAASTO_THEME_CSS_DIR . 'bootstrap.css', array());
    }
    wp_enqueue_style('plyr', SAASTO_THEME_CSS_DIR . 'plyr.css', []);
    wp_enqueue_style('saasto-core', SAASTO_THEME_CSS_DIR . 'saasto-core.css', [], time());
    wp_enqueue_style('rn-core', SAASTO_THEME_CSS_DIR . 'rn-core.css', [], time());
    wp_enqueue_style('saasto-unit', SAASTO_THEME_CSS_DIR . 'saasto-unit.css', []);
    wp_enqueue_style('saasto-responsive', SAASTO_THEME_CSS_DIR . 'responsive.css', [], time());
    wp_enqueue_style('saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', []);
    wp_enqueue_style('saasto-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', SAASTO_THEME_JS_DIR . 'bootstrap-bundle.js', ['jquery'], '', true);
    wp_enqueue_script('swiper-bundle', SAASTO_THEME_JS_DIR . 'swiper-bundle.js', ['jquery'], false, false);
    wp_enqueue_script('magnific-popup', SAASTO_THEME_JS_DIR . 'magnific-popup.js', ['jquery'], false, true);
    wp_enqueue_script('wow', SAASTO_THEME_JS_DIR . 'wow.js', ['jquery'], false, true);
    wp_enqueue_script('plyr', SAASTO_THEME_JS_DIR . 'plyr.polyfilled.js', ['jquery'], false, true);
    wp_enqueue_script('viewport-jquery', SAASTO_THEME_JS_DIR . 'viewport.jquery.js', ['jquery'], false, true);
    wp_enqueue_script('saasto-main', SAASTO_THEME_JS_DIR . 'main.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'saasto_scripts');


/*
Register Fonts
 */
function saasto_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'saasto')) {
        // $font_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap';
    }
    return $font_url;
}
