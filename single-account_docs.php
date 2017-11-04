<?php

	/**
	 * Default WordPress template: [Account docs] Detail
	 *
	 * @category 	Additional WordPress template files
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	3.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */
	

	get_header();


	/**
	 * Output page title
	 *
	 * @see /themes/mangopear/functions/source/mangopear/mangopear.output.page-title.php
	 */
	
	mangopear_output_page_title();
	
?>


	<main class="o-panel">
		<div class="o-container  o-container--optimise-readability">
			<?php
		
				/**
				 * Default WordPress Loop call
				 */
				
				mangopear_output_page_content();

			?>
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->


<?php get_footer(); ?>