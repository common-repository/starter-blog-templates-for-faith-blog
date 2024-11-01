<?php
$wp_customize->add_section(
	'prealoader_section',
	array(
		'panel'          => 'faith-blog',
		'title'          => __( 'Prealoader', 'stffb' ),
		'capability'     => 'edit_theme_options',
	)
);

Stffb_Customize_Control_Separetor($wp_customize, 'preloader_pro_features', 'Preloader Pro Features', 'prealoader_section', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'preloader_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $preloader_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/preloader.png';
    $preloader_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $preloader_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $preloader_features_info .= '</a>';
    $preloader_features_info .= '<p>';
    $preloader_features_info .= '<img src="'.$preloader_pro_features_img.'"/>';
    $preloader_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'preloader_pro_features_image', 
            array(
                'section'     => 'prealoader_section',
                'description' => $preloader_features_info,
                'priority' => 21
            )
        )
    );
    

