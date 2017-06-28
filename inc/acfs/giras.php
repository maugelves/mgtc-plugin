<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_593f49774c0f1',
		'title' => 'Gira',
		'fields' => array (
			array (
				'key' => 'field_594d1c2c933b3',
				'label' => 'Obra de teatro',
				'name' => 'mgtc_gira_obra',
				'type' => 'relationship',
				'instructions' => 'Selecciona la obra de teatro para la nueva fecha',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'obra',
				),
				'taxonomy' => array (
				),
				'filters' => '',
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => 1,
				'max' => 1,
				'return_format' => 'object',
			),
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
					0 => 'teatro',
				),
				'taxonomy' => array (
				),
				'filters' => array (
					0 => 'search',
				),
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => 1,
				'max' => 1,
				'return_format' => 'object',
			),
			array (
				'key' => 'field_593f4a638dc7a',
				'label' => 'Enlace a la venta de entradas',
				'name' => 'mgtc_entradas_gira',
				'type' => 'url',
				'instructions' => 'Indique el enlace a la venta de entradas para la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
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