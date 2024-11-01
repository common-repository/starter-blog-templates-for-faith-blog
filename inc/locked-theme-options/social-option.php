<?php
$wp_customize->add_section(
	'social_links',
	array(
		'priority'       => 1,
		'panel'          => 'blog-starter-pro',
		'title'          => __( 'Social Links', 'blog-starter-pro' ),
		'description'    => __( 'Social Links. to disable social Icon keep that fields empty.', 'blog-starter-pro' ),
		'capability'     => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'facebook',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'facebook',
	array(
		'label'       => __( 'Facebook Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'messenger',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'messenger',
	array(
		'label'       => __( 'Messenger Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'twitter',
	array(				
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'twitter',
	array(
		'label'       => __( 'twitter Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'pinterest',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'pinterest',
	array(
		'label'       => __( 'pinterest Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'youtube',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'youtube',
	array(
		'label'       => __( 'youtube Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'whatsapp',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'whatsapp',
	array(
		'label'       => __( 'Whatsapp Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'linkedin',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'linkedin',
	array(
		'label'       => __( 'linkedin Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'instagram',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'instagram',
	array(
		'label'       => __( 'Instagram Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'github',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'github',
	array(
		'label'       => __( 'github Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'stumbleupon',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'stumbleupon',
	array(
		'label'       => __( 'stumbleupon Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'tumblr',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'tumblr',
	array(
		'label'       => __( 'tumblr Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'weixin',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'weixin',
	array(
		'label'       => __( 'weixin Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'snapchat',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'snapchat',
	array(
		'label'       => __( 'snapchat Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'qq',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'qq',
	array(
		'label'       => __( 'QQ Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
$wp_customize->add_setting(
	'reddit',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'reddit',
	array(
		'label'       => __( 'reddit Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);

$wp_customize->add_setting(
	'viber',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'viber',
	array(
		'label'       => __( 'Viber Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);

$wp_customize->add_setting(
	'line',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'line',
	array(
		'label'       => __( 'Line Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);

$wp_customize->add_setting(
	'telegram',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'telegram',
	array(
		'label'       => __( 'Telegram Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);

$wp_customize->add_setting(
	'medium',
	array(
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'     => 'esc_url_raw',
	)
);
// Control: Name.
$wp_customize->add_control(
	'medium',
	array(
		'label'       => __( 'Medium Link', 'blog-starter-pro' ),
		'section'     => 'social_links',
		'type'        => 'url',
	)
);
