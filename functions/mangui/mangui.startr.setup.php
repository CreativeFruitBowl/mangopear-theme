<?php

	/**
	 * MangUI Startr Pack: Core framework setup.
	 *
	 * This function runs various actions and filters when the theme has been activated. We only need to run 
	 * these actions and filters once, hence hooking into the theme activation process.
	 *
	 * @category 	Startr setup
	 * @package  	mangui
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/hildon/docs/themes/hildon/
	 * @since   	1.0.0
	 */
	




	/**
	 * Contents
	 *
	 * [1]	Only load function if it hasn't already been loaded.
	 * [2]	Load textdomain for website translation.
	 * [3]	Clean up <head> output.
	 * [4]	Add default posts and comments RSS feed links to <head> output.
	 * [5]	Register default nav menus.
	 * [6]	Register widget areas.
	 * [7]	Allow shortcodes to be executed within widgets.
	 * [8]	Add editor style.
	 * [9]	Prevent file modifications.
	 * [10]	Enable support for post thumbnails on posts and pages.
	 * [11]	Hide admin pages that are not used.
	 * [12]	Change image insertion defaults.
	 * [13]	Enable support for HTML5 markup.
	 * [14]	Enable support for post formats.
	 * [15]	Enqueue scripts and stylesheets.
	 * [16]	Remove query strings from static resources.
	 * [18]	Amend <img> HTML output
	 */

	if (!function_exists('mangui_startr_setup')) : // [1]
		function mangui_startr_setup() {
			/**
			 * [2]	Only load function if it hasn't already been loaded.
			 *
			 * 		Make theme available for translation.
			 * 		Translations can be filed in the /languages/ directory.
			 * 		If you're building a theme based on mangui or hildon, use a find and replace to 
			 * 		change textdomain in all theme files.
			 */
			
			load_theme_textdomain('mangopear', get_template_directory() . '/languages');





			/**
			 * [3]	Clean up <head> output.
			 */
			
			remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'wp_generator');
			remove_action('wp_head', 'wp_shortlink_wp_head');





			/**
			 * [4]	Add default posts and comments RSS feed links to <head> output.
			 */
			
			add_theme_support('automatic-feed-links');





			/**
			 * [5]	Register default nav menus.
			 *
			 * 		[a]	Create main navigation, generally to be used in the header of the website
			 * 		[b]	Create footer menu, generally to be used in the footer of the website. Could be copyright links.
			 */
			
			register_nav_menus(
				array(
					'main' 	 => __('Main website navigation', 'hildon'), // [a]
					'footer' => __('Footer navigation', 'hildon'), // [b]
				)
			);





			/**
			 * [6]	Register widget areas.
			 *
			 * 		Register default widget areas to be used in the website
			 *
			 * 		@see /functions/source/functions.mangui.widgets.php [This file contains the sidebars to load]
			 */
			
			add_action('widgets_init', 'mangui_startr_widgets');





			/**
			 * [7]	Allow shortcodes to be executed within widgets.
			 */
			
			add_filter('widget_text', 'do_shortcode');





			/**
			 * [8]	Add editor style.
			 *
			 * 		When in /wp-admin/ and if there is a stylesheet called 'style-editor.css' in theme root,
			 * 		these styles will be applied to the WYSIWYG editor through /wp-admin/.
			 */
			
			add_editor_style();





			/**
			 * [9]	Prevent file modifications.
			 */
			
			if (!defined('DISALLOW_FILE_EDIT')) {
				define('DISALLOW_FILE_EDIT', true);
			}





			/**
			 * [10]	Enable support for post thumbnails on posts and pages.
			 */
			
			add_theme_support('post-thumbnails');





			/**
			 * [11]	Hide admin pages that are not used.
			 *
			 * 		@see /functions/source/functions.mangui.hide-pages.php [This file contains the pages to be hidden]
			 */
			
			add_action('admin_menu', 'mangui_startr_hide_pages');





			/**
			 * [12]	Change image insertion defaults.
			 *
			 * 		Stop WordPress from automatically adding a link to images when inserted into WYSIWYG editor.
			 *
			 * 		@see /functions/source/functions.mangui.no-image-links.php [This file contains the pages to be hidden]
			 */
			
			add_action('admin_init', 'mangui_startr_no_image_links', 10);





			/**
			 * [13]	Enable support for HTML5 markup.
			 */
			
			add_theme_support('html5', array(
				'comment-list',
				'search-form',
				'comment-form',
				'gallery',
				'caption',
			));





			/**
			 * [14]	Enable support for post formats.
			 */
			
			add_theme_support('post_formats', array(
				'aside',
				'audio',
				'chat',
				'gallery',
				'image',
				'link',
				'quote',
				'status',
				'video',
			));





			/**
			 * [15]	Enqueue scripts and stylesheets.
			 *
			 * 		@see /functions/source/functions.mangui.enqueue.php
			 */
			
			add_action('wp_enqueue_scripts', 'mangui_startr_enqueue');





			/**
			 * [16]	Remove query strings from static resources.
			 *
			 * 		@see /functions/source/functions.mangui.query-strings.php [<description>]
			 */
			
			add_filter('script_loader_src', 'mangui_startr_remove_query_strings', 15, 1);
			add_filter('style_loader_src',  'mangui_startr_remove_query_strings', 15, 1);





			/**
			 * [17]	Remove read more jump links
			 *
			 * 		@see /functions/source/functions.mangui.remove-jump-links.php
			 */
			
			add_filter('after_theme_setup', 'mangui_startr_remove_jump_links');





			/**
			 * [18]	Amend <img> HTML output
			 *
			 * 		@since 0.2.0
			 */
			
			add_filter('get_image_tag_class', 'mangui_startr_filter_image_html', 0, 4);
		}
	endif; // [1]





	/**
	 * Load function after theme setup
	 */
	
	add_action('after_setup_theme', 'mangui_startr_setup');