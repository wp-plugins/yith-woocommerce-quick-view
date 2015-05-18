<?php
/**
 * Main class
 *
 * @author Yithemes
 * @package YITH WooCommerce Quick View
 * @version 1.0.0
 */


if ( ! defined( 'YITH_WCQV' ) ) {
	exit;
} // Exit if accessed directly

if ( ! class_exists( 'YITH_WCQV' ) ) {
	/**
	 * YITH WooCommerce Quick View
	 *
	 * @since 1.0.0
	 */
	class YITH_WCQV {

		/**
		 * Single instance of the class
		 *
		 * @var \YITH_WCQV
		 * @since 1.0.0
		 */
		protected static $instance;

		/**
		 * Plugin version
		 *
		 * @var string
		 * @since 1.0.0
		 */
		public $version = YITH_WCQV_VERSION;

		/**
		 * Plugin object
		 *
		 * @var string
		 * @since 1.0.0
		 */
		public $obj = null;

		/**
		 * Returns single instance of the class
		 *
		 * @return \YITH_WCQV
		 * @since 1.0.0
		 */
		public static function get_instance(){
			if( is_null( self::$instance ) ){
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * @return mixed| YITH_WCQV_Admin | YITH_WCQV_Frontend
		 * @since 1.0.0
		 */
		public function __construct() {

			// Load Plugin Framework
			add_action( 'after_setup_theme', array( $this, 'plugin_fw_loader' ), 1 );

			// Class admin
			if ( is_admin() ) {
				YITH_WCQV_Admin();
			}

			// Class frontend
			$enable             = get_option( 'yith-wcqv-enable' ) == 'yes' ? true : false;
			$enable_on_mobile   = get_option( 'yith-wcqv-enable-mobile' ) ==  'yes' ? true : false;

			// Class frontend
			if( ( ! wp_is_mobile() && $enable ) || ( wp_is_mobile() && $enable_on_mobile && $enable ) ) {
				YITH_WCQV_Frontend();
			}
		}


		/**
		 * Load Plugin Framework
		 *
		 * @since  1.0
		 * @access public
		 * @return void
		 * @author Andrea Grillo <andrea.grillo@yithemes.com>
		 */
		public function plugin_fw_loader() {

			if ( ! defined( 'YIT' ) || ! defined( 'YIT_CORE_PLUGIN' ) ) {
				require_once( 'plugin-fw/yit-plugin.php' );
			}

		}
	}
}

/**
 * Unique access to instance of YITH_WCQV class
 *
 * @return \YITH_WCQV
 * @since 1.0.0
 */
function YITH_WCQV(){
	return YITH_WCQV::get_instance();
}