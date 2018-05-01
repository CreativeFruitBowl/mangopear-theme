<?php

	/**
	 * Functions and filters that are specific to the Hildon WordPress theme.
	 *
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @since   	1.0.0
	 */


	 /**
	 * Contents
	 *
	 * [1]	Include MangUI Startr functions
	 * [2]	Set the content width for the website
	 * [3]	Register additional navigation menus
	 * [4]	Add class to the first paragraph of WYSIWYG
	 * [5]	Add image sizes
	 * [6]	Dequeue SearchWP default styles
	 * [7]	Post formats
	 * [9]	Remove emoji support
	 * [10]	Remove jQuery migrate
	 * [11]	Wrap tables in a class
	 * [12]	Add ACF options page
	 * [13] Mangopear breadcrumb fix...
	 * [14] Remove height and width attrs from images
	 * [15]	Add definition for our SVG sprite documents
	 */


	/**
	 * [1]	Include MangUI Startr functions
	 *
	 * 		[a]	Include theme functions
	 * 		[b]	Include Gutenberg blocks
	 */

	require_once get_template_directory() . '/functions/functions.php'; // [a]
	require_once get_template_directory() . '/gutenberg/gutenberg.php'; // [b]





	/**
	 * [2]	Set the content width for the website
	 *
	 * 		The content width $var is used by WordPress (core) for defining the styling of oEmbed objects to
	 * 		ensure they do not overflow the width of the website. Additional styling required through CSS.
	 *
	 * 		@var int [Define the maximum width of the website, measured in pixels]
	 */

	if (!isset($content_width)) :
		$content_width = 950;
	endif;





	/**
	 * [3]	Register additional navigation menus
	 *
	 * 		In addition to the default menus that are registered with MangUI Startr,
	 * 		we need to register the following.
	 *
	 * 		@since 0.2.0
	 *
	 * 		[a]	Top navigation appears at the very top of every page.
	 * 		[b]	Top navigation appears at the very top of every page, when the user is logged in.
	 * 		[c]	Footer: More links, top navigation.
	 * 		[d]	Footer: More links, bottom navigation.
	 */

	register_nav_menus(
		array(
			'top' 			=> __('[Header] Top menu (Not logged in)', 'mangopear'), 		// [a]
			'top-loggedin' 	=> __('[Header] Top menu (Logged in)', 'mangopear'), 			// [b]
			'footer-more-1'	=> __('[Footer] Useful links (Part 1)', 'mangopear'), 			// [c]
			'footer-more-2'	=> __('[Footer] Useful links (Part 2)', 'mangopear'), 			// [d]
		)
	);





	/**
	 * [4]	Add class to the first paragraph of WYSIWYG
	 *
	 * 		@since 0.2.0
	 */

	function hildon_content_first_p($content) {
		return preg_replace('/<p([^>]+)?>/', '<p$1 class="c-lede">', $content, 1);
	}

	add_filter('the_content', 'hildon_content_first_p');





	/**
	 * [5]	Add image sizes
	 *
	 * 		[a]	Header graphic sizes: very large (four to one ratio)
	 * 			[i]		2600 x 650
	 * 			[ii]	2000 x 500
	 * 			[iii]	1500 x 375
	 * 		[b]	Header graphic sizes: medium (three to one ratio)
	 * 			[i]		1026 x 342
	 * 			[ii]	801 x 267
	 * 		[c]	Header graphic sizes: small (two to one ratio)
	 * 			[i]		500 x 250
	 * 			[ii]	350 x 175
	 * 		[d]	Post thumbnail largest size (4:3 ratio)
	 * 		[e]	Portfolio lister item image (4:3 ratio)
	 */

	function mangopear_add_image_sizes() {
		add_image_size('header-graphic--xxl', 	2600,  650, true); // [a][i]
		add_image_size('header-graphic--xl',  	2000,  500, true); // [a][ii]
		add_image_size('header-graphic--l',   	1500,  375, true); // [a][iii]
		add_image_size('header-graphic--m',   	1026,  342, true); // [b][i]
		add_image_size('header-graphic--s',   	 801,  267, true); // [b][ii]
		add_image_size('header-graphic--xs',  	 500,  250, true); // [c][i]
		add_image_size('header-graphic--xxs', 	 350,  175, true); // [c][ii]
		add_image_size('featured--large', 		 565,  283, true); // [d][i]
		add_image_size('featured--medium', 		 480,  255, true); // [d][ii]
		add_image_size('portfolio--lister',		 368,  276, true); // [e]
	}

	add_action('after_setup_theme', 'mangopear_add_image_sizes');





	/**
	 * [6]	Dequeue SearchWP default styles
	 */

	add_action('wp_print_styles', 'my_remove_searchwp_live_search_theme_css', 99999);


	function my_remove_searchwp_live_search_theme_css() {
		wp_dequeue_style('searchwp-live-search');
		wp_deregister_style('searchwp-live-search');
	}





	/**
	 * [7]	Post formats
	 */

	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));





	/**
	 * [9]	Remove emoji support
	 */

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');





	/**
	 * [10]	Remove jQuery migrate
	 */

	add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

	function remove_jquery_migrate(&$scripts) {
	    if(!is_admin()) {
	        $scripts->remove('jquery');
	        $scripts->add('jquery', false, array('jquery-core'), '1.10.2');
	    }
	}





	/**
	 * [11]	Wrap tables in a class
	 *
	 * 		@since 0.2.0
	 */

	function hildon_content_table($content) {
		return preg_replace('/<table/', '<div class="c-table-wrapper"><table', $content, 1);
		return preg_replace('/</table>/', '</div></table>', $content, 1);
	}

	add_filter('the_content', 'hildon_content_table');





	/**
	 * [12]	Add ACF options page
	 */

	if (function_exists('acf_add_options_sub_page')) {
	    acf_add_options_sub_page(array(
	        'title' 	 => 'Mangopear theme options',
	        'parent'	 => 'themes.php',
	        'capability' => 'manage_options',
	    ));
	}





	/**
	 * [13] Mangopear breadcrumb fix...
	 */

	function mangopear_breadcrumbs() {
		mangui_startr_breadcrumbs();
	}





	/**
	 * [14] Remove height and width attrs from images
	 */

	add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
	add_filter('image_send_to_editor', 'remove_width_attribute', 10);


	function remove_width_attribute($html) {
		$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
		return $html;
	}





	/**
	 * [15]	Add definition for our SVG sprite documents
	 *
	 * 		To avoid excess markup, we're now loading most SVG icons via a sprite
	 * 		sheet. Any complex icons (i.e. more than two colours) still need to be
	 * 		inlined.
	 *
	 * 		@since 2.0.0
	 *
	 * 		[a]	Global, generic, sprite
	 */

	define('MANGOPEAR_SPRITE', get_site_url() . '/sprites/mangopear-icons.svg');				// [a]