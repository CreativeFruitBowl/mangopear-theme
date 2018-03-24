<?php

	defined( 'ABSPATH' ) || exit;


	add_action('enqueue_block_editor_assets', 'mangopear_block__call_to_action__editor_assets');

	function mangopear_block__call_to_action__editor_assets() {
		wp_enqueue_script(
			'mangopear-call-to-action--script',
			get_template_directory_uri() . '/gutenberg/call-to-action/block.js',
			array('wp-blocks', 'wp-i18n', 'wp-element', 'underscore')
		);
	}


	add_action( 'enqueue_block_assets', 'mangopear_block__call_to_action__editor_styles' );

	function mangopear_block__call_to_action__editor_styles() {
		wp_enqueue_style(
			'mangopear-call-to-action--styles',
			get_template_directory_uri() . '/gutenberg/call-to-action/style.css',
			array('wp-blocks')
		);
	}