<?php
$wp_customize->add_section(
	'post_details',
	array(
		'priority'       => 1,
		'panel'          => 'blog-starter-pro',
		'title'          => __( 'Single Post Page', 'blog-starter-pro' ),
		'capability'     => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'related_post_on_off',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_checkbox',
		'default'     => false,
	)
);
$wp_customize->add_control(
	'related_post_on_off',
	array(
		'label'       => __( 'Releated Post ON//OFF', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'checkbox',
	)
);

$wp_customize->add_setting(
	'related_post_title_on_off',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_checkbox',
		'default'     => false,
	)
);

$wp_customize->add_control(
	'related_post_title_on_off',
	array(
		'label'       => __( 'Releated Post Title ON//OFF', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'checkbox',
		'active_callback' => 'stffb_related_post_show'
	)
);


$wp_customize->add_setting(
	'related_post_title_text',
	array(
		'default' => 'YOU MIGHT ALSO LIKE',
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'related_post_title_text',
	array(
		'label'       => __( 'Title', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'text',
		'active_callback' => 'stffb_related_post_title_show',
	)
);


$wp_customize->add_setting(
	'show_author_vcard',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_checkbox',
		'default'     => false,
	)
);
$wp_customize->add_control(
	'show_author_vcard',
	array(
		'label'       => __( 'Show Author Section', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'checkbox',
	)
);
$wp_customize->add_setting(
	'show_posts_navigation',
	array(
		'transport'            => 'refresh',
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'stffb_sanitize_checkbox',
		'default'     => true,
	)
);
$wp_customize->add_control(
	'show_posts_navigation',
	array(
		'label'       => __( 'Show Post Navigation', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'checkbox',
	)
);
$wp_customize->add_setting(
	'single_post_page_sidebar',
	array(
		'default' => 'right',
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'stffb_sanitize_radio'
	)
);
$wp_customize->add_control(
	'single_post_page_sidebar',
	array(
		'label'       => __( 'Sidebar Alignment', 'blog-starter-pro' ),
		'section'     => 'post_details',
		'type'        => 'radio',
		'choices'  => array(
			'left'  => __( 'Left Sidebar', 'blog-starter-pro' ),
			'right' => __( 'Right Sidebar', 'blog-starter-pro' ),
			'no' => __( 'No Sidebar', 'blog-starter-pro' ),
		),
	)
);
