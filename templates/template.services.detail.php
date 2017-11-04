<?php

	/**
	 * Template name: [Services] Detail
	 *
	 * This template will show a user their account dashboard, providing they're logged in to the 
	 * website. If the user is not logged in, the user will be shown the log in form.
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
		<div class="o-container">
			<div class="o-grid">
				<div class="o-grid__item  u-two-thirds  u-portable--one-whole">
					<div class="o-container  o-container--optimise-readability  o-container--align-left">
						<?php

							/**
							 * Output page content loop
							 *
							 * @see /themes/hildon/functions/source/hildon/hildon.output.page-content.php
							 */
							
							mangopear_output_page_content();

						?>
					</div><!-- /.o-container -->
				</div><!-- /.o-grid__item -->





				<aside class="o-grid__item  u-one-third  u-portable--one-whole  c-portfolio-sidebar">
					<?php mangopear_component__what_we_do__nav(); ?>
				</aside><!-- /.o-grid__item -->
			</div><!-- /.o-grid -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->





<?php get_footer(); ?>