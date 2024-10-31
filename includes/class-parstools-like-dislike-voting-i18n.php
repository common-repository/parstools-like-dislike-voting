<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://parstools.com/
 * @since      1.0.0
 *
 * @package    Parstools_Like_Dislike_Voting
 * @subpackage Parstools_Like_Dislike_Voting/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Parstools_Like_Dislike_Voting
 * @subpackage Parstools_Like_Dislike_Voting/includes
 * @author     Parstools <parsgateco@gmail.com>
 */
class Parstools_Like_Dislike_Voting_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'parstools-like-dislike-voting',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
