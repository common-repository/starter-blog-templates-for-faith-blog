<?php
Stffb_Customize_Control_Separetor($wp_customize, 'featured_pro_features', 'Featrued Post Slider Pro Features', 'featured_section', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'featured_slider_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    $featured_slider_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/featured.png';
    $featured_slider_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $featured_slider_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $featured_slider_features_info .= '</a>';
    $featured_slider_features_info .= '<p>';
    $featured_slider_features_info .= '<img src="'.$featured_slider_pro_features_img.'"/>';
    $featured_slider_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'featured_slider_pro_features_image', 
            array(
                'section'     => 'featured_section',
                'description' => $featured_slider_features_info,
                'priority' => 21
            )
        )
    );
    

