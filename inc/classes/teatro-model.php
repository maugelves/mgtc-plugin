<?php


namespace MGTC\Models;

class Theatre {

	/* =================================
     * PRIVATE VARIABLES
     * ================================*/

	private $ID             = 0;
	private $name           = '';
	private $address        = '';
	private $city           = '';
	private $website        = '';
	private $telephone      = '';

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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress( $address ) {
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity( $city ) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * @param string $website
	 */
	public function setWebsite( $website ) {
		$this->website = $website;
	}

	/**
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * @param string $telephone
	 */
	public function setTelephone( $telephone ) {
		$this->telephone = $telephone;
	}

}