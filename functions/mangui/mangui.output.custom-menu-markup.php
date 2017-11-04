<?php

	/**
	 * [MangUI] Custom markup for nav menus
	 *
	 * Custom function that can be called instead of nav_menu default WP function.
	 * This allows for menu markup to be customised to suit the MangUI classes.
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
	
	function mangui_nav_menu($menu_name = 'main', $classes = '') {
		if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) :
			$menu 		= wp_get_nav_menu_object($locations[$menu_name]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);


			$menu_list = '<nav class="o-nav  ' . $classes . '">' ."\n";
				$menu_list .= "\t\t\t\t". '<ul class="o-nav__list">' ."\n";
					foreach ((array) $menu_items as $key => $menu_item) {
						$title 		= $menu_item->title;
						$url 		= $menu_item->url;
						$menu_list .= "\t\t\t\t\t". '<li class="o-nav__item"><a href="'. $url .'" class="o-nav__link">'. $title .'</a></li>' ."\n";
					}
				$menu_list .= "\t\t\t\t". '</ul>' ."\n";
			$menu_list .= "\t\t\t". '</nav>' ."\n";
		endif;


		echo $menu_list;
	}