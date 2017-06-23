<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_593d46c902f4e',
		'title' => 'Obras',
		'fields' => array (
			array (
				'key' => 'field_594d15d6dcca5',
				'label' => 'Descripción breve',
				'name' => 'mgtc_obra_excerpt',
				'type' => 'textarea',
				'instructions' => 'Desarrolle una descripción breve para utilizar en las fichas del espectáculo',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'new_lines' => 'br',
			),
			array (
				'key' => 'field_593f612fb1b48',
				'label' => '',
				'name' => '',
				'type' => 'row',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'row_type' => 'row_open',
				'col_num' => 2,
			),
			array (
				'key' => 'field_593f5f12f95bc',
				'label' => 'Estado',
				'name' => 'mgtc_estado_obra',
				'type' => 'select',
				'instructions' => 'Indique si la obra está vigente o si es parte del historial de la compañía',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'vigente' => 'Vigente',
					'historial' => 'Historial',
				),
				'default_value' => array (
					0 => 'vigente',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array (
				'key' => 'field_593f5eddf95bb',
				'label' => 'Fecha de estreno',
				'name' => 'mgtc_estreno_obra',
				'type' => 'date_picker',
				'instructions' => 'Indique la fecha de estreno para tenerlo en cuenta cuando la obra pase al histórico',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array (
				'key' => 'field_593f621c86dad',
				'label' => '',
				'name' => '',
				'type' => 'row',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'row_type' => 'row_close',
				'col_num' => 2,
			),
			array (
				'key' => 'field_593d4791b36a0',
				'label' => 'Actor(es)',
				'name' => 'mgtc_obra_actores',
				'type' => 'relationship',
				'instructions' => 'Indique los actores de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'personal',
				),
				'taxonomy' => array (
					0 => 'category:actor',
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
				'key' => 'field_593d5f72c162a',
				'label' => 'Director(es)',
				'name' => 'mgtc_obra_directores',
				'type' => 'relationship',
				'instructions' => 'Seleccione el(los) director(es) de la obra.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'personal',
				),
				'taxonomy' => array (
					0 => 'category:director',
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
				'key' => 'field_593d6143e7284',
				'label' => 'Equipo técnico, artístico y productivo',
				'name' => 'mgtc_obra_equipo_general',
				'type' => 'wysiwyg',
				'instructions' => 'Indique el equipo técnico, artístico y productivo que conforma la obra.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '<b>Texto Original</b>: <nombres>
<b>Equipo Artístico</b>: <nombres>
<b>Iluminación</b>: <nombres>
<b>Escenografía</b>: <nombres>
<b>Vestuario/figurinista</b>: <nombres>
<b>Música Original</b>: <nombres>
<b>Ayudante de Dirección</b>: <nombres>
<h4>Equipo Técnico</h4>
<b>Coordinador Técnico</b>: <nombres>
<b>Técnico de Sonido: <nombres>
<b>Regiduría</b>: <nombres> 
<h4>Equipo de Producción</h4>
<b>Diseño de Producción</b>: <nombres>
<b>Productor Ejecutivo</b>: <nombres>
<b>Jefa de Producción</b>: <nombres>
<b>Secretaría de Producción</b>: <nombres>
<b>Meritoria de Producción</b>: <nombres>
<h4>Realizaciones</h4>
<b>Construcción de la escenografía</b>: <nombres>
<b>Vestuario Pepón Nieto</b>: <nombres>
<b>Promoción</b>: <nombres>
<b>Fotografías</b>:<nombres>
<b>Distribución</b>: <nombres>',
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'delay' => 0,
			),
			array (
				'key' => 'field_593d617de7285',
				'label' => 'Dossier',
				'name' => 'mgtc_dossieres_obra',
				'type' => 'repeater',
				'instructions' => 'Cargue todos los ficheros que conforman el dossier de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Agregar fichero',
				'sub_fields' => array (
					array (
						'key' => 'field_593d61aae7286',
						'label' => 'Fichero',
						'name' => 'mgtc_dossier_obra',
						'type' => 'file',
						'instructions' => 'Seleccione el fichero',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'library' => 'all',
						'min_size' => '',
						'max_size' => '',
						'mime_types' => 'pdf,jpg',
					),
				),
			),
			array (
				'key' => 'field_593d6299e7287',
				'label' => 'Imágenes',
				'name' => 'mgtc_imagenes_obra',
				'type' => 'gallery',
				'instructions' => 'Seleccione las imágenes de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => '',
				'max' => '',
				'insert' => 'append',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_593d63bee7289',
				'label' => 'Videos',
				'name' => 'mgtc_videos_obra',
				'type' => 'repeater',
				'instructions' => 'Selecciona los videos de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Agregar video',
				'sub_fields' => array (
					array (
						'key' => 'field_593d63d3e728a',
						'label' => 'Video',
						'name' => 'mgtc_video_obra',
						'type' => 'oembed',
						'instructions' => 'Indica el enlace a YouTube o Vimeo',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'width' => '',
						'height' => '',
					),
				),
			),
			array (
				'key' => 'field_593d645ce728b',
				'label' => 'Distribución',
				'name' => 'mgtc_distribucion_obra',
				'type' => 'relationship',
				'instructions' => 'Seleccione la persona que se encarga de la distribución de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'personal',
				),
				'taxonomy' => array (
					0 => 'category:distribucion',
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
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'obras',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'custom_fields',
			1 => 'discussion',
			2 => 'comments',
			3 => 'revisions',
			4 => 'author',
			5 => 'format',
			6 => 'page_attributes',
			7 => 'categories',
			8 => 'tags',
			9 => 'send-trackbacks',
		),
		'active' => 1,
		'description' => '',
	));

endif;