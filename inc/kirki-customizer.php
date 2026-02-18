<?php
/**
 * saasto customizer
 *
 * @package saasto
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function saasto_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'saasto_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Saasto Customizer', 'saasto' ),
    ] );

    /**
     * Customizer Section
     */

    $wp_customize->add_section( 'global_enable_disable_settings', [
        'title'       => esc_html__( 'Global Enable/Disable', 'saasto' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'saasto' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Settings', 'saasto' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Settings', 'saasto' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'saasto' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'saasto' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Settings', 'saasto' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'saasto' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'saasto' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'saasto' ),
        'description' => '',
        'priority'    => 25,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'saasto' ),
        'description' => '',
        'priority'    => 27,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'saasto' ),
        'description' => '',
        'priority'    => 30,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );
}

add_action( 'customize_register', 'saasto_customizer_panels_sections' );

function _global_enable_desable_fields( $fields ) {
    // global Enable disable seciton

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cursor_style_setting',
        'label'    => esc_html__( 'Cursor Style', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'description' => esc_html__( 'you can trun off Cursor Style globally For all page by desabling this.', 'saasto' ),
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'page_sidebar_setting',
        'label'    => esc_html__( 'Page sidebar', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'description' => esc_html__( 'you can trun off page side bar globally For all page by desabling this.', 'saasto' ),
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_preloader_spinner',
        'label'    => esc_html__( 'Spinner', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'saasto' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'saasto' ),
        'section'     => 'global_enable_disable_settings',
        'default'     => get_template_directory_uri() . '/assets/img/favicon.svg',
        'active_callback' => [
            [
                'setting'  => 'saasto_preloader',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    // button for headers
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_head_r_button_text_one',
        'label'    => esc_html__( 'Button Name', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => esc_html__( 'Login', 'saasto' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'saasto_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'url',
        'settings' => 'saasto_head_r_button_link_one',
        'label'    => esc_html__( 'Button URL', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'saasto_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_head_r_button_text_two',
        'label'    => esc_html__( 'Button Name', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => esc_html__( 'Sign Up', 'saasto' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'saasto_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'url',
        'settings' => 'saasto_head_r_button_link_two',
        'label'    => esc_html__( 'Button URL', 'saasto' ),
        'section'  => 'global_enable_disable_settings',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'saasto_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_global_enable_desable_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_saasto_header',
        'label'       => esc_html__( 'Select Header Style', 'saasto' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png',
            'header-style-4'  => get_template_directory_uri() . '/inc/img/header/header-4.png',
            'header-style-5'  => get_template_directory_uri() . '/inc/img/header/header-5.png',
            'header-style-6'  => get_template_directory_uri() . '/inc/img/header/header-6.png',
            'saasto-template-builder'  => get_template_directory_uri() . '/inc/img/header/custom-header.png'
        ],
        'default'     => 'header-style-1',
    ];

    if(class_exists('Saasto_Core')){
        $fields[] = [
            'type'        => 'select',
            'settings'    => 'header_custom_style',
            'label'       => esc_html__( 'Select Header', 'saasto' ),
            'section'     => 'section_header_logo',
            'default'     => '4',
            'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
            'priority'    => 10,
            'multiple'    => 1,
            'choices'     => Kirki\Util\Helper::get_posts(
                array(
                    'posts_per_page' => 10,
                    'post_type'      => 'saasto-blocks'
                ) ,
            ),
            'active_callback' => [
                [
                    'setting'  => 'choose_saasto_header',
                    'operator' => '==',
                    'value'    => 'saasto-template-builder',
                ],
            ],

        ];
    }

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'saasto' ),
        'description' => esc_html__( 'Upload Your Logo.', 'saasto' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );


/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    
    // Breadcrumb Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'saasto' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_breadcrumb_shape_switch',
        'label'    => esc_html__( 'Enable Shap', 'saasto' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Background Image', 'saasto' ),
        'description' => esc_html__( 'Background Image', 'saasto' ),
        'section'     => 'breadcrumb_setting',
    ];



    $fields[] = [
        'type'        => 'color',
        'settings'    => 'breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'saasto' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'saasto' ),
        'section'     => 'breadcrumb_setting',
        'default'     => 'rgba(137, 118, 253, 0.1)',
        'priority'    => 10, 
    ];

    $fields[] = [
        'type'        => 'number',
        'settings'    => 'breadcrumb_pt',
        'label'       => esc_html__( 'Padding top', 'saasto' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '150'
    ];
    $fields[] = [
        'type'        => 'number',
        'settings'    => 'breadcrumb_pb',
        'label'       => esc_html__( 'Padding Bottom', 'saasto' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '150'
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );


/*
_header_page_title_fields
 */


/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_btn_switch',
        'label'    => esc_html__( 'Read more', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_cat',
        'label'    => esc_html__( 'Category', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_author',
        'label'    => esc_html__( 'Author', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_date',
        'label'    => esc_html__( 'Date', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_comments',
        'label'    => esc_html__( 'Comments', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'saasto' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'saasto' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_saasto_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-def' => get_template_directory_uri() . '/inc/img/footer/default-footer.png',
            'saasto-template-builder' => get_template_directory_uri() . '/assets/img/custom-footer.png'
        ],
        'default'     => 'footer-style-def',
    ];

    if(class_exists('Saasto_Core')){
        $fields[] = [
            'type'        => 'select',
            'settings'    => 'footer_custom_style',
            'label'       => esc_html__( 'Select Footer', 'saasto' ),
            'section'     => 'footer_setting',
            'default'     => '4',
            'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
            'priority'    => 10,
            'multiple'    => 1,
            'choices'     => Kirki\Util\Helper::get_posts(
                array(
                    'posts_per_page' => 10,
                    'post_type'      => 'saasto-blocks'
                ) ,
            ),
            'active_callback' => [
                [
                    'setting'  => 'choose_saasto_footer',
                    'operator' => '==',
                    'value'    => 'saasto-template-builder',
                ],
            ],

        ];
    }

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'saasto' ),
            '3' => esc_html__( 'Widget Number 3', 'saasto' ),
            '2' => esc_html__( 'Widget Number 2', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_copyright',
        'label'    => esc_html__( 'Copy Right', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2023 wprealizer. All Rights Reserved', 'saasto' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// 404
function saasto_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_404_breadcrumb',
        'label'    => esc_html__( 'Show Breadcrumb', 'saasto' ),
        'section'  => '404_page',
        'default'  => 0,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'saasto_404_bg',
        'label'       => esc_html__( '404 Image.', 'saasto' ),
        'description' => esc_html__( '404 Image.', 'saasto' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_error_title',
        'label'    => esc_html__( 'Not Found Title', 'saasto' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'saasto' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_error_desc',
        'label'    => esc_html__( '404 Description Text', 'saasto' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'saasto' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'saasto' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'saasto' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'saasto_404_fields' );



/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function saasto_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'saasto' ) ) {
        $value = Kirki::get_option( saasto_get_theme(), $name );
    }

    return apply_filters( 'saasto_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function saasto_get_theme() {
    return 'saasto';
}