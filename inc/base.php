<?php

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