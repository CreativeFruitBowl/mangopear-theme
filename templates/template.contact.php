<?php
	
	/**
	 * Template name: [Contact]
	 * 
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
		<div class="o-container">
			<div class="o-container  o-container--align-left  o-container--optimise-readability">
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


			


			<h2 class="o-form__title--contact">
				<?php
					if (is_page(270)) : echo 'How can we help you?...';
					else : 				echo 'Get in touch with our team...';
					endif;
				?>
			</h2>





			<div class="o-grid">
				<div class="o-grid__item  u-two-thirds  u-portable--one-whole">
					<?php
						if (is_page(270)) : echo FrmFormsController::get_form_shortcode(array('id' => 9, 'title' => false, 'description' => false));
						else : 				echo FrmFormsController::get_form_shortcode(array('id' => 5, 'title' => false, 'description' => false));
						endif;
					?>
				</div><!-- /.o-grid__item -->


				<div class="o-grid__item  u-one-third  u-portable--one-whole">
					<div class="c-contact-details">
						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Call us on:</span></h3>
						<p class="c-lede  c-contact-details__detail"><a href="tel:07415388501">07415 388 501</a></p>
						

						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Email us at:</span></h3>
						<p class="c-lede  c-contact-details__detail"><a href="mailto:say.hi@mangopear.co.uk">say.hi@mangopear.co.uk</a></p>
						

						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Write to us at:</span></h3>
						<p class="c-contact-details__detail">
							Mangopear creative,
							<br>7 School Place,
							<br>3 Seaward Road,
							<br>Southampton,
							<br>Hampshire,
							<br>SO19 2HA
						</p>
						

						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Connect with us:</span></h3>
						<?php mangopear_component_social_navigation($nav_class = 'o-nav--contact-social', $size = 36, $fill = 'currentColor'); ?>
					</div><!-- /.c-contact-details -->
				</div><!-- /.o-grid__item -->				
			</div><!-- /.o-grid -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>