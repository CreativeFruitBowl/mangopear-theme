<?php
	
	/**
	 * Get the header code
	 */
	get_header();


	/**
	 * Output page title
	 *
	 * @see /themes/mangopear/functions/source/mangopear/mangopear.output.page-title.php
	 */
	
	mangopear_output_page_title($show_title = true, $show_breadcrumb = true);

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





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>