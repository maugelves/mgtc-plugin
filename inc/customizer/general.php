<?php

namespace MGTC\customizer;

class General {

	public function __construct() {

		add_action( 'customize_register', array( $this, 'remove_default_settings' ), 11 );
		add_action( 'customize_register', array( $this, 'register_general_settings' ), 12 );

	}

	public function remove_default_settings( $wp_customize ) {

		$wp_customize->remove_section( 'background_image' );
		$wp_customize->remove_section( 'header_image' );
		$wp_customize->remove_section( 'background_image' );
		$wp_customize->remove_section( 'themes' );
		$wp_customize->remove_section( 'static_front_page' );
		$wp_customize->remove_section( 'custom_css' );
		$wp_customize->remove_control( 'background_color' );

	}

	public function register_general_settings( $wp_customize ) {

		$wp_customize->add_setting(
			'mgtc_header_bckg_color_sett',
			array(
				'default'     => '#FFFFFF',
				'transport'   => 'refresh',
			)
		);

		$wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'mgtc_header_bckg_color_control', array(
			'label'      => __( 'Color de fondo del header', 'mgtc' ),
			'section'    => 'colors',
			'settings'   => 'mgtc_header_bckg_color_sett',
		) ) );

	}

}

$general = new General();