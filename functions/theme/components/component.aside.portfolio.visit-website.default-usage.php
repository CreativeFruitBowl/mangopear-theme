<?php

	/**
	 * Output the default visit website component
	 *
	 * A simple component to show a button to visit the website, typically 
	 * for a portfolio piece. The component is styled with an image and has
	 * customisable content.
	 *
	 * Usually, the parameters will be custom field controlled through the template.
	 *
	 * @category 	Theme output
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	function mangopear_component_visit_website__default($post_id) {
		if (get_field('visit-website', $post_id)) :
			if (get_field('visit-website__icon', $post_id) == 'link') :
				mangopear_component_visit_website(
					$strapline = get_field('visit-website__content', $post_id),
					$type = 'link',
					$action_url = get_field('visit-website__url', $post_id),
					$action_file = '',
					$action_images = ''
				);


			elseif (get_field('visit-website__icon', $post_id) == 'download') :
				mangopear_component_visit_website(
					$strapline = get_field('visit-website__content', $post_id),
					$type = 'download',
					$action_url = '',
					$action_file = get_field('visit-website__file', $post_id),
					$action_images = ''
				);


			elseif (get_field('visit-website__icon', $post_id) == 'images') :
				mangopear_component_visit_website(
					$strapline = get_field('visit-website__content', $post_id),
					$type = 'images',
					$action_url = '',
					$action_file = '',
					$action_images = get_field('visit-website__images', $post_id)
				);

			endif;
		endif;
	}
?>