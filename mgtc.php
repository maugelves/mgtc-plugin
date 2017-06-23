<?php
/*
Plugin Name: MGTC - Plugin WordPress para Compañías de Teatro
Version: 1.0.1
Description: Con este plugin podrás administrar fácilmente obras, personal, teatros, giras y publicaciones de prensa.
Author: Mauricio Gelves <mg@maugelves.com>
Author URI: https://maugelves.com
*/

// CONSTANTS
define( 'MGTC_PATH', dirname( __FILE__ ) );
define( 'MGTC_FOLDER', basename( MGTC_PATH ) );
define( 'MGTC_URL', plugins_url() . '/' . MGTC_FOLDER );


/*
*   =================================================================================================
*   BASE CLASS
*   =================================================================================================
*/
include (MGTC_PATH . "/inc/base.php");


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




/*
*   =================================================================================================
*   CUSTOMIZER
*   Include all the files to include customizer configuration
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/inc/customizer/*.php") as $filename)
	include $filename;





/*
*   =================================================================================================
*   ACTIVATE PLUGIN FUNCTIONS
*   =================================================================================================
*/
register_activation_hook( __FILE__, array( 'MGTC_Base', 'create_roles_terms' ) );
register_activation_hook( __FILE__, array( 'MGTC_Base', 'create_giras_page' ) );