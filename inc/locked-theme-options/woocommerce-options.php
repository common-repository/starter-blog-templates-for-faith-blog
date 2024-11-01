<?php
$wp_customize->add_section(
	'shop_sidebar_section',
	array(
		'priority'       => 6,
		'panel'          => 'woocommerce',
		'title'          => __( 'Shop Sidebar', 'blogshoppro' ),
		'capability'     => 'edit_theme_options',
	)
);
$wp_customize->add_setting(
	'shop_page_sidebar',
	array(
		'default' => 'no',
		'transport'            => 'refresh', // Options: refresh or postMessage.
		'capability'           => 'edit_theme_options',
		'sanitize_callback'    => 'stffb_sanitize_select'
	)
);
$wp_customize->add_control(
	'shop_page_sidebar',
	array(
		'label'       => __( 'Sidebar', 'blogshoppro' ),
		'section'     => 'shop_sidebar_section',
		'type'        => 'select',
		'choices'  => array(
			'top'  => __( 'Top Sidebar', 'blogshoppro' ),
			'right' => __( 'Right Sidebar', 'blogshoppro' ),
			'left'  => __( 'Left Sidebar', 'blogshoppro' ),
			'no' => __( 'No Sidebar', 'blogshoppro' ),
		),
	)
);