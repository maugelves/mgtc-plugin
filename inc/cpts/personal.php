<?php


/**
 * Class Personal
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Personal
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'create_cpt_personal' ), 10 );
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
	public function create_cpt_personal() {

		$args = array(
			'label'                 => __( 'Personal', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Personal', 'mgtc' ),
				'singular'              => __( 'Personal', 'mgtc' ),
				'add_new'               => __( 'Agregar una persona', 'mgtc' ),
				'add_new_item'          => __( 'Agregar una persona', 'mgtc' ),
				'edit_item'             => __( 'Editar persona', 'mgtc' ),
				'new_item'              => __( 'Nueva persona', 'mgtc' ),
				'view_item'             => __( 'Ver persona', 'mgtc' ),
				'view_items'            => __( 'Ver personas', 'mgtc' ),
				'search_items'          => __( 'Buscar personas', 'mgtc' ),
				'not_found'             => __( 'No se encontraron personas', 'mgtc' ),
				'not_found_in_trash'    => __( 'No hay registros eliminados', 'mgtc' ),
				'all_items'             => __( 'Todas las personas', 'mgtc' ),
				'archives'              => __( 'Personas', 'mgtc ' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 12,
			'menu_icon'             => 'dashicons-universal-access',
			'supports'              => array( 'title' ),
			'taxonomies'            => array( 'category' ),
			'has_archive'           => true
		);


		register_post_type( 'personal', $args );

	}

}
$personal = new Personal();
