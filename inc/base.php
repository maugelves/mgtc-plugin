<?php

class MGTC_Base
{

	public function __construct()
	{
		add_action( 'plugins_loaded', array( $this, 'loadPluginTextDomain' ) );
		$this->registerScripts();

	}

	public function loadPluginTextDomain() {
		load_plugin_textdomain( 'mgtc', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}

	function registerScripts(){
		add_action( 'wp_enqueue_scripts', array( $this, 'registerJSScripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'registerCSSScripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'registerJSadminScripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'registerCSSadminScripts' ) );
	}

	public function registerJSScripts( $hook ) {

	}

	public function registerCSSScripts( $hook ) {
	}

	public function registerJSadminScripts( $hook ) {
	}

	public function registerCSSadminScripts( $hook ) {
	}

	/**
	 * Creates Rolex taxonomy terms
	 */
	public static function create_roles_terms(){

		// Create Roles taxonomy if not exists
		Equipo::create_roles_taxonomy();

		if( !term_exists('Director', 'roles' ) )
			wp_insert_term('Director', 'roles');

		if( !term_exists('Producción', 'roles' ) )
			wp_insert_term('Producción', 'roles');

		if( !term_exists('Distribución', 'roles' ) )
			wp_insert_term('Distribución', 'roles');

		if( !term_exists('Prensa', 'roles' ) )
			wp_insert_term('Prensa', 'roles');

	}



	/**
	 * Check the plugin dependencies
	 */
	public static function check_plugin_dependencies() {
		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(

			// This is an example of how to include a plugin from an arbitrary external source in your theme.
			array(
				'name'         => 'Advanced Custom Fields PRO', // The plugin name.
				'slug'         => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
				'required'     => true, // If false, the plugin is only 'recommended' instead of required.
				'external_url' => 'https://www.advancedcustomfields.com/pro/', // If set, overrides default API URL and points to an external URL.
			),
		);

		tgmpa( $plugins );

	}



	/**
	 * Creates the Giras page
	 */
	public static function create_giras_page() {
		// ========================================================
		// Create a "Quienes Somos" WordPress page
		$giras = get_page_by_path('giras' );

		// Create the page if it doesn't exist
		if( is_null ( $giras ) ):

			$postarr = array(

				'post_name'     => 'giras',
				'post_title'    => "Giras",
				'post_status'   => 'publish',
				'post_type'     => 'page'

			);

			wp_insert_post( $postarr );

		endif;
	}


}

$MGTC_plugin_base = new MGTC_Base();