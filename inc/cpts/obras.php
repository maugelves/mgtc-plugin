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
				'featured_image'        => __( 'Poster de la obra', 'mgtc' ),
				'set_featured_image'    => __( 'Establecer el poster', 'mgtc' ),
				'remove_featured_image' => __( 'Quitar el poster', 'mgtc' ),
				'use_featured_image'    => __( 'Usar este poster como principal', 'mgtc' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 12,
			'menu_icon'             => MGTC_URL . "/assets/images/theatre-icon.png",
			'supports'              => array( 'title', 'thumbnail' ),
			'has_archive'           => true
		);


		register_post_type( 'obra', $args );

	}



	/**
	 * Customized messages for Gira Custom Post Type
	 *
	 * @param   array $messages Default messages.
	 * @return  array 			Returns an array with the new messages
	 */
	public function updated_messages_cb( $messages ) {

		$messages['obra'] = array(
			0  => '', // Unused. Messages start at index 1.
			1 => __( 'Obra actualizada.', 'mgsp' ),
			4 => __( 'Obra actualizada.', 'mgsp' ),
			/* translators: %s: date and time of the revision */
			5 => isset( $_GET['revision']) ? sprintf( __( 'Obra recuperada de la revisión %s.', 'mgsp' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( 'Obra publicada.', 'mgsp' ),
			7 => __( 'Obra guardada.', 'mgsp' ),
			9 => __('Obra programada', 'mgsp' ),
			10 => __( 'Borrador de obra actualizado.', 'mgsp' ),
		);

		return $messages;
	}

}

$obras = new Obras();