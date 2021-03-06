<?php
/**
 * Theme Name: Cresstec
 * Description: Cresstec
 * Author: Jasen Peterson <jasen@ellcreative.com>
 * Author URI:
 * Version: 1.0
 * Text Domain: cresstec
 *
 * @package Cresstec
 */

namespace Cresstec;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * Theme version global
 *
 * @since 2.0.0
 * @package Cresstec
 */
define( 'CRESS_THEME_VERSION', '1.0.0' );

/**
 * Theme name global
 *
 * @since 2.0.0
 * @package Cresstec
 */
define( 'CRESS_THEME_NAME', 'cresstec' );

/**
 * Global image path
 *
 * @since 2.0.0
 * @package Cresstec
 */
define( 'CRESS_IMAGE_URL', get_template_directory_uri() . '/skin/public/images/' );

/**
 * Include the autoloader so we can dynamically include the rest of the classes.
 *
 * @since 2.1.0 Using Composer based autloader.
 * @since 2.0.0
 * @package Cresstec
 */
require WP_CONTENT_DIR . '/../vendor/autoload.php';

/**
 * Begins execution of the theme.
 *
 * Since everything within the theme is registered via hooks,
 * then kicking off the theme from this point in the file does
 * not affect the page life cycle.
 *
 * @since 2.0.0
 */
function init_theme() {
  $plugin = new Includes\Main();
  $plugin->run();
}

init_theme();

// ACF Options
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}