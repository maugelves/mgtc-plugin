<?php

namespace MGTC\Service;

use MGTC\Models\Gira;

class Giras extends \Singleton {


	/**
	 * Create a Gira entity from a WP_Post instance
	 *
	 * @author  Mauricio Gelves <mg@maugeles.com>
	 * @param   \WP_Post $post
	 * @return  Gira
	 * @since   1.0
	 */
	public function get_gira_from_post( \WP_Post $post ) {

		// Variable
		$gira       = new Gira();
		$gira_meta  = get_fields( $post->ID );

		// Set Values
		$gira->setID( $post->ID );
		$gira->setDate( $gira_meta['mgtc_fecha_gira'] );
		$gira->setObraId( $gira_meta['mgtc_gira_obra'][0] );
		$gira->setTheatreId( $gira_meta['mgtc_teatro_gira'][0] );
		if( isset( $gira_meta['mgtc_entradas_gira'] ) ) $gira->setTicketsLink( $gira_meta['mgtc_entradas_gira'] );

		return $gira;

	}


	/**
	 * Get a Obra by its id
	 *
	 * @author  Mauricio Gelves <yo@maugelves.com>
	 * @param   $ID int
	 * @return  false|Gira
	 */
	public function get_by_id( $ID ) {

		$gira = false;

		$args = array(
			'post_status'   => 'publish',
			'post_type'     => 'gira',
			'p'             => $ID
		);

		$query = new \WP_Query( $args );

		// Check query is not empty
		if( ! $query->have_posts() ) return $gira;

		// Get the object from the post
		$gira = self::get_gira_from_post( $query->posts[0] );

		return $gira;

	}


	/**
	 * Returns next dates from the Gira of all or an specific the play
	 *
	 * @param   $posts_count    int     Number of dates to return
	 * @param   $obra_id        int     Obra Identifier
	 * @return  array           Returns an array of Gira or false if no dates are found
	 * @since   1.0.1
	 */
	public function get_next_giras( $posts_count = 10, $obra_id = 0 ){

		// Variables
		$giras = array();

		$args = array(
			'order'             => 'ASC',
			'posts_per_page'    => $posts_count,
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

		$query = new \WP_Query( $args );

		if( $query->have_posts() ):
			foreach ( $query->posts as $post ):
				array_push( $giras, $this->get_gira_from_post( $post ) );
			endforeach;
		endif;

		return $giras;
	}


}