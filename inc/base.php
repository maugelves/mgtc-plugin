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

	public static function activePlugin(){

		// Create Roles taxonomy if not exists
		Personal::create_roles_taxonomy();

		if( !term_exists('Director', 'roles' ) )
			wp_insert_term('Director', 'roles');

		if( !term_exists('Actor', 'roles' ) )
			wp_insert_term('Actor', 'roles');

		if( !term_exists('Producción', 'roles' ) )
			wp_insert_term('Producción', 'roles');

		if( !term_exists('Distribución', 'roles' ) )
			wp_insert_term('Distribución', 'roles');

	}


}

$MGTC_plugin_base = new MGTC_Base();