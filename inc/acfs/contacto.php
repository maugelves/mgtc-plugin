<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_59515a0ec664a',
		'title' => 'Contacto',
		'fields' => array (
			array (
				'key' => 'field_59515a0eca4ee',
				'label' => 'Email',
				'name' => 'mgtc_contacto_email',
				'type' => 'email',
				'instructions' => 'Indique el email de la persona',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_59515a0eca50b',
				'label' => 'Cuenta de Twitter',
				'name' => 'mgtc_contacto_twitter',
				'type' => 'text',
				'instructions' => 'Indique la cuenta de Twitter de la persona (sin el @)',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 100,
			),
			array (
				'key' => 'field_59515a0eca51b',
				'label' => 'Cuenta de Facebook',
				'name' => 'mgtc_contacto_facebook',
				'type' => 'text',
				'instructions' => 'Indique el enlace a la cuenta de Facebook de la persona.
Ej.: https://www.facebook.com/maugelvesweb/',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 200,
			),
			array (
				'key' => 'field_59515a2a8af88',
				'label' => 'Cuenta de Instagram',
				'name' => 'mgtc_contacto_instagram',
				'type' => 'text',
				'instructions' => 'Indique la cuenta de Instagram de la persona (sin el signo @).',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 200,
			),
			array (
				'key' => 'field_59515a6f8af89',
				'label' => 'Teléfonos',
				'name' => 'mgtc_contacto_telefonos',
				'type' => 'repeater',
				'instructions' => 'Introduzca el(los) teléfono(s) del contacto',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_59515a928af8a',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Agregar teléfono',
				'sub_fields' => array (
					array (
						'key' => 'field_59515a928af8a',
						'label' => 'Teléfono',
						'name' => 'mgtc_contacto_telefono',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'the_content',
			1 => 'excerpt',
			2 => 'custom_fields',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'author',
			7 => 'format',
			8 => 'page_attributes',
			9 => 'tags',
			10 => 'send-trackbacks',
		),
		'active' => 0,
		'description' => '',
	));

endif;