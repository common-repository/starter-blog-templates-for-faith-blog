<?php
$wp_customize->add_section(
	'blog_post_pro_options',
	array(
		'panel'          => 'faith-blog',
		'title'          => __( 'Blog Post Settings', 'stffb' ),
		'capability'     => 'edit_theme_options',
		'priority'		=> 5
	)
);

Stffb_Customize_Control_Separetor($wp_customize, 'blog_post_pro_features', 'Blog Post Pro Features', 'blog_post_pro_options', 20);

    /** Faith Blog Pro Screenshot */

    $wp_customize->add_setting( 'blog_post_pro_features_image',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $blog_post_pro_features_img = STFFB_PLUGIN_URL . 'assets/img/blog-post-settings.png';
    $blog_post_features_info = '<a target="_blank" class="upgrade-to-pro-btn" href="'.esc_url('https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/').'">';
    $blog_post_features_info .= __('Purchase The Blog Starter Pro Theme to Unlock These Features', 'stffb');
    $blog_post_features_info .= '</a>';
    $blog_post_features_info .= '<p>';
    $blog_post_features_info .= '<img src="'.$blog_post_pro_features_img.'"/>';
    $blog_post_features_info .= '</p>';
    
    $wp_customize->add_control( new Stffb_Note_Control( $wp_customize,
        'blog_post_pro_features_image', 
            array(
                'section'     => 'blog_post_pro_options',
                'description' => $blog_post_features_info,
                'priority' => 21
            )
        )
    );
    

