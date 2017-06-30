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
		add_filter( 'post_updated_messages', array( $this, 'updated_messages_cb' ) );
		add_action( 'manage_posts_custom_column' , array( $this, 'manage_giras_custom_column' ), 10, 2 );
		add_filter( 'manage_gira_posts_columns' , array( $this, 'gira_cpt_columns' ) );

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
			'supports'              => false,
			'has_archive'           => true
		);


		register_post_type( 'gira', $args );

	}


	/**
	 * Returns next dates from the Gira of all the plays
	 *
	 * @param   $dates_count    int     Number of dates to return
     * @param   $obra_id        int     Obra Identifier
	 * @return  \WP_Query       Returns an array of Gira or false if no dates are found
	 * @since   1.0.1
	 */
	public static function get_next_dates( $dates_count = 10, $obra_id = 0 ){

		$args = array(
			'order'             => 'ASC',
			'posts_per_page'    => $dates_count,
			'post_status'       => 'publish',
			'post_type'         => 'gira',


			'orderby'           => 'meta_value',
			'meta_type'         => 'DATETIME',
			'meta_key'          => 'mgtc_fecha_gira'
		);

		if ( $obra_id != 0 ):

            $args['meta_query'] = array(
                    'key'   => 'mgtc_gira_obra',
                    'value' =>  $obra_id,
                    'compare' => 'LIKE'
            );

        endif;

		$obras = new \WP_Query( $args );

		return $obras;
	}



	function gira_cpt_columns($columns) {

		// Remove the title and date
		unset ( $columns['title'] );
		unset ( $columns['date'] );

		// Add new columns
		$new_columns = array(
			'gira_date' => __('Fecha de la gira', 'mgtc'),
			'obra'      => __('Obra', 'mgtc'),
			'city'      => __('Ciudad', 'mgtc'),
			'theatre'   => __('Teatro', 'mgtc'),
		);

		return array_merge($columns, $new_columns);

	}




	function manage_giras_custom_column( $column, $post_id ) {

		switch ( $column ) {
			case 'gira_date':
				$fecha = get_post_meta( $post_id, 'mgtc_fecha_gira', true);
				?>
				<a href="<?php get_edit_post_link($post_id) ?>"><?php echo mysql2date('d/m/Y - H:i', $fecha); ?></a>
				<?php
				break;

			case 'obra':
				$obra = get_post_meta ($post_id, 'mgtc_gira_obra', true); ?>
				<a href="<?php echo get_edit_post_link( $obra[0] ); ?>"><?php echo get_the_title( $obra[0] ) ?></a>
				<?php
				break;

			case 'city':
				$teatro = get_post_meta( $post_id, 'mgtc_teatro_gira', true );
				$teatro_city = get_post_meta( $teatro[0], 'mgtc_ciudad_teatro', true );
				echo $teatro_city;
				break;

			case 'theatre':
				$teatro = get_post_meta( $post_id, 'mgtc_teatro_gira', true ); ?>
				<a href="<?php echo get_edit_post_link( $teatro[0] ); ?>"><?php echo get_the_title( $teatro[0] ) ?></a>
				<?php
				break;
		}

	}



	/**
	 * Customized messages for Gira Custom Post Type
	 *
	 * @param   array $messages Default messages.
	 * @return  array 			Returns an array with the new messages
	 */
	public function updated_messages_cb( $messages ) {

		$messages['gira'] = array(
			0  => '', // Unused. Messages start at index 1.
			1 => __( 'Gira actualizada.', 'mgsp' ),
			4 => __( 'Gira actualizada.', 'mgsp' ),
			/* translators: %s: date and time of the revision */
			5 => isset( $_GET['revision']) ? sprintf( __( 'Gira recuperada de la revisión %s.', 'mgsp' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( 'Gira publicada.', 'mgsp' ),
			7 => __( 'Gira guardada.', 'mgsp' ),
			9 => __('Gira programada', 'mgsp' ),
			10 => __( 'Borrador de gira actualizado.', 'mgsp' ),
		);

		return $messages;
	}


}
$gira = new Giras();