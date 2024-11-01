<?php
Stffb_Customize_Control_Separetor($wp_customize, 'colors_pro_features', 'Colors Pro Features', 'colors', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'colors_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $colors_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/header.png';
    $colors_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $colors_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $colors_features_info .= '</a>';
    $colors_features_info .= '<p>';
    $colors_features_info .= '<img src="'.$colors_pro_features_img.'"/>';
    $colors_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'colors_pro_features_image', 
            array(
                'section'     => 'colors',
                'description' => $colors_features_info,
                'priority' => 21
            )
        )
    );
    

