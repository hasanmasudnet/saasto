<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package saasto
 */

/** 
 *
 * saasto header
 */

function saasto_check_header() {
    // Display Default Header
    if( !class_exists('Saasto_Core') ){
        get_template_part( 'template-parts/header/header-1' );
    }
}
add_action( 'saasto_header_style', 'saasto_check_header', 10 );


/**
 *
 * saasto footer
 */
add_action( 'saasto_footer_area', 'saasto_call_default_footer', 10 );

 function saasto_call_default_footer() {

    // Display Default Footer
    if( !class_exists('Saasto_Core') ){
        get_template_part( 'template-parts/footer/footer-def' );
    }

 }

// header logo
function saasto_header_logo() { ?>
      <?php
        $saasto_custom_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_cust_logo' ) : NULL;
        $saasto_logo = get_template_directory_uri() . '/assets/img/logo.png';

        $saasto_site_logo = get_theme_mod( 'logo', $saasto_logo );
        $saasto_custom_logo = function_exists( 'get_field' ) ? get_field( 'custom_logo' ) : NULL;
      ?>

      <?php if ( !empty( $saasto_custom_logo_on ) && !empty( $saasto_custom_logo) ) : ?>
         <a class="secondary-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <?php print wp_get_attachment_image( $saasto_custom_logo, 'full', '', ['class' => 'custom-logo']); ?>
         </a>
      <?php else : ?>
         <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
             <img src="<?php print esc_url( $saasto_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'saasto' );?>" />
         </a>
      <?php endif; ?>
   <?php
}

// header logo
function saasto_header_sticky_logo() {?>
    <?php
        $saasto_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $saasto_secondary_logo = get_theme_mod( 'seconday_logo', $saasto_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $saasto_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'saasto' );?>" />
      </a>
    <?php
}

function saasto_mobile_logo() {
    // side info
    $saasto_mobile_logo_hide = get_theme_mod( 'saasto_mobile_logo_hide', false );

    $saasto_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo.png' );

    ?>

    <?php if ( !empty( $saasto_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $saasto_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'saasto' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }


/**
 * [saasto_header_menu description]
 * @return [type] [description]
 */
function saasto_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Saasto_Navwalker_Class::fallback',
            'walker'         => new Saasto_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [saasto_header_menu description]
 * @return [type] [description]
 */
function saasto_mobile_menu() {
    ?>
    <?php
        $saasto_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ] );

    $saasto_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $saasto_menu );
        echo 
        _post( $saasto_menu );
    ?>
    <?php
}

/**
 * [saasto_search_menu description]
 * @return [type] [description]
 */
function saasto_header_search_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Saasto_Navwalker_Class::fallback',
            'walker'         => new Saasto_Navwalker_Class,
        ] );
    ?>
    <?php
}


// saasto_copyright_text
function saasto_copyright_text() {
   return get_theme_mod( 'saasto_copyright', esc_html__( '© 2023 Saasto, All Rights Reserved. Design By wprealizer', 'saasto' ) );
}


/**
 *
 * pagination
 */
if ( !function_exists( 'saasto_pagination' ) ) {

    function _saasto_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function saasto_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _saasto_pagi_callback( $pagi );
    }
}


// header top bg color
function saasto_breadcrumb_bg_color() {
    $color_code = get_theme_mod( 'saasto_breadcrumb_bg_color', '#222' );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style( 'saasto-breadcrumb-bg', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'saasto_breadcrumb_bg_color' );

// breadcrumb-spacing top
function saasto_breadcrumb_spacing() {
    $padding_px = get_theme_mod( 'saasto_breadcrumb_spacing', '160px' );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style( 'saasto-breadcrumb-top-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'saasto_breadcrumb_spacing' );

// breadcrumb-spacing bottom
function saasto_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod( 'saasto_breadcrumb_bottom_spacing', '160px' );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style( 'saasto-breadcrumb-bottom-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'saasto_breadcrumb_bottom_spacing' );

// scrollup
function saasto_scrollup_switch() {
    $scrollup_switch = get_theme_mod( 'saasto_scrollup_switch', false );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    if ( $scrollup_switch ) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style( 'saasto-scrollup-switch', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'saasto_scrollup_switch' );

// theme color
function saasto_custom_color() {
    $color_code = get_theme_mod( 'saasto_color_option', '#2b4eff' );
    $breadcrumb_pt = get_theme_mod( 'breadcrumb_pt', '150' );
    $breadcrumb_pb = get_theme_mod( 'breadcrumb_pb', '150' );
    $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', 'rgba(137, 118, 253, 0.1)' );
    $breadcrumb_bg = get_theme_mod( 'breadcrumb_bg', false );
    wp_enqueue_style( 'saasto-custom', SAASTO_THEME_CSS_DIR . 'saasto-custom.css', [] );
    // if ( $color_code != '' ) {
        $custom_css = '';

        $custom_css .= ".breadcrumb-area { 
            background-image: " . $breadcrumb_bg . ";
            background-color: " . $breadcrumb_bg_color . ";
            padding-top: " . $breadcrumb_pt . "px;
            padding-bottom: " . $breadcrumb_pb . "px;
            background-color: " . $breadcrumb_bg_color . ";
        
        }";
        wp_add_inline_style( 'saasto-custom', $custom_css );
    // }
}
add_action( 'wp_enqueue_scripts', 'saasto_custom_color' );


// saasto_kses_intermediate
function saasto_kses_intermediate( $string = '' ) {
    return wp_kses( $string, saasto_get_allowed_html_tags( 'intermediate' ) );
}

function saasto_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function saasto_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}

/**
 * 
 * Remove [...] $more content from wp post excerpt
 * 
 * @link:https://developer.wordpress.org/reference/hooks/excerpt_more/
 */

 function saasto_excerpt_more( $more ) {
    return '.';
}
add_filter('excerpt_more', 'saasto_excerpt_more');
