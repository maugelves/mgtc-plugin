<?php


namespace MGTC\Models;

class Equipo {

	/* =================================
     * PRIVATE VARIABLES
     * ================================*/

	private $ID                 = 0;
	private $nombre             = "";
	private $email              = "";
	private $twitter            = "";
	private $facebook           = "";
	private $instagram          = "";





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
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @param string $nombre
	 */
	public function setNombre( $nombre ) {
		$this->nombre = $nombre;
	}

	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail( $email ) {
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * @param string $twitter
	 */
	public function setTwitter( $twitter ) {
		$this->twitter = $twitter;
	}

	/**
	 * @return string
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * @param string $facebook
	 */
	public function setFacebook( $facebook ) {
		$this->facebook = $facebook;
	}

	/**
	 * @return string
	 */
	public function getInstagram() {
		return $this->instagram;
	}

	/**
	 * @param string $instagram
	 */
	public function setInstagram( $instagram ) {
		$this->instagram = $instagram;
	}

}