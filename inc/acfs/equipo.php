<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_5939e2e346c20',
		'title' => 'Equipo',
		'fields' => array (
			array (
				'key' => 'field_5952bb9337ce8',
				'label' => 'Datos de la persona',
				'name' => 'mgtc_persona_contacto',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'clone' => array (
					0 => 'group_59515a0ec664a',
				),
				'display' => 'seamless',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'equipo',
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
			11 => 'tags',
			12 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	));

endif;