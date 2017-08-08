<?php

namespace MGTC\Service;


use MGTC\Models\Equipo;

class Equipos extends \Singleton {


	/**
	 * Create a Equipo entity from a WP_Post instance
	 *
	 * @author  Mauricio Gelves <mg@maugeles.com>
	 * @param   \WP_Post $post
	 * @return  Equipo
	 * @since   1.0
	 */
	public function get_equipo_from_post( \WP_Post $post ) {

		// Variable
		$equipo       = new Equipo();
		$equipo_meta  = get_fields( $post->ID );

		// Set Values
		$equipo->setID( $post->ID );
		$equipo->setNombre( $post->post_title );
		if( isset( $equipo_meta['mgtc_contacto_email'] ) ) $equipo->setEmail( $equipo_meta['mgtc_contacto_email'] );
		if( isset( $equipo_meta['mgtc_contacto_facebook'] ) ) $equipo->setFacebook( $equipo_meta['mgtc_contacto_facebook'] );
		if( isset( $equipo_meta['mgtc_contacto_twitter'] ) ) $equipo->setTwitter( $equipo_meta['mgtc_contacto_twitter'] );
		if( isset( $equipo_meta['mgtc_contacto_instagram'] ) ) $equipo->setInstagram( $equipo_meta['mgtc_contacto_instagram'] );

		return $equipo;

	}



	/**
	 * Get an Equipo by its id
	 *
	 * @author  Mauricio Gelves <mg@maugelves.com>
	 * @param   $equipo_id int
	 * @return  false|Equipo
	 */
	public function get_by_id( $equipo_id ) {

		$equipo = false;

		$args = array(
			'post_status'   => 'publish',
			'post_type'     => 'equipo',
			'p'             => $equipo_id
		);

		$query = new \WP_Query( $args );

		// Check query is not empty
		if( ! $query->have_posts() ) return $equipo;

		// Get the object from the post
		$equipo = self::get_equipo_from_post( $query->posts[0] );

		return $equipo;

	}

}