<?php
/**
 * Plugin Name:       Starter Blog Templates For Faith Blog
 * Plugin URI:        https://theimran.com/themes/wordpress-theme/blog-starter-pro-personal-blog-wordpress-theme/
 * Description:       This is a dependency plugin for faith blog WordPress theme. by installing this plugin you will able to import demo data of Faith Blog WordPress theme. Also you will be able to edit footer copyright text of faith blog WordPress theme. this plugin has included about me widget.
 * Version:           1.0.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Theimran WordPress Shop
 * Author URI:        https://theimran.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       stffb
 */

if (!defined('STFFB_TEXT_DOMAIN')) {
	define('STFFB_TEXT_DOMAIN', 'stffb');
}
if (!defined('STFFB_PLUGIN_URL')) {
	define('STFFB_PLUGIN_URL', plugin_dir_url( __file__ ));
}
if (!defined('STFFB_PLUGIN_PATH')) {
	define('STFFB_PLUGIN_PATH', plugin_dir_path( __file__ ));
}

if (!class_exists('Stffb_Init')) :

	final class Stffb_Init {

		function __construct()
		{
			add_filter('pt-ocdi/import_files', [$this, 'stffb_ocdi_import_files']);
			add_action( 'pt-ocdi/after_import', [$this, 'stffb_code_ocdi_after_import_setup'] );
			require STFFB_PLUGIN_PATH . 'widgets/about-me.php';
			if ('faith-blog' == get_stylesheet()) {
				require STFFB_PLUGIN_PATH . 'inc/faith-customizer.php';
			}
		}
		public function stffb_ocdi_import_files(){
		    return array(

			    array(
			      'import_file_name'           => esc_html('Standard Demo', 'stffb'),
			      'import_file_url'            => STFFB_PLUGIN_URL . '/demo-data/faith-content.xml',
			      'import_widget_file_url'     => STFFB_PLUGIN_URL . '/demo-data/faith-widgets.wie',
			      'import_customizer_file_url'     => STFFB_PLUGIN_URL . '/demo-data/faith-options.dat',
			      'import_preview_image_url'   =>  get_theme_file_uri('screenshot.png'),
			    ),

			    // Comming Soon

			    array(
			      'import_file_name'           => esc_html('Comming Soon...', 'stffb'),
			      'import_file_url'            => '',
			      'import_widget_file_url'     => '',
			      'import_customizer_file_url' => '',
			      'import_preview_image_url'   =>  STFFB_PLUGIN_URL . '/demo-data/screenshots/coming-soon.jpg',
			    ),

		    );
		}

		public function stffb_code_ocdi_after_import_setup() {

			// Assign menus to their locations.
			$main_menu 	= get_term_by('name', 'Main Menu', 'nav_menu');

			set_theme_mod( 'nav_menu_locations' , array(
				  'main-menu' 	=> $main_menu->term_id,
				 )
			);

		    global $wp_rewrite;
		    $wp_rewrite->set_permalink_structure('/%postname%/');
		    $wp_rewrite->flush_rules();

		}

	}

$stffb = new Stffb_Init;
endif;


add_action('admin_head', function () {
    ?>
    <script>
        jQuery(document).ready(function($) {
            jQuery('button.ocdi__gl-item-button[value="1"]').remove();
        });
    </script>
    <?php
});
