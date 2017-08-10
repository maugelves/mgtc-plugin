<?php


namespace MGTC\Models;

use MGTC\Service\Obras;

class Actor {

	/* =================================
     * PRIVATE VARIABLES
     * ================================*/

	private $ID                 = 0;
	private $nombre             = "";
	private $show_in_front_page = false;
	private $biography          = "";
	private $email              = "";
	private $twitter            = "";
	private $facebook           = "";
	private $instagram          = "";
	private $my_obras           = null;




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
	 * @return bool
	 */
	public function isShowInFrontPage() {
		return $this->show_in_front_page;
	}

	/**
	 * @param bool $show_in_front_page
	 */
	public function setShowInFrontPage( $show_in_front_page ) {
		$this->show_in_front_page = $show_in_front_page;
	}

	/**
	 * @return string
	 */
	public function getBiography() {
		return $this->biography;
	}

	/**
	 * @param string $biography
	 */
	public function setBiography( $biography ) {
		$this->biography = $biography;
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

	/**
	 * @return array
	 */
	public function get_obras() {
		if( is_null( $this->my_obras ) ):

			$args = array(
				'post_type' => 'obra',
				'post_status' => 'publish',
				'meta_query' => array(
					'relation' => 'OR',
					array(
						'key'     => 'mgtc_obra_actores_principales',
						'value'   => $this->getID(),
						'compare' => 'LIKE',
					),
					array(
						'key'     => 'mgtc_obra_actores_secundarios',
						'value'   => $this->getID(),
						'compare' => 'LIKE',
					),
				),
			);

			$this->my_obras = Obras::getInstance()->get_obras( $args );

		endif;
		return $this->my_obras;
	}

	/**
	 * @param null $my_obras
	 */
	public function set_my_obras( $my_obras ) {
		$this->my_obras = $my_obras;
	}





	/* =================================
     * METHODS
     * ================================*/
	/**
	 * render the Actor Social Networks
	 */
	public function the_rrss() {

		if(
			empty( $this->getInstagram() )
			&& empty( $this->getFacebook() )
			&& empty( $this->getTwitter() )
		)
			return;

		?>
		<div class="mgtcactorsn">

			<h2 class="mgtcactorsn__h">Sus redes sociales</h2>
			<ul class="mgtcactorsn__items">

			<?php if( !empty( $this->getFacebook() ) ): ?>
				<li class="mgtcactorsn__item"><a href="<?php echo $this->getFacebook(); ?>"><span class="icon-facebook"></span></a></li>
			<?php endif; ?>


			<?php if( !empty( $this->getTwitter() ) ): ?>
				<li class="mgtcactorsn__item"><a href="https://twitter.com/<?php echo $this->getTwitter(); ?>"><span class="icon-twitter"></span></a></li>
			<?php endif; ?>


			<?php if( !empty( $this->getInstagram() ) ): ?>
				<li class="mgtcactorsn__item"><a href="https://instagram.com/<?php echo $this->getInstagram(); ?>"><span class="icon-instagram"></span></a></li>
			<?php endif; ?>

			</ul>

		</div>
	<?php }


	/**
	 * Render the Actor Obras where he/she plays
	 */
	public function the_obras() {

		if( !empty( $this->get_obras() ) ): ?>
			<div class="mgtcalsoplaysin">
				<h2 class="mgtcalsoplaysin__h">Participa en</h2>
				<ul class="mgtcalsoplaysin__items">

				<?php foreach(  $this->get_obras() as $obra ): /** @var $obra Obra */ ?>

					<li class="mgtcalsoplaysin__item" onclick="location.href ='<?php echo get_permalink( $obra->getID() ); ?>'">
						<?php echo get_the_post_thumbnail( $obra->getId(), 'post-thumbnail', ['class' => 'mgtcalsoplaysin__item__fi'] ); ?>
						<a class="mgtcalsoplaysin__item__h" href="<?php echo get_permalink( $obra->getID() ); ?>"><?php echo $obra->getTitle() ?></a>
					</li>

				<?php endforeach; ?>

				</ul>
			</div>

		<?php endif;

	}


	/**
	 * Renders the Actor Twitter Timeline
	 */
	public function the_twitter_timeline() {

		// Check the actor has a Twitter Account
		if( !empty( $this->getTwitter() ) ): ?>
			<div class="mgtcactortwittertml">
				<a class="twitter-timeline" href="https://twitter.com/<?php echo $this->getTwitter(); ?>" data-dnt="true" data-tweet-limit="2" data-border-color="#d1d1d1" data-link-color="#A51D21">Tweets de @<?php echo $this->getTwitter(); ?></a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		<?php endif; ?>

	<?php }

}