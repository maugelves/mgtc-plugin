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

		add_filter( 'post_updated_messages', array($this, 'updated_messages_cb' ) );

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
				'featured_image'        => __( 'Foto principal', 'mgtc' ),
				'set_featured_image'    => __( 'Establecer la foto principal', 'mgtc' ),
				'remove_featured_image' => __( 'Quitar la foto principal', 'mgtc' ),
				'use_featured_image'    => __( 'Usar esta foto como principal', 'mgtc' )

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




	/**
	 * Customized messages for Actor Custom Post Type
	 *
	 * @param   array $messages Default messages.
	 * @return  array 			Returns an array with the new messages
	 */
	public function updated_messages_cb( $messages ) {

		$messages['actor'] = array(
			0  => '', // Unused. Messages start at index 1.
			1 => __( 'Actor actualizado.', 'mgsp' ),
			4 => __( 'Actor actualizado.', 'mgsp' ),
			/* translators: %s: date and time of the revision */
			5 => isset( $_GET['revision']) ? sprintf( __( 'Actor recuperado de la revisión %s.', 'mgsp' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( 'Actor publicado.', 'mgsp' ),
			7 => __( 'Actor guardado.', 'mgsp' ),
			9 => __('Actor programado', 'mgsp' ),
			10 => __( 'Borrador de actor actualizado.', 'mgsp' ),
		);

		return $messages;
	}

}
$actor = new Actor();