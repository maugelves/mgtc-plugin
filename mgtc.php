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
*   ACTIVATE/DEACTIVE
*   =================================================================================================
*/

register_activation_hook(__FILE__ , 'create_categories_terms' );
/**
 * Create by default "Actor, Director, Producción, Comunicación" terms
 */
function create_categories_terms() {

	if( !term_exists('Director', 'category' ) )
		wp_insert_term('Director', 'category');

	if( !term_exists('Actor', 'category' ) )
		wp_insert_term('Actor', 'category');

	if( !term_exists('Producción', 'category' ) )
		wp_insert_term('Producción', 'category');

}