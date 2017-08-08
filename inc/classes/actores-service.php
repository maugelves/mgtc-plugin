<?php

namespace MGTC\Service;

use MGTC\Models\Actor;

class Actores extends \Singleton {


	/**
	 * Create a Actor entity from a WP_Post instance
	 *
	 * @author  Mauricio Gelves <mg@maugeles.com>
	 * @param   \WP_Post $post
	 * @return  Actor
	 * @since   1.0
	 */
	public function get_actor_from_post( \WP_Post $post ) {

		// Variable
		$actor       = new Actor();
		$actor_meta  = get_fields( $post->ID );

		// Set Values
		$actor->setID( $post->ID );
		$actor->setNombre( $post->post_title );
		if( isset( $actor_meta['mgtc_actor_biografia'] ) ) $actor->setBiography( $actor_meta['mgtc_actor_biografia'] );
		if( isset( $actor_meta['mgtc_contacto_email'] ) ) $actor->setEmail( $actor_meta['mgtc_contacto_email'] );
		if( isset( $actor_meta['mgtc_contacto_facebook'] ) ) $actor->setFacebook( $actor_meta['mgtc_contacto_facebook'] );
		if( isset( $actor_meta['mgtc_contacto_twitter'] ) ) $actor->setTwitter( $actor_meta['mgtc_contacto_twitter'] );
		if( isset( $actor_meta['mgtc_contacto_instagram'] ) ) $actor->setInstagram( $actor_meta['mgtc_contacto_instagram'] );

		return $actor;

	}



	/**
	 * Retrieves all the actors for the homepage
	 *
	 * @return array
	 */
	public function get_actors_for_homepage() {

		// Variables
		$actores = array();

		$args = array(
			'post_type'     => 'actor',
			'post_status'   => 'publish',
			'meta_key'      => 'mgtc_actor_show_in_frontpage',
			'meta_value'    => 1
		);

		$query = new \WP_Query( $args );

		if( $query->have_posts() ):

			foreach ( $query->posts as $post ):
				array_push( $actores, $this->get_actor_from_post( $post ) );
			endforeach;

		endif;

		return $actores;

	}


	/**
	 * Get an Actor by its id
	 *
	 * @author  Mauricio Gelves <mg@maugelves.com>
	 * @param   $actor_id int
	 * @return  false|Actor
	 */
	public function get_by_id( $actor_id ) {

		$actor = false;

		$args = array(
			'post_status'   => 'publish',
			'post_type'     => 'actor',
			'p'             => $actor_id
		);

		$query = new \WP_Query( $args );

		// Check query is not empty
		if( ! $query->have_posts() ) return $actor;

		// Get the object from the post
		$actor = self::get_actor_from_post( $query->posts[0] );

		return $actor;

	}

}