<?php

	/**
	 * [MangUI] Add framework specific classes to images
	 *
	 * This function amends the classes that are added to images by default
	 * when they are inserted into the post content area from the 
	 * "Insert Media" modal.
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
	 * [1]	Change alignment classes
	 * 		[a]	No alignment
	 * 		[b]	Left aligned
	 * 		[c]	Right aligned
	 * 		[d]	Centre aligned	 *
	 * [2]	Image id class (references attachment ID in WordPress)
	 * [3]	Add default MangUI classes to <img>
	 * [4]	Change default WordPress image size class
	 */
	
	function mangui_startr_filter_image_html($class) {
		$class = str_replace('wp-image', ' o-image  o-image--id', $class);
		$class = str_replace('size-', 'o-image--size-', $class);
		$class = str_replace('align', 'o-image--align-', $class);

		return $class;
	}