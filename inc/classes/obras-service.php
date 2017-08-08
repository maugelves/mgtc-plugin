<?php

namespace MGTC\Service;

use MGTC\Models\Equipo;
use MGTC\Models\Obra;


class Obras extends \Singleton {


	/**
	 * Returns an array with all the active Obras
	 *
	 * @author  Mauricio Gelves
	 * @param   $post_count     int     How many active obras return?
	 * @return  array|false
	 * @since   1.0
	 */
	public function get_active_obras( $post_count = 0 ) {

		$obras = array();

		$args = array(
			'meta_key'      => 'mgtc_estado_obra',
			'meta_value'    => 'vigente',
			'post_status'   => 'publish',
			'post_type'     => 'obra'
		);

		if( $post_count != 0 && is_numeric( $post_count ) ):
			$args['posts_per_page'] = $post_count;
		endif;

		$query = new \WP_Query( $args );

		if( $query->have_posts() ):

			while( $query->have_posts() ):
				$query->the_post();

				array_push( $obras, $this->get_obra_from_post( $query->post ) );

			endwhile;

		endif;

		return $obras;

	}

	/**
	 * Create a Obra entity from a WP_Post instance
	 *
	 * @author  Mauricio Gelves <mg@maugeles.com>
	 * @param   \WP_Post $post
	 * @return  Obra
	 * @since   1.0
	 */
	public function get_obra_from_post( \WP_Post $post ) {

		// Variable
		$obra       = new Obra();
		$obra_meta  = get_fields( $post->ID );

		// Set Values
		$obra->setID( $post->ID );
		$obra->setTitle( $post->post_title );
		if( isset( $obra_meta['mgtc_estreno_obra'] ) ) $obra->setDateRelease( $obra_meta['mgtc_estreno_obra'] );
		if( isset( $obra_meta['mgtc_obra_description'] ) ) $obra->setDescription( $obra_meta['mgtc_obra_description'] );
		if( isset( $obra_meta['mgtc_obra_main_picture'] ) ) $obra->setMainPicture( $obra_meta['mgtc_obra_main_picture'] );
		if( isset( $obra_meta['mgtc_obra_excerpt'] ) ) $obra->setShortDescription( $obra_meta['mgtc_obra_excerpt'] );
		if( isset( $obra_meta['mgtc_obra_subtitle'] ) ) $obra->setSubtitle( $obra_meta['mgtc_obra_subtitle'] );

		return $obra;

	}


	/**
	 * Get a Obra by its id
	 *
	 * @author  Mauricio Gelves <yo@maugelves.com>
	 * @param   $ID int
	 * @return  false|Obra
	 */
	public function get_by_id( $ID ) {

		$obra = false;

		$args = array(
			'post_status'   => 'publish',
			'post_type'     => 'obra',
			'p'             => $ID
		);

		$query = new \WP_Query( $args );

		// Check query is not empty
		if( ! $query->have_posts() ) return $obra;

		// Get the object from the post
		$obra = self::get_obra_from_post( $query->posts[0] );

		return $obra;

	}


	/**
	 * Returns an array of Main Actors from an Obra
	 *
	 * @param int $obra_id      Obra Identifier
	 * @return array
	 */
	public function get_main_actors( $obra_id ) {

		$actors = array();

		$actors_id = get_field('mgtc_obra_actores_principales', $obra_id );

		if( $actors_id ):

			foreach( $actors_id as $actor_id ):

				// Search the actor by Id
				$actor = Actores::getInstance()->get_by_id( $actor_id );

				// Add the actor to the output array
				if( $actor ) array_push( $actors, $actor );

			endforeach;

		endif;

		// return the array of Actors
		return $actors;
	}


	/**
	 * Returns an array of Secondary Actors from an Obra
	 *
	 * @param int $obra_id      Obra Identifier
	 * @return array
	 */
	public function get_secondary_actors( $obra_id ) {

		$actors = array();

		$actors_id = get_field('mgtc_obra_actores_secundarios', $obra_id );

		if( $actors_id ):

			foreach( $actors_id as $actor_id ):

				// Search the actor by Id
				$actor = Actores::getInstance()->get_by_id( $actor_id );

				// Add the actor to the output array
				if( $actor ) array_push( $actors, $actor );

			endforeach;

		endif;

		// return the array of Actors
		return $actors;
	}


	/**
	 * Returns an array of Directors from an Obra
	 *
	 * @param int $obra_id      Obra Identifier
	 * @return array
	 */
	public function get_directors( $obra_id ) {

		$directors = array();

		$directors_id = get_field('mgtc_obra_directores', $obra_id );

		if( $directors_id ):

			foreach( $directors_id as $director_id ):

				// Search the actor by Id
				$director = Equipos::getInstance()->get_by_id( $director_id );

				// Add the actor to the output array
				if( $director ) array_push( $directors, $director );

			endforeach;

		endif;

		// return the array of Actors
		return $directors;
	}

}