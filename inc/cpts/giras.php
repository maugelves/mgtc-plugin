<?php

namespace MGTC\cpts;

/**
 * Class Giras
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Giras
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'create_cpt_giras' ), 10 );

	}



	/**
	 * This function creates the CPT Giras
	 */
	public function create_cpt_giras() {

		$args = array(
			'label'                 => __( 'Gira', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Gira', 'mgtc' ),
				'singular'              => __( 'Gira', 'mgtc' ),
				'add_new'               => __( 'Agregar una fecha', 'mgtc' ),
				'add_new_item'          => __( 'Agregar una fecha', 'mgtc' ),
				'edit_item'             => __( 'Editar fecha', 'mgtc' ),
				'new_item'              => __( 'Nueva fecha', 'mgtc' ),
				'view_item'             => __( 'Ver fecha', 'mgtc' ),
				'view_items'            => __( 'Ver fechas', 'mgtc' ),
				'search_items'          => __( 'Buscar fechas', 'mgtc' ),
				'not_found'             => __( 'No se encontraron fechas', 'mgtc' ),
				'not_found_in_trash'    => __( 'No hay registros eliminados', 'mgtc' ),
				'all_items'             => __( 'Todas las fechas', 'mgtc' ),
				'archives'              => __( 'Gira', 'mgtc ' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 12,
			'menu_icon'             => 'dashicons-tickets-alt',
			'supports'              => array(),
			'has_archive'           => true
		);


		register_post_type( 'gira', $args );

	}


}
$gira = new Giras();