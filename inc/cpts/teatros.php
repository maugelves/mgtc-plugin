<?php

namespace MGTC\cpts;
/**
 * Class Teatros
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Teatros
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'create_cpt_teatros' ), 10 );

		add_filter( 'enter_title_here', array( $this, 'change_title_placeholder' ) );

		add_filter( 'post_updated_messages', array($this, 'updated_messages_cb' ) );

	}

	/**
	 *  Change the Post Title placeholder
	 *  @param $title
	 *
	 *  @return string|void
	 */
	public function change_title_placeholder( $title ) {
		$screen = get_current_screen();

		if  ( 'teatro' == $screen->post_type )
			$title = __('Introduce el nombre del teatro', 'mgtc' );

		return $title;
	}



	/**
	 * This function creates the CPT Teatros
	 */
	public function create_cpt_teatros() {

		$args = array(
			'exclude_from_search'   => true,
			'label'                 => __( 'Teatros', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Teatros', 'mgtc' ),
				'singular'              => __( 'Teatro', 'mgtc' ),
				'add_new'               => __( 'Agregar un teatro', 'mgtc' ),
				'add_new_item'          => __( 'Agregar un teatro', 'mgtc' ),
				'edit_item'             => __( 'Editar el teatro', 'mgtc' ),
				'new_item'              => __( 'Nuevo teatro', 'mgtc' ),
				'view_item'             => __( 'Ver teatro', 'mgtc' ),
				'view_items'            => __( 'Ver teatros', 'mgtc' ),
				'search_items'          => __( 'Buscar teatros', 'mgtc' ),
				'not_found'             => __( 'No se encontraron teatros', 'mgtc' ),
				'not_found_in_trash'    => __( 'No hay teatros eliminados', 'mgtc' ),
				'all_items'             => __( 'Todos los teatros', 'mgtc' ),
				'archives'              => __( 'Teatros', 'mgtc ' ),
				'featured_image'        => __( 'Foto del teatro', 'mgtc' ),
				'set_featured_image'    => __( 'Establecer la foto', 'mgtc' ),
				'remove_featured_image' => __( 'Quitar la foto', 'mgtc' ),
				'use_featured_image'    => __( 'Usar esta foto', 'mgtc' )

			),
			'public'                => true,
			'show_ui'               => true,
			'menu_position'         => 13,
			'menu_icon'             => 'dashicons-location-alt',
			'supports'              => array( 'title', 'thumbnail' ),
			'has_archive'           => true,
			'publicly_queryable'    => false
		);


		register_post_type( 'teatro', $args );

	}




	/**
	 * Customized messages for Gira Custom Post Type
	 *
	 * @param   array $messages Default messages.
	 * @return  array 			Returns an array with the new messages
	 */
	public function updated_messages_cb( $messages ) {

		$messages['teatro'] = array(
			0  => '', // Unused. Messages start at index 1.
			1 => __( 'Teatro actualizado.', 'mgsp' ),
			4 => __( 'Teatro actualizado.', 'mgsp' ),
			/* translators: %s: date and time of the revision */
			5 => isset( $_GET['revision']) ? sprintf( __( 'Teatro recuperado de la revisión %s.', 'mgsp' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( 'Teatro publicado.', 'mgsp' ),
			7 => __( 'Teatro guardado.', 'mgsp' ),
			9 => __('Teatro programado', 'mgsp' ),
			10 => __( 'Borrador de teatro actualizado.', 'mgsp' ),
		);

		return $messages;
	}

}
$teatros = new Teatros();