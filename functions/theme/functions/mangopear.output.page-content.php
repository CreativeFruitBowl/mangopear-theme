<?php

	/**
	 * A function to output the page content.
	 *
	 * To simply the editing process, this function is intended to replace manually writing
	 * and editing each instance of the page content loop (featured on most templates).
	 *
	 * @category 	Theme output
	 * @package  	hildon
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
	 * [1]	Define function
	 * [2]	If we have post content, output it
	 * [3]	Otherwise show an error message.
	 */
	
	function mangopear_output_page_content() { // [1]
		if (have_posts()) : 
			while (have_posts()) : 
				the_post();
				the_content(); // [2]
			endwhile;

		else : // [3]
			echo '<h2>Sorry. There was an error.</h2>';
			echo '<p>It looks like there was no content to be shown on this page.</p>';

		endif;
	}