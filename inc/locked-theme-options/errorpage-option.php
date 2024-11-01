<?php
$wp_customize->add_section(
	'errorpage_section',
	array(
		'priority'       => 6,
		'panel'          => 'faith-blog',
		'title'          => __( '404 Page', 'stffb' ),
		'description'    => __( 'Customize 404 Error Page', 'stffb' ),
		'capability'     => 'edit_theme_options',
	)
);

Stffb_Customize_Control_Separetor($wp_customize, 'errorpage_pro_features', '404 Errorpage Pro Features', 'errorpage_section', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'error_page_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $errorpage_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/404page.png';
    $errorpage_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $errorpage_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $errorpage_features_info .= '</a>';
    $errorpage_features_info .= '<p>';
    $errorpage_features_info .= '<img src="'.$errorpage_pro_features_img.'"/>';
    $errorpage_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'error_page_pro_features_image', 
            array(
                'section'     => 'errorpage_section',
                'description' => $errorpage_features_info,
                'priority' => 21
            )
        )
    );
    

