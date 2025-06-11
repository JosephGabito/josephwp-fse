<?php
/**
 * Functions file for JosephWP FSE.
 *
 * @package josephwp-fse
 */

if ( ! function_exists( 'josephwp_fse_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since JosephWP FSE 1.0
	 *
	 * @return void
	 */
	function josephwp_fse_enqueue_styles() {

		// Load main styles.
		wp_enqueue_style(
			'josephwp-fse-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Load main script.
		wp_enqueue_script(
			'josephwp-fse-script',
			get_template_directory_uri() . '/assets/js/script.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'josephwp_fse_enqueue_styles' );
