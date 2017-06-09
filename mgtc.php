<?php
/*
Plugin Name: MGTC - Plugin WordPress para Compañías de Teatro
Version: 1.0.1
Description: Con este plugin podrás administrar fácilmente obras, personal, teatros, giras y publicaciones de prensa.
Author: Mauricio Gelves <mg@maugelves.com>
Author URI: https://maugelves.com
*/


define( 'MGTC_PATH', dirname( __FILE__ ) );
define( 'MGTC_FOLDER', basename( MGTC_PATH ) );
define( 'MGTC_URL', plugins_url() . '/' . MGTC_FOLDER );


class MGTC_Base
{

	public function __construct()
	{
		$this->loadPluginTextDomain();
		$this->registerScripts();
		$this->removePluginUpdates();

	}

	public function loadPluginTextDomain() {
		add_action( 'plugins_loaded', array( $this, 'loadPluginTextDomainCallBack' ) );
	}
	public function loadPluginTextDomainCallBack() {
		load_plugin_textdomain( 'mgtc', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}

	function registerScripts(){
		add_action( 'wp_enqueue_scripts', array( $this, 'registerJSScripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'registerCSSScripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'registerJSadminScripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'registerCSSadminScripts' ) );
	}

	public function registerJSScripts( $hook ) {
		wp_enqueue_script( 'jquery' );
	}

	public function registerCSSScripts( $hook ) {
		// Enqueue Style
		//wp_enqueue_style('attendees-application-css', WPH_ATTENDEES_URL.'/assets/css/style.css', array(), false);
	}

	public function registerJSadminScripts( $hook ) {
	}

	public function registerCSSadminScripts( $hook ) {
	}

	function removePluginUpdates(){
		add_filter('site_transient_update_plugins', array( $this, 'removePluginUpdatesCallback' ), 10, 1);
	}
	function removePluginUpdatesCallback($value) {
		if (!empty($value) && is_object($value) && !isset($value->response[ plugin_basename(__FILE__) ])){
			unset($value->response[ plugin_basename(__FILE__) ]);
		}
		return $value;
	}

}

$MGTC_plugin_base = new MGTC_Base();


/*
*   =================================================================================================
*   CUSTOM POST TYPES
*   Include all the Custom Post Types you need in the 'includes/cpts/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/inc/cpts/*.php") as $filename)
	include $filename;




/*
*   =================================================================================================
*   ADVANCED CUSTOM FIELDS
*   Include all the Advanced Custom Fields you need in the 'includes/acfs/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/inc/acfs/*.php") as $filename)
	include $filename;