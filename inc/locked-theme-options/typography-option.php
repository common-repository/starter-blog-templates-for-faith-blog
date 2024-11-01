<?php
Stffb_Customize_Control_Separetor($wp_customize, 'typhograpy_pro_features', 'typhograpy Pro Features', 'typhograpy', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'typhograpy_pro_features_image',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $typhograpy_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/typography.png';
    $typhograpy_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $typhograpy_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $typhograpy_features_info .= '</a>';
    $typhograpy_features_info .= '<p>';
    $typhograpy_features_info .= '<img src="'.$typhograpy_pro_features_img.'"/>';
    $typhograpy_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'typhograpy_pro_features_image', 
            array(
                'section'     => 'typhograpy',
                'description' => $typhograpy_features_info,
                'priority' => 21
            )
        )
    );
    

