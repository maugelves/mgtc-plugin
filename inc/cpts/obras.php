<?php


/**
 * Class Obras
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Obras
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'create_cpt_obras' ), 10 );
		add_filter( 'enter_title_here', array( $this, 'change_title_placeholder' ) );
	}

	/**
	 *  Change the Post Title placeholder
	 *  @param $title
	 *
	 *  @return string|void
	 */
	public function change_title_placeholder( $title ) {
		$screen = get_current_screen();

		if  ( 'personal' == $screen->post_type )
			$title = __('Introduce el nombre completo', 'mgtc' );


		return $title;
	}


	/**
	 * This function creates the CPT Personal for Actors, Directors
	 * and other employees
	 */
	public function create_cpt_obras() {

		$args = array(
			'label'                 => __( 'Obras', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Obras', 'mgtc' ),
				'singular'              => __( 'Obra', 'mgtc' ),
				'add_new'               => __( 'Agregar una obra', 'mgtc' ),
				'add_new_item'          => __( 'Agregar una obra', 'mgtc' ),
				'edit_item'             => __( 'Editar obra', 'mgtc' ),
				'new_item'              => __( 'Nueva obra', 'mgtc' ),
				'view_item'             => __( 'Ver obra', 'mgtc' ),
				'view_items'            => __( 'Ver obras', 'mgtc' ),
				'search_items'          => __( 'Buscar obras', 'mgtc' ),
				'not_found'             => __( 'No se encontraron obras', 'mgtc' ),
				'not_found_in_trash'    => __( 'No hay registros eliminados', 'mgtc' ),
				'all_items'             => __( 'Todas las obras', 'mgtc' ),
				'archives'              => __( 'Obras', 'mgtc ' ),
				'featured_image'        => __( 'Poster de la obra'),
				'set_featured_image'    => __( 'Establecer el poster'),
				'remove_featured_image' => __( 'Quitar el poster' ),
				'use_featured_image'    => __( 'Usar este poster como principal' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 12,
			'menu_icon'             => MGTC_URL . "/assets/images/theatre-icon.png",
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'has_archive'           => true
		);


		register_post_type( 'obras', $args );

	}

}

$obras = new Obras();