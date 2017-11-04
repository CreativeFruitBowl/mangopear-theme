<?php

	/**
	 * [MangUI] Function to remove query string
	 *
	 * This function removes query strings from static resources to aid with their
	 * cacheability. These version query strings are removed from assets in the header
	 * and footer of the website.
	 *
	 * @package  	hildon
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/hildon/docs/themes/hildon/
	 * @since   	1.0.0
	 * @see 		/themes/hildon/functions/source/mangui.startr.setup.php
	 */

	function mangui_startr_remove_query_strings($src){
		$parts = explode('?ver', $src);
		return $parts[0];
	}