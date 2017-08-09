<?php

namespace MGTC\Models;

use MGTC\Service\Equipos;
use MGTC\Service\Giras;
use MGTC\Service\Obras;

class Obra {

	/* =================================
     * PRIVATE VARIABLES
     * ================================*/
	private $date_release       = '';
	private $description        = '';
	private $distributors       = null; // Team
	private $directors          = null; //team
	private $downloads          = array();
	private $gallery            = array();
	private $ID                 = 0;
	private $main_actors        = null; //Actor
	private $main_picture       = false;
	private $press              = null; // Team
	private $press_links        = array();
	private $secondary_actors   = null; //ACtor
	private $short_description  = '';
	private $sponsors           = null; // Sponsors
	private $status             = '';
	private $subtitle           = '';
	private $team               = '';
	private $title              = '';
	private $videos             = array();
	private $giras              = null;



	/* =================================
     * GETTERS AND SETTERS
     * ================================*/

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * @param string $subtitle
	 */
	public function setSubtitle( $subtitle ) {
		$this->subtitle = $subtitle;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getShortDescription() {
		return $this->short_description;
	}

	/**
	 * @param string $short_description
	 */
	public function setShortDescription( $short_description ) {
		$this->short_description = $short_description;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus( $status ) {
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getDateRelease() {
		return $this->date_release;
	}

	/**
	 * @param string $date_release
	 */
	public function setDateRelease( $date_release ) {
		$this->date_release = $date_release;
	}

	/**
	 * @return null
	 */
	public function getMainActors() {

		if( is_null( $this->main_actors ) ):
			$this->main_actors = Obras::getInstance()->get_main_actors( $this->getID() );
		endif;

		return $this->main_actors;
	}

	/**
	 * @param null $main_actors
	 */
	public function setMainActors( $main_actors ) {
		$this->main_actors = $main_actors;
	}

	/**
	 * @return null
	 */
	public function getSecondaryActors() {
		if( is_null( $this->secondary_actors ) ):
			$this->secondary_actors = Obras::getInstance()->get_secondary_actors( $this->getID() );
		endif;
		return $this->secondary_actors;
	}

	/**
	 * @param null $secondary_actors
	 */
	public function setSecondaryActors( $secondary_actors ) {
		$this->secondary_actors = $secondary_actors;
	}

	/**
	 * @return null
	 */
	public function getDirectors() {
		if( is_null( $this->directors ) ):
			$this->directors = Obras::getInstance()->get_directors( $this->getID() );
		endif;
		return $this->directors;
	}

	/**
	 * @param null $directors
	 */
	public function setDirectors( $directors ) {
		$this->directors = $directors;
	}

	/**
	 * @return string
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * @param string $team
	 */
	public function setTeam( $team ) {
		$this->team = $team;
	}

	/**
	 * @return array
	 */
	public function getDownloads() {
		return $this->downloads;
	}

	/**
	 * @param array $downloads
	 */
	public function setDownloads( $downloads ) {
		$this->downloads = $downloads;
	}

	/**
	 * @return array
	 */
	public function getGallery() {
		return $this->gallery;
	}

	/**
	 * @param array $gallery
	 */
	public function setGallery( $gallery ) {
		$this->gallery = $gallery;
	}

	/**
	 * @return array
	 */
	public function getVideos() {
		return $this->videos;
	}

	/**
	 * @param array $videos
	 */
	public function setVideos( $videos ) {
		$this->videos = $videos;
	}

	/**
	 * @return null
	 */
	public function getDistributors() {
		if( is_null( $this->distributors ) ):
			$this->distributors = Obras::getInstance()->get_distributors( $this->getID() );
		endif;
		return $this->distributors;
	}

	/**
	 * @param null $distribution
	 */
	public function setDistributors( $distribution ) {
		$this->distributors = $distribution;
	}

	/**
	 * @return null
	 */
	public function getPress() {
		return $this->press;
	}

	/**
	 * @param null $press
	 */
	public function setPress( $press ) {
		$this->press = $press;
	}

	/**
	 * @return array
	 */
	public function getPressLinks() {
		return $this->press_links;
	}

	/**
	 * @param array $press_links
	 */
	public function setPressLinks( $press_links ) {
		$this->press_links = $press_links;
	}

	/**
	 * @return null
	 */
	public function getSponsors() {
		return $this->sponsors;
	}

	/**
	 * @param null $sponsors
	 */
	public function setSponsors( $sponsors ) {
		$this->sponsors = $sponsors;
	}

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
	 * @return int
	 */
	public function getMainPicture() {
		return $this->main_picture;
	}

	/**
	 * @param int $main_picture
	 */
	public function setMainPicture( $main_picture ) {
		$this->main_picture = $main_picture;
	}

	/**
	 * @return null
	 */
	public function getGiras() {
		if( is_null( $this->giras ) )
			$this->giras = Giras::getInstance()->get_next_giras( -1, $this->getID() );

		return $this->giras;
	}

	/**
	 * @param null $giras
	 */
	public function setGiras( $giras ) {
		$this->giras = $giras;
	}

}