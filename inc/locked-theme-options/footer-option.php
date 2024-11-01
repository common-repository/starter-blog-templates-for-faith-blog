<?php
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 10,
		'panel'          => 'blog-starter-pro',
		'title'          => __( 'Footer Section', 'blog-starter-pro' ),
		'capability'     => 'edit_theme_options',
	)
);

$wp_customize->add_setting(
	'footer_layout',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_select',
		'default'     => 'classic',
	)
);
$wp_customize->add_control(
	'footer_layout',
	array(
		'label'       => __( 'Footer Layout', 'blog-starter-pro' ),
		'section'     => 'footer_section',
		'type'        => 'radio',
		'choices' => array(
			'default' => __( 'Default', 'blog-starter-pro' ),
			'classic' => __( 'Classic', 'blog-starter-pro' ),
		),
	)
);

$wp_customize->add_setting(
	'footer_site_logo',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_image',
		
	)
);

$wp_customize->add_control(
   new WP_Customize_Image_Control(
       $wp_customize,
       'footer_site_logo',
       array(
           'label'      => __( 'Upload a logo', 'blog-starter-pro' ),
           'section'    => 'footer_section',
           'settings'   => 'footer_site_logo',
           'active_callback' => 'stffb_is_active_footer_classic_layout',
       )
   )
);
$wp_customize->add_setting(
	'show_footer_menu',
	array(
		'default' => true,
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'stffb_sanitize_checkbox'
	)
);
$wp_customize->add_control(
	'show_footer_menu',
	array(
		'label'       => __( 'Show Footer Menu', 'blog-starter-pro' ),
		'section'     => 'footer_section',
		'type'        => 'checkbox',
		'active_callback' => 'stffb_is_active_footer_classic_layout',
	)
);
$wp_customize->add_setting(
	'show_footer_social_links',
	array(
		'default' => true,
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'stffb_sanitize_checkbox'
	)
);
$wp_customize->add_control(
	'show_footer_social_links',
	array(
		'label'       => __( 'Show Footer Social Links', 'blog-starter-pro' ),
		'section'     => 'footer_section',
		'type'        => 'checkbox',
		'active_callback' => 'stffb_is_active_footer_classic_layout',
	)
);
$wp_customize->add_setting(
	'footer_column',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_select',
		'default'     => 3,
	)
);

$wp_customize->add_control(
	'footer_column',
	array(
		'label'       => __( 'Footer Column', 'blog-starter-pro' ),
		'section'     => 'footer_section',
		'type'        => 'radio',
		'active_callback' => 'stffb_is_active_footer_default_layout',
		'choices' => array(
			'2' => __( '2 Column', 'blog-starter-pro' ),
			'3' => __( '3 Column', 'blog-starter-pro' ),
			'4' => __( '4 Column', 'blog-starter-pro' ),
		),
	)
);

$wp_customize->add_section(
	'copyright_section',
	array(
		'panel'          => 'blog-starter-pro',
		'title'          => __( 'Copyright', 'blog-starter-pro' ),
		'capability'     => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'copyright_text',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'wp_kses_post',
		'default' => __( 'Copyright © 2021 All Rights Reserved.', 'blog-starter-pro' ),
	)
);

// Control: Name.
$wp_customize->add_control(
	'copyright_text',
	array(
		'label'       => __( 'Copyright Text', 'blog-starter-pro' ),
		'section'     => 'copyright_section',
		'type'        => 'textarea',
	)
);

$wp_customize->add_section(
	'instagram_section',
	array(
		'priority'       => 8,
		'panel'          => 'blog-starter-pro',
		'title'          => __( 'Instagram Slider', 'blog-starter-pro' ),
		'capability'     => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'instagram_slider_on_off',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_checkbox',
		'default'     => false,
	)
);
$wp_customize->add_control(
	'instagram_slider_on_off',
	array(
		'label'       => __( 'Show Instagram Section', 'blog-starter-pro' ),
		'section'     => 'instagram_section',
		'type'        => 'checkbox',
	)
);

$wp_customize->add_setting(
	'insta_feed_shortcode',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'wp_kses_post',
		'default'     => '',
	)
);

$wp_customize->add_control(
	'insta_feed_shortcode',
	array(
		'label'       => __( 'Instagram Feed Shortcode', 'blog-starter-pro' ),
		'section'     => 'instagram_section',
		'type'        => 'textarea',
	)
);

