<?php

// Load theme blocks in wp-content/themes/jadoo-wp/blocks/
if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/blocks/build', __DIR__ . '/blocks/build/blocks-manifest.php' );
	return;
}



function my_plugin_register_patterns() {
	register_block_pattern(
		'my-plugin/feature-section',
		array(
			'title'         => __( 'Feature Section', 'my-plugin' ),
			'description'   => __( 'A three-column feature section with icons and descriptions', 'my-plugin' ),
			'categories'    => array( 'featured' ),
			'keywords'      => array( 'features', 'services', 'columns' ),
			'viewportWidth' => 1280,
			'content'       => '
				<!-- wp:heading {"textAlign":"center"} -->
				<h2 class="has-text-align-center">Our Features</h2>
				<!-- /wp:heading -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"level":3} -->
						<h3>Fast</h3>
						<!-- /wp:heading -->
						
						<!-- wp:paragraph -->
						<p>Lightning-fast performance for your users.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"level":3} -->
						<h3>Secure</h3>
						<!-- /wp:heading -->
						
						<!-- wp:paragraph -->
						<p>Built with security best practices in mind.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading {"level":3} -->
						<h3>Scalable</h3>
						<!-- /wp:heading -->
						
						<!-- wp:paragraph -->
						<p>Grows with your business needs.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			',
		)
	);
}
add_action( 'init', 'my_plugin_register_patterns' );
// add_theme_support( 'disable-layout-styles' );

// add_action( 'acf/init', 'my_register_blocks' );
// function my_register_blocks() {
// if ( function_exists( 'acf_register_block_type' ) ) {
// acf_register_block_type(
// array(
// 'name'            => 'testimonial',
// 'title'           => __( 'Testimonial' ),
// 'render_template' => 'template-parts/blocks/testimonial/testimonial.php',
// 'category'        => 'formatting',
// 'icon'            => 'admin-comments',
// )
// );
// }
// }
// function mytheme_enqueue_block_editor_assets() {
// wp_enqueue_script(
// 'mytheme-block-extensions',
// get_theme_file_uri( 'assets/js/block-extensions.js' ),
// array( 'wp-blocks', 'wp-hooks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-compose' ),
// filemtime( get_theme_file_path( 'assets/js/block-extensions.js' ) )
// );
// }
// add_action( 'enqueue_block_editor_assets', 'mytheme_enqueue_block_editor_assets' );
function mytheme_register_block_styles() {
	register_block_style(
		'core/columns',
		array(
			'name'  => 'card-columns',
			'label' => 'Card Columns',
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'bordered',
			'label' => 'Bordered',
		)
	);
}
add_action( 'init', 'mytheme_register_block_styles' );
// add_action(
// 'init',
// function () {
// register_block_style(
// 'core/button',
// array(
// 'name'         => 'orange',
// 'label'        => __( 'Orange', 'jadoo' ),
// 'style_handle' => 'orange',
// )
// );

// register_block_style(
// 'core/button',
// array(
// 'name'         => 'blue',
// 'label'        => __( 'Blue', 'jadoo' ),
// 'style_handle' => 'blue',
// )
// );
// }
// );

if ( ! function_exists( 'gb_enqueue_css' ) ) {
	function gb_enqueue_css() {
		wp_enqueue_style(
			'base',
			get_parent_theme_file_uri( '/assets/css/base.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		// wp_enqueue_style(
		// 'gb-style',
		// get_parent_theme_file_uri('style.css'),
		// array(),
		// wp_get_theme()->get('Version')
		// );
	}
	add_action( 'wp_enqueue_scripts', 'gb_enqueue_css' );
}
// function mytheme_setup_editor_styles() {
	// Add theme support for editor styles.
	// add_theme_support('editor-styles');

	// add_theme_support('align-wide');

	// add_theme_support('wp-block-styles');

	// Enqueue your base.css file for the editor.
	// The path is relative to your theme's root directory.
	// add_editor_style('assets/css/base.css');
// }
// add_action( 'after_setup_theme', 'mytheme_setup_editor_styles' );
// function wpdocs_theme_add_editor_styles()
// {
// add_editor_style('/assets/css/base.css');
// }
// add_action('admin_init', 'wpdocs_theme_add_editor_styles');
