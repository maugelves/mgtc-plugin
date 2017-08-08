<?php


namespace MGTC\Models;

use MGTC\Service\Obras;
use MGTC\Service\Theatres;

class Gira {

	/* =================================
     * PRIVATE VARIABLES
     * ================================*/

	private $ID             = 0;
	private $obra           = null;
	private $obra_id        = 0;
	private $date           = '';
	private $theatre        = null;
	private $theatre_id     = 0;
	private $tickets_link   = '';


	/* =================================
     * GETTERS AND SETTERS
     * ================================*/
	/**
	 * @return int
	 */
	public function getID() {
		return $this->ID;
	}

	/**
	 * @param int $ID
	 */
	public function setID( $ID ) {
		$this->ID = $ID;
	}
	/**
	 * @return null
	 */
	public function getObra() {
		// Lazy Instance
		if( is_null( $this->obra) ):
			$this->obra = Obras::getInstance()->get_by_id( $this->obra_id );
		endif;
		return $this->obra;
	}

	/**
	 * @param null $obra
	 */
	public function setObra( $obra ) {
		$this->obra = $obra;
	}

	/**
	 * @return int
	 */
	public function getObraId() {
		return $this->obra_id;
	}

	/**
	 * @param int $obra_id
	 */
	public function setObraId( $obra_id ) {
		$this->obra_id = $obra_id;
	}

	/**
	 * @return string
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param string $date
	 */
	public function setDate( $date ) {
		$this->date = $date;
	}

	/**
	 * @return null
	 */
	public function getTheatre() {
		if( is_null( $this->theatre ) ):
			$this->theatre = Theatres::getInstance()->get_by_id( $this->getTheatreId() );
		endif;
		return $this->theatre;
	}

	/**
	 * @param null $theatre
	 */
	public function setTheatre( $theatre ) {
		$this->theatre = $theatre;
	}

	/**
	 * @return int
	 */
	public function getTheatreId() {
		return $this->theatre_id;
	}

	/**
	 * @param int $theatre_id
	 */
	public function setTheatreId( $theatre_id ) {
		$this->theatre_id = $theatre_id;
	}

	/**
	 * @return string
	 */
	public function getTicketsLink() {
		return $this->tickets_link;
	}

	/**
	 * @param string $tickets_link
	 */
	public function setTicketsLink( $tickets_link ) {
		$this->tickets_link = $tickets_link;
	}
}