<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://parstools.com/
 * @since             1.0.0
 * @package           Parstools_Like_Dislike_Voting
 *
 * @wordpress-plugin
 * Plugin Name:       Parstools like dislike voting
 * Plugin URI:        http://parstools.com/?p=4714
 * Description:       Add fancy voting widget to any type of post and page.
 * Version:           1.0.0
 * Author:            Parstools
 * Author URI:        http://parstools.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       parstools-like-dislike-voting
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-parstools-like-dislike-voting-activator.php
 *
function activate_parstools_like_dislike_voting() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-parstools-like-dislike-voting-activator.php';
	Parstools_Like_Dislike_Voting_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-parstools-like-dislike-voting-deactivator.php
 *
function deactivate_parstools_like_dislike_voting() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-parstools-like-dislike-voting-deactivator.php';
	Parstools_Like_Dislike_Voting_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_parstools_like_dislike_voting' );
register_deactivation_hook( __FILE__, 'deactivate_parstools_like_dislike_voting' );
*/
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-parstools-like-dislike-voting.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_parstools_like_dislike_voting() {

	$plugin = new Parstools_Like_Dislike_Voting();
	$plugin->run();

}
run_parstools_like_dislike_voting();
