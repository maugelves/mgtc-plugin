<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_593f49774c0f1',
		'title' => 'Gira',
		'fields' => array (
			array (
				'key' => 'field_593f497e8855f',
				'label' => 'Fecha',
				'name' => 'mgtc_fecha_gira',
				'type' => 'date_time_picker',
				'instructions' => 'Indique la hora y fecha de la obra',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y g:i a',
				'return_format' => 'd/m/Y g:i a',
				'first_day' => 1,
			),
			array (
				'key' => 'field_593f49ac88560',
				'label' => 'Teatro',
				'name' => 'mgtc_teatro_gira',
				'type' => 'relationship',
				'instructions' => 'Indique el teatro donde se realiza la obra',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'teatros',
				),
				'taxonomy' => array (
				),
				'filters' => array (
					0 => 'search',
				),
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => '',
				'max' => '',
				'return_format' => 'object',
			),
			array (
				'key' => 'field_593f4aae8dc7b',
				'label' => '¿Hay venta de entradas online?',
				'name' => 'mgtc_hay_entradas_gira',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array (
				'key' => 'field_593f4a638dc7a',
				'label' => 'Entradas',
				'name' => 'mgtc_entradas_gira',
				'type' => 'url',
				'instructions' => 'Indique el enlace a la venta de entradas para la obra',
				'required' => 1,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_593f4aae8dc7b',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array (
				'key' => 'field_593f4b518dc7c',
				'label' => 'Texto del enlace',
				'name' => 'mgtc_texto_link_obra',
				'type' => 'text',
				'instructions' => 'Indique el texto que tendrá el enlace para la compra de entradas',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_593f4aae8dc7b',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Comprar entradas online',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gira',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'custom_fields',
			4 => 'discussion',
			5 => 'comments',
			6 => 'revisions',
			7 => 'slug',
			8 => 'author',
			9 => 'format',
			10 => 'page_attributes',
			11 => 'featured_image',
			12 => 'categories',
			13 => 'tags',
			14 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	));

endif;