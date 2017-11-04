<?php

	/**
	 * [MangUI] Enqueue scripts and stylesheets
	 *
	 * Time to enqueue our scripts and stylesheets to be printed in the <head> of the website.
	 *
	 * @category 	Startr setup
	 * @package  	mangui
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/hildon/docs/themes/hildon/
	 * @since   	1.0.0
	 * @see 		/themes/hildon/functions/source/mangui.startr.setup.php
	 */
	

	/**
	 * Contents
	 *
	 * [1]	Enqueue our styles and scripts
	 * [2]	Dequeue certain styles and scripts
	 */


	/**
	 * [1]	Enqueue our styles and scripts
	 *
	 * 		[a]	@js 	global.min.js 		Include this theme's plugins JS files (concat and minified).
	 * 		[b]	@js 	global.min.js 		Include this theme's custom JS files (concat and minified).
	 * 		[c]	@css 	screen.css 			Include this theme's main stylesheet (concat and minified).
	 */
	
	function mangui_startr_enqueue() {
		wp_enqueue_script('mangopear__global--plugins', get_stylesheet_directory_uri().'/resources/js/compiled/plugins.min.js', array('jquery')); // [a]
		wp_enqueue_script('mangopear__global--scripts', get_stylesheet_directory_uri().'/resources/js/compiled/global.min.js', array('jquery')); // [b]
		wp_enqueue_style( 'mangopear__global--styles',  get_stylesheet_directory_uri().'/resources/css/compiled/screen.css'); // [c]
	}





	/**
	 * [2]	Dequeue certain styles and scripts
	 *
	 * 		[a]	@css 	searchwp-live-search	Remove the default SearchWP styles, they can be included in our SCSS.
	 */
	
	function mangui_startr_dequeue() {
		wp_deregister_style('searchwp-live-search'); // [a]
	}