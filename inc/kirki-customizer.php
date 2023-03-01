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
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'saasto' ),
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
        'title'       => esc_html__( 'Header Setting', 'saasto' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'saasto' ),
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
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'saasto' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'saasto' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'saasto' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'saasto' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'saasto' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'saasto' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'saasto' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'saasto_customizer',
    ] );
}

add_action( 'customize_register', 'saasto_customizer_panels_sections' );

function _header_top_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'saasto' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'saasto' ),
        'section'  => 'header_top_setting',
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
        'section'  => 'header_top_setting',
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
        'section'  => 'header_top_setting',
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
        'section'  => 'header_top_setting',
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
        'section'  => 'header_top_setting',
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
        'type'     => 'switch',
        'settings' => 'saasto_header_lang',
        'label'    => esc_html__( 'language On/Off', 'saasto' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_phone_num',
        'label'    => esc_html__( 'Phone Number', 'saasto' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 234 567 899', 'saasto' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_mail_id',
        'label'    => esc_html__( 'Mail ID', 'saasto' ),
        'section'  => 'saasto_mail_id',
        'default'  => esc_html__( 'info@saasto.com', 'saasto' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_address',
        'label'    => esc_html__( 'Address', 'saasto' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Moon ave, New York, 2020 NY US', 'saasto' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_address_url',
        'label'    => esc_html__( 'Address URL', 'saasto' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'saasto' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_social_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'saasto' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'saasto' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'saasto' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'saasto' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'saasto' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'saasto' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'saasto' ),
        'description' => esc_html__( 'Upload Your Logo.', 'saasto' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'saasto' ),
        'description' => esc_html__( 'Header Logo Black', 'saasto' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-2.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'saasto' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'saasto' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/favicon.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'saasto_side_logo',
        'label'       => esc_html__( 'Logo Side', 'saasto' ),
        'description' => esc_html__( 'Logo Side', 'saasto' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_extra_map',
        'label'    => esc_html__( 'Map Address Iframe', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'saasto' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_contact_title',
        'label'    => esc_html__( 'Contact Title', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'saasto' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_extra_address',
        'label'    => esc_html__( 'Office Address', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'saasto' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'saasto_extra_email',
        'label'    => esc_html__( 'Email ID', 'saasto' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@wprealizer.com', 'saasto' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'saasto' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'saasto' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'saasto' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'saasto' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'saasto' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'saasto' ),
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
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'saasto' ),
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
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'saasto' ),
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
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'saasto' ),
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
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'saasto' ),
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
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-def' => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png'
        ],
        'default'     => 'footer-style-def',
    ];

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
        'type'        => 'image',
        'settings'    => 'footer_logo_style_one',
        'label'       => esc_html__( 'Footer Logo', 'saasto' ),
        'description' => esc_html__( 'Upload Your Logo.', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-v2.png',
        'choices'     => [
			'save_as' => 'id',
		],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'footer_logo_style_three',
        'label'       => esc_html__( 'Footer Logo 3', 'saasto' ),
        'description' => esc_html__( 'Upload Your Logo.', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-v2.png',
        'choices'     => [
			'save_as' => 'id',
		],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'switch',
        'settings'    => 'footer_style_two_newsleter_switch',
        'label'       => esc_html__( 'Newslater', 'saasto' ),
        'description' => esc_html__( 'you can control newslater from here.', 'saasto' ),
        'section'     => 'footer_setting',
        'default'     => '0',
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ],
        ],
    ]; 

    $fields[] = [
        'type'     => 'text',
        'settings' => 'footer_style_two_newsleter_shortcode',
        'label'    => esc_html__( 'Newslater Shortcode', 'saasto' ),
        'section'  => 'footer_setting',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_style_two_newsleter_switch',
                'operator' => '==',
                'value'    => '1',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_top_switch_3',
        'label'    => esc_html__( 'Footer Top', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-3',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_top_switch_1',
        'label'    => esc_html__( 'Footer Top', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_copyright',
        'label'    => esc_html__( 'Copy Right', 'saasto' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2022 wprealizer. All Rights Reserved', 'saasto' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function saasto_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_color_option',
        'label'       => __( 'Theme Color', 'saasto' ),
        'description' => esc_html__( 'This is a Theme color control.', 'saasto' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_color_option_2',
        'label'       => __( 'Primary Color', 'saasto' ),
        'description' => esc_html__( 'This is a Primary color control.', 'saasto' ),
        'section'     => 'color_setting',
        'default'     => '#f2277e',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_color_option_3',
        'label'       => __( 'Secondary Color', 'saasto' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'saasto' ),
        'section'     => 'color_setting',
        'default'     => '#30a820',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_color_option_3_2',
        'label'       => __( 'Secondary Color 2', 'saasto' ),
        'description' => esc_html__( 'This is a Secondary color 2 control.', 'saasto' ),
        'section'     => 'color_setting',
        'default'     => '#ffb352',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'saasto_color_scrollup',
        'label'       => __( 'ScrollUp Color', 'saasto' ),
        'description' => esc_html__( 'This is a ScrollUp colo control.', 'saasto' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'saasto_color_fields' );

// 404
function saasto_404_fields( $fields ) {
    // 404 settings
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

// course_settings
function saasto_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'saasto_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'saasto' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'saasto_learndash_order',
        'label'       => esc_html__( 'Post Order', 'saasto' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'saasto' ),
            'DESC' => esc_html__( 'DESC', 'saasto' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'saasto_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'saasto' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'saasto_learndash_fields' );
}

/**
 * Added Fields
 */
function saasto_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'saasto' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'saasto_typo_fields' );


// course_settings
function saasto_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'saasto' ),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'saasto' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'saasto' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'saasto' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'saasto' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'saasto' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'saasto' ),
            'off' => esc_html__( 'Disable', 'saasto' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

add_filter( 'kirki/fields', 'saasto_course_fields' );




/**
 * Added Fields
 */
function saasto_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_ev_slug',
        'label'    => esc_html__( 'Event Slug', 'saasto' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourevent', 'saasto' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'saasto_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'saasto' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourportfolio', 'saasto' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'saasto_slug_setting' );


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