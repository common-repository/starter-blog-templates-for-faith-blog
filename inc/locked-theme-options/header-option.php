<?php
/**
 * Header Theme options
 */

Stffb_Customize_Control_Separetor($wp_customize, 'header_pro_features', 'Header Pro Features', 'header_sections', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'header_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $header_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/header.png';
    $header_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $header_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $header_features_info .= '</a>';
    $header_features_info .= '<p>';
    $header_features_info .= '<img src="'.$header_pro_features_img.'"/>';
    $header_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'header_pro_features_image', 
            array(
                'section'     => 'header_sections',
                'description' => $header_features_info,
                'priority' => 21
            )
        )
    );
    

