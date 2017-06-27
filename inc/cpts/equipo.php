<?php


/**
 * Class Equipo
 *
 * @author  Mauricio Gelves <mg@maugelves.com>
 * @since   1.0.1
 */
class Equipo
{
	/**
	 * Personal constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'create_cpt_equipo' ), 10 );

		if( !taxonomy_exists( 'roles' ) )
			add_action( 'init', array( $this, 'create_roles_taxonomy' ), 11 );

		register_activation_hook( MGTC_PATH, array( 'Equipo', 'create_roles_taxonomy_and_add_terms' ) );

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

		if  ( 'equipo' == $screen->post_type )
			$title = __('Introduce el nombre completo', 'mgtc' );


		return $title;
	}



	/**
	 * This function creates the CPT Equipo for Directors
	 * and other employees
	 */
	public function create_cpt_equipo() {

		$args = array(
			'label'                 => __( 'Equipo', 'mgtc' ),
			'labels'                => array (

				// Labels values
				'name'                  => __( 'Equipo', 'mgtc' ),
				'singular'              => __( 'Equipo', 'mgtc' ),
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
				'archives'              => __( 'Personas', 'mgtc ' ),
				'featured_image'        => __( 'Foto principal', 'mgtc' ),
				'set_featured_image'    => __( 'Establecer la foto principal', 'mgtc' ),
				'remove_featured_image' => __( 'Quitar la foto principal', 'mgtc' ),
				'use_featured_image'    => __( 'Usar esta foto como principal', 'mgtc' )

			),
			'public'                => true,
			'exclude_from_search'   => true,
			'show_ui'               => true,
			'menu_position'         => 13,
			'menu_icon'             => 'dashicons-universal-access',
			'supports'              => array( 'title', 'thumbnail' ),
			'has_archive'           => true
		);


		register_post_type( 'equipo', $args );

	}


	/**
	 * Creates the Custom Taxonomy "Roles"
	 */
	public static function create_roles_taxonomy() {

		// Check if the taxonoy already exists
		if ( taxonomy_exists('roles') )
			exit;


		$args = array(
			'labels'        => array (
				'name'                          => __( 'Roles', 'mgtc' ),
				'singular_name'                 => __( 'Rol', 'mgtc' ),
				'all_items'                     => __( 'Todos los roles', 'mgtc' ),
				'edit_item'                     => __( 'Editar rol', 'mgtc' ),
				'view_item'                     => __( 'Ver rol', 'mgtc' ),
				'update_item'                   => __( 'Actualizar rol', 'mgtc' ),
				'add_new_item'                  => __( 'Agregar nuevo rol', 'mgtc' ),
				'new_item_name'                 => __( 'Nuevo nombre de rol', 'mgtc' ),
				'parent_item'                   => __( 'Rol padre', 'mgtc' ),
				'search_items'                  => __( 'Buscar roles', 'mgtc' ),
				'popular_items'                 => __( 'Roles populares', 'mgtc' ),
				'separate_items_with_commas'    => __( 'Separa los roles con comas', 'mgtc' ),
				'add_or_remove_items'           => __( 'Agregar o quitar roles', 'mgtc' ),
				'not_found'                     => __( 'No hay roles cargados', 'mgtc' )
			),
			'hierarchical'  => true
		);

		register_taxonomy( 'roles', array( 'equipo' ), $args );

	}

}
$equipo = new Equipo();