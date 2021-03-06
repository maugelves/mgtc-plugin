<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_593d46c902f4e',
		'title' => 'Obras',
		'fields' => array (
			array (
				'key' => 'field_59552333db76c',
				'label' => 'General',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5983115bbd391',
				'label' => 'Subtítulo',
				'name' => 'mgtc_obra_subtitle',
				'type' => 'text',
				'instructions' => 'Este subtítulo será utilizado en el carrousel de la homepage.',
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
			array (
				'key' => 'field_595524465d5f7',
				'label' => 'Descripción',
				'name' => 'mgtc_obra_description',
				'type' => 'wysiwyg',
				'instructions' => 'Desarrolle la descripción completa de la obra',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'delay' => 0,
			),
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
				'key' => 'field_593f5f12f95bc',
				'label' => 'Estado',
				'name' => 'mgtc_estado_obra',
				'type' => 'select',
				'instructions' => 'Indique si la obra está vigente o si es parte del historial de la compañía',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50',
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
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5955235ddb76d',
				'label' => 'Reparto y Equipo',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_593d4791b36a0',
				'label' => 'Actores principales',
				'name' => 'mgtc_obra_actores_principales',
				'type' => 'relationship',
				'instructions' => 'Indique los actores principales de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'actor',
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
				'return_format' => 'id',
			),
			array (
				'key' => 'field_59516453b9788',
				'label' => 'Actores secundarios',
				'name' => 'mgtc_obra_actores_secundarios',
				'type' => 'relationship',
				'instructions' => 'Indique los actores secundarios de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'actor',
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
				'return_format' => 'id',
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
					0 => 'equipo',
				),
				'taxonomy' => array (
					0 => 'roles:director',
				),
				'filters' => array (
					0 => 'search',
				),
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => '',
				'max' => '',
				'return_format' => 'id',
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
				'key' => 'field_59552390db76e',
				'label' => 'Ficheros y multimedia',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_598333c0096fd',
				'label' => 'Imagen Destacada',
				'name' => 'mgtc_obra_main_picture',
				'type' => 'image',
				'instructions' => 'Seleccione la imagen que se utilizará para el carrousel y portada de obra.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
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
				'key' => 'field_593d617de7285',
				'label' => 'Descargas',
				'name' => 'mgtc_descargas_obra',
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
						'key' => 'field_598ad278512e5',
						'label' => 'Nombre del fichero',
						'name' => 'mgtc_descarga_obra_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
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
					array (
						'key' => 'field_593d61aae7286',
						'label' => 'Fichero',
						'name' => 'mgtc_descarga_obra',
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
				'key' => 'field_595523b4db76f',
				'label' => 'Distribución y Prensa',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
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
					0 => 'equipo',
				),
				'taxonomy' => array (
					0 => 'roles:distribucion',
				),
				'filters' => array (
					0 => 'search',
				),
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => '',
				'max' => '',
				'return_format' => 'id',
			),
			array (
				'key' => 'field_594d3690421f8',
				'label' => 'Prensa',
				'name' => 'mgtc_obra_prensa',
				'type' => 'relationship',
				'instructions' => 'Indique la persona encargada de prensa',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'equipo',
				),
				'taxonomy' => array (
					0 => 'roles:prensa',
				),
				'filters' => array (
					0 => 'search',
				),
				'elements' => array (
					0 => 'featured_image',
				),
				'min' => '',
				'max' => '',
				'return_format' => 'id',
			),
			array (
				'key' => 'field_598ac4717f6a8',
				'label' => 'Prensa Web',
				'name' => 'mgtc_obra_links_prensa_web',
				'type' => 'repeater',
				'instructions' => '',
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
				'button_label' => 'Agregar enlace web',
				'sub_fields' => array (
					array (
						'key' => 'field_598ac4a57f6a9',
						'label' => 'Nombre del periódico/revista',
						'name' => 'mgtc_obra_nombre_prensa',
						'type' => 'text',
						'instructions' => 'Indique el nombre de la revista o periódico.',
						'required' => 1,
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
					array (
						'key' => 'field_598ac4f87f6ab',
						'label' => 'Enlace al artículo',
						'name' => 'mgtc_obra_enlace_prensa',
						'type' => 'url',
						'instructions' => 'Indique el enlace al artículo',
						'required' => 1,
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
			),
			array (
				'key' => 'field_598ac5527f6ac',
				'label' => 'Prensa escrita',
				'name' => 'mgtc_obra_links_prensa_escrita',
				'type' => 'repeater',
				'instructions' => '',
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
						'key' => 'field_598ac58a7f6ad',
						'label' => 'Título del fichero',
						'name' => 'mgtc_obra_links_prensa_escrita_titulo',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
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
					array (
						'key' => 'field_598ac5e37f6ae',
						'label' => 'Fichero',
						'name' => 'mgtc_obra_links_prensa_escrita_fichero',
						'type' => 'file',
						'instructions' => '',
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
						'mime_types' => '',
					),
				),
			),
			array (
				'key' => 'field_59552513bdf74',
				'label' => 'Patrocinios',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5952783fbf74d',
				'label' => 'Sponsors',
				'name' => 'mgtc_obra_sponsors',
				'type' => 'relationship',
				'instructions' => 'Indique los patrocinadores de la obra',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'sponsor',
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
				'return_format' => 'id',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'obra',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
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