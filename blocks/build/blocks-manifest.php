<?php
// This file is generated. Do not modify it manually.
return array(
	'service' => array(
		'$schema' => '../../../block-schema.json',
		'apiVersion' => 3,
		'name' => 'create-block/service',
		'version' => '0.1.0',
		'title' => 'Service',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			
		),
		'variations' => array(
			array(
				'name' => 'default',
				'title' => 'Default',
				'attributes' => array(
					
				)
			),
			array(
				'name' => 'with-background',
				'title' => 'With Background',
				'attributes' => array(
					'backgroundColor' => 'primary'
				)
			)
		),
		'textdomain' => 'service',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
