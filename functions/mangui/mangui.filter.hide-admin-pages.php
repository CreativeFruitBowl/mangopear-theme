<?php

	/**
	 * [MangUI] Remove certain admin pages
	 *
	 * Upon theme activation this function will stop certain pages from being
	 * visible within the Dashboard.
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
	
	function mangui_startr_hide_pages() {
		remove_menu_page( 'link-manager.php' );
	}