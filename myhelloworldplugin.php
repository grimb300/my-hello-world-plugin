<?php
/**
 * Plugin Name: My Hello World Plugin
 * Plugin URI: https://candolatitude.com/
 * Description: Simple "Hello World" added to the top of the post content
 * Version: 1.0
 * Requires at least: 5.0
 * Requires PHP: 7.0
 * Author: Bob Grim
 * Author URI: https://candolatitude.com
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: myhelloworldplugin
 * Domain Path: /languages
 * 
 * My Hello World Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * 
 * My Hello World Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with My Hello World Plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

/**
 * Don't allow direct access
 */
defined( 'ABSPATH' ) or die( 'What did I tell you about playing with yourself?!?!?!' );

/**
 * Activate the plugin
 */
function myhelloworldplugin_activate() {
  error_log( 'My Hello World Plugin activated!' );
}
register_activation_hook( __FILE__, 'myhelloworldplugin_activate' );

/**
 * Deactivate the plugin
 */
function myhelloworldplugin_deactivate() {
  error_log( 'My Hello World Plugin deactivated!' );
}
register_deactivation_hook( __FILE__, 'myhelloworldplugin_deactivate' );

/**
 * Uninstall the plugin
 */
function myhelloworldplugin_uninstall() {
  error_log( 'My Hello World Plugin uninstalled!' );
}
register_uninstall_hook( __FILE__, 'myhelloworldplugin_uninstall' );

/**
 * Add the "Hello World!" message
 */
add_filter( 'the_content', 'myhelloworldplugin_prepend_content', 10 );
function myhelloworldplugin_prepend_content( $content ) {
  return '<h3>Hello World!</h3>' . $content;
}