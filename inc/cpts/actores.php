<?php
namespace MGTC\cpts;

/**
 * Class Personal
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Actor
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'create_cpt_actores' ), 10 );

		add_filter( 'enter_title_here', array( $this, 'change_title_placeholder' ) );

	}

	/**
	 *  Change the Post Title placeholder
	 *  @param $title
	 *
	 *  @return string
	 */
	public function change_title_placeholder( $title ) {
		$screen = get_current_screen();

		if  ( 'actor' == $screen->post_type )
			$title = __('Introduce el nombre completo', 'mgtc' );


		return $title;
	}



	/**
	 * This function creates the CPT Actores
	 */
	public function create_cpt_actores() {

		$args = array(
			'label'                 => __( 'Actores', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Actores', 'mgtc' ),
				'singular'              => __( 'Actor', 'mgtc' ),
				'add_new'               => __( 'Agregar un actor', 'mgtc' ),
				'add_new_item'          => __( 'Agregar un actor', 'mgtc' ),
				'edit_item'             => __( 'Editar actor', 'mgtc' ),
				'new_item'              => __( 'Nuevo actor', 'mgtc' ),
				'view_item'             => __( 'Ver actor', 'mgtc' ),
				'view_items'            => __( 'Ver actores', 'mgtc' ),
				'search_items'          => __( 'Buscar actores', 'mgtc' ),
				'not_found'             => __( 'No se encontraron actores', 'mgtc' ),
				'not_found_in_trash'    => __( 'No hay registros eliminados', 'mgtc' ),
				'all_items'             => __( 'Todas los actores', 'mgtc' ),
				'archives'              => __( 'Actores', 'mgtc ' ),
				'featured_image'        => __( 'Foto principal'),
				'set_featured_image'    => __( 'Establecer la foto principal'),
				'remove_featured_image' => __( 'Quitar la foto principal' ),
				'use_featured_image'    => __( 'Usar esta foto como principal' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 12,
			'menu_icon'             => 'dashicons-universal-access',
			'supports'              => array( 'title', 'thumbnail' ),
			'has_archive'           => true
		);


		register_post_type( 'actor', $args );

	}

}
$actor = new Actor();