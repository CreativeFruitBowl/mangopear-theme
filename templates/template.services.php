<?php

	/**
	 * Template name: [Services]
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
		<div class="o-container  o-container">
			<div class="o-container  o-container--optimise-readability  o-container--align-left">
				<?php
			
					/**
					 * Default WordPress Loop call
					 */
					
					if (have_posts()) : 
						while (have_posts()) : the_post(); 

							the_content();

						endwhile;

					else :
						echo '<h2>Oh shucks, it looks like there isn\'t any content to be found here!</h2>';

					endif;

				?>
			</div><!-- /.o-container -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->





	<?php mangopear_panel_services(); ?>





<?php get_footer(); ?>