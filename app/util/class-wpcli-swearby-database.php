<?php
/**
 * WP_CLI_Start Class file
 *
 * @package    WordPress
 * @subpackage sample_structured_export
 */

namespace Phoenix\Sample_Structured_Export\Util;

if ( ! defined( '\WP_CLI' ) ) {
	return;
}
/**
 * Just a few sample commands to learn how WP-CLI works
 */
class Sample_Database extends \WP_CLI_Command {



	/**
	 * Display version information.
	 * ## OPTIONS
	 *
	 * [--wponly]
	 * : Shows only WP version info, omitting the plugin one.
	 *
	 * ## EXAMPLE
	 *
	 *     wp sample-database sample_version1
	 */
	function sample_version1( $args, $assoc_args ) {
		if ( ! empty( $assoc_args['wponly'] ) ) {
			\WP_CLI::success( 'Bingo, you are a wiener!!' );
			\WP_CLI::line( 'Version of WordPress is ' . get_bloginfo( 'version' ) . '.' );
		} else {
			\WP_CLI::line( 'Version of this plugin is 0.1-beta, and version of WordPress ' . get_bloginfo( 'version' ) . '.' );
		}
	}


	/**
	 * Display the number of plugins.
	 *
	 * ## EXAMPLE
	 *
	 *     wp sample-database sample_plugins1
	 */
	function sample_plugins1() {
		\WP_CLI::success( 'Bingo, you are a wiener!!' );
		\WP_CLI::line( 'There are a total of ' . sizeof( get_plugins() ) . ' plugins on this site.' );
	}
}

\WP_CLI::add_command( 'sample-database', Sample_Database::class );
