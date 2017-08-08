<?php

namespace MGTC\Service;

use MGTC\Models\Theatre;

class Theatres extends \Singleton {

	/**
	 * Create a Teatro entity from a WP_Post instance
	 *
	 * @author  Mauricio Gelves <mg@maugeles.com>
	 * @param   \WP_Post $post
	 * @return  Theatre
	 * @since   1.0
	 */
	public function get_teatro_from_post( \WP_Post $post ) {

		// Variable
		$teatro       = new Theatre();
		$teatro_meta  = get_fields( $post->ID );

		// Set Values
		$teatro->setID( $post->ID );
		if( isset( $teatro_meta['mgtc_direccion_teatro'] ) ) $teatro->setAddress( $teatro_meta['mgtc_direccion_teatro'] );
		if( isset( $teatro_meta['mgtc_ciudad_teatro'] ) ) $teatro->setCity( $teatro_meta['mgtc_ciudad_teatro'] );
		$teatro->setName( $post->post_title );
		if( isset( $teatro_meta['mgtc_teatro_telefono'] ) ) $teatro->setTelephone( $teatro_meta['mgtc_teatro_telefono'] );
		if( isset( $teatro_meta['mgtc_website_teatro'] ) ) $teatro->setWebsite( $teatro_meta['mgtc_website_teatro'] );

		return $teatro;

	}


	/**
	 * Get a Teatro by its id
	 *
	 * @author  Mauricio Gelves <yo@maugelves.com>
	 * @param   $ID int
	 * @return  false|Teatro
	 */
	public function get_by_id( $ID ) {

		$teatro = false;

		$args = array(
			'post_status'   => 'publish',
			'post_type'     => 'teatro',
			'p'             => $ID
		);

		$query = new \WP_Query( $args );

		// Check query is not empty
		if( ! $query->have_posts() ) return $teatro;

		// Get the object from the post
		$teatro = self::get_teatro_from_post( $query->posts[0] );

		return $teatro;

	}

}