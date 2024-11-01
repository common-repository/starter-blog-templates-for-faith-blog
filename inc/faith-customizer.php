<?php
// Customize Locked Options
add_action( 'customize_register', 'stffb_customize_name_panel_section' );
if ( ! function_exists( 'stffb_customize_name_panel_section' ) ) {
	
	function stffb_customize_name_panel_section( $wp_customize ) {
		class Stffb_Customize_Control_Separetor extends WP_Customize_Control {
		    /**
		     * The type of customize control being rendered.
		     */
		    public $type = 'sepearetor';
		    /**
		     * Displays the multiple select on the customize screen.
		     */
		    public function render_content() {
		    ?>
		    <hr>
		        <h4 style="text-align: center; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h4>
		    <hr>
		    <?php }
		}
	if( ! class_exists( 'Stffb_Note_Control' ) ){

	class Stffb_Note_Control extends WP_Customize_Control {
		
			public function render_content(){ ?>
	    	    <span class="customize-control-title">
	    			<?php echo wp_kses_post( $this->label ); ?>
	    		</span>
	    
	    		<?php if( $this->description ){ ?>
	    			<span class="description customize-control-description">
	    			<?php echo wp_kses_post( $this->description ); ?>
	    			</span>
	    		<?php }
	        }
		}
	}
	function stffb_customize_control_separetor($wp_customize, $sepearetor_id_name, $sepearetor_name, $section_name, $priority = 20){
		$wp_customize->add_setting(
			$sepearetor_id_name,
			array(
				'default'            => true,
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new Stffb_Customize_Control_Separetor($wp_customize,
			$sepearetor_id_name,
			array(
				'label'       => $sepearetor_name,
				'section'     => $section_name,
				'type'        => 'sepearetor',
				'priority' => $priority
			)
		));
	}
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/color-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/header-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/blogpage-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/errorpage-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/preloader-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/featured-option.php';
		require STFFB_PLUGIN_PATH . 'inc/locked-theme-options/typography-option.php';
	}
}
