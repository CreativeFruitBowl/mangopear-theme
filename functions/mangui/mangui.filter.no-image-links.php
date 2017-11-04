<?php

	/**
	 * [MangUI] Prevent WordPress from adding links to images by default
	 *
	 * This function prevents WordPress from automatically wrapping images in
	 * links when they are inserted into post content.
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
	
	function mangui_startr_no_image_links() {
		$image_set = get_option( 'image_default_link_type' );
		if ( $image_set !== 'none' ) {
			update_option( 'image_default_link_type', 'none' );
		}
	}