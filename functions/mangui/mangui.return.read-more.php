<?php

	/**
	 * [MangUI] Function to remove jump links from post content
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
	
	function mangui_startr_remove_jump_links($link) {
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}