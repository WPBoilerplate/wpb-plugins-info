<?php
/**
 * BuddyBoss Compatibility Integration Class.
 *
 * @since BuddyBoss 1.1.5
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Check if the class does not exits then only allow the file to add
 */
if( ! class_exists( 'WPBoilerplate_ Register_Blocks' ) ) {
	/**
	 * Fired during plugin licences.
	 *
	 * This class defines all code necessary to run during the plugin's licences and update.
	 *
	 * @since      0.0.1
	 * @package    WPBoilerplate_ Register_Blocks
	 * @subpackage WPBoilerplate_ Register_Blocks/includes
	 * @author     WPBoilerplate <contact@acrosswp.com>
	 */
	class WPBoilerplate_ Register_Blocks {

		/**
		 * The single instance of the class.
		 *
		 * @var WPBoilerplate_ Register_Blocks
		 * @since 0.0.1
		 */
		protected static $_instance = null;

		/**
		 * Main WPBoilerplate_ Register_Blocks Instance.
		 *
		 * Ensures only one instance of WooCommerce is loaded or can be loaded.
		 *
		 * @since 0.0.1
		 * @static
		 * @see WPBoilerplate_ Register_Blocks()
		 * @return WPBoilerplate_ Register_Blocks - Main instance.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		/**
		 * Get the vendor path of composer
		 * 
		 * @return string Path of the vendor dir
		 */
		function get_vendor_path() {
			return \SzepeViktor\Composer\PackagePath::getVendorPath();	
		}

		/**
		 * Get the plugin path
		 * 
		 * @return string Path of the plugins
		 */
		function get_plugin_path() {
			return dirname( $this->get_vendor_path() );
		}

		/**
		 * Get the plugin path
		 * 
		 * @return string Path of the plugins
		 */
		function get_full_plugin_path() {
			return $this->get_plugin_path() . '/' . $this->get_plugin_file_name() . '.php';
		}

		/**
		 * Get the plugin path
		 * 
		 * @return string Path of the plugins
		 */
		function get_plugin_file_name() {
			return basename( $this->get_plugin_path() );
		}

		/**
		 * Get the plugin path
		 * 
		 * @return string Path of the plugins
		 */
		function get_block_path() {
			return $this->get_plugin_path() . '/build';
		}
	}

	WPBoilerplate_ Register_Blocks::instance();
}