<?php

	/**
	 * Core template: [Portfolio] Detail
	 *
	 * @category 	Default WordPress template files
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	3.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */
	
	function mangui_portfolio_body_class($classes) { $classes[] = 'o-body--portfolio  o-body--portfolio--' . get_the_ID(); return $classes; }
	add_filter('body_class', 'mangui_portfolio_body_class');


	get_header();





	if (get_the_ID() == 781) :	// Gardbus lister page
		include('templates/portfolio-includes/gardbus/gardbus.php');

	elseif (get_the_ID() == 783):
		include('templates/portfolio-includes/gardbus/route-125-bus-timetables.php');

	elseif (get_the_ID() == 611):
		include('templates/portfolio-includes/uvg/uvg.php');

	elseif (get_the_ID() == 604):
		include('templates/portfolio-includes/jeakins/jeakins.php');

	elseif (get_the_ID() == 577):
		include('templates/portfolio-includes/purely-tutors/purely-tutors.php');

	elseif (get_the_ID() == 610):
		include('templates/portfolio-includes/dekkabus/dekkabus.php');

	elseif (get_the_ID() == 782):
		include('templates/portfolio-includes/hildon/hildon.php');





	else : // Post ID conditional





	/**
	 * Output page title
	 *
	 * @see /themes/mangopear/functions/source/mangopear/mangopear.output.page-title.php
	 */
	
	mangopear_output_page_title();





	/**
	 * Show rows if defined in post
	 */
	
	if (have_rows('rows')) :
		echo 'ROWS FOUND';


		while (have_rows('rows')) : the_row();
			if (get_row_layout() == 'default') :
				echo 'This is a default row';


			elseif (get_row_layout() == 'cta') :
				mangopear_panel_cta(
					$args = array(
						'title'			=> get_sub_field('title'),
						'content'		=> get_sub_field('content'),
						'url'			=> get_sub_field('url'),
						'button_text'	=> get_sub_field('button__text'),
					)
				);

			endif;
		endwhile;
	endif;
	
?>





	<?php if (have_rows('slides')) : $slide_count = 0; ?>
		<section class="o-panel">
			<div class="o-container">
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
			</div><!-- /.o-container -->
		</section>


		<main class="o-panel  o-panel--gutterless  c-work-slides">
			<ul class="c-work-slides__list">
				<?php while (have_rows('slides')) : the_row(); $slide_count++; ?>
					<li class="c-work-slides__item" style="background-color: <?php the_sub_field('colour'); ?>">
						<div class="o-grid  o-grid--wide  o-grid--middle  <?php if ($slide_count % 2 != 0) { echo 'o-grid--rev'; } ?>">
							<div class="o-grid__item  u-one-half  u-portable--one-whole">
								<?php $slide_image = get_sub_field('image'); ?>
								<?php $slide_image_mobile = get_sub_field('image--mobile'); ?>
								
								<img src="<?php echo $slide_image['url']; ?>" class="u-portable--hide">
								<img src="<?php echo $slide_image_mobile['url']; ?>" class="u-desk--hide">
							</div><!-- /.o-grid__item -->


							<div class="o-grid__item  u-one-half  u-portable--one-whole">
								<article class="c-work-slides__content  <?php if ($slide_count % 2 != 0) { echo 'c-work-slides__content--rev'; } ?>">
									<?php the_sub_field('content'); ?>


									<?php if (get_sub_field('button') != 'none') : ?>
										<a href="<?php the_sub_field('button__url'); ?>" <?php if (get_sub_field('button__target')) { echo 'target="_blank"'; } ?> class="o-button  o-button--secondary">
											<span class="o-button__text"><?php the_sub_field('button__text'); ?></span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
												<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
												<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
											</svg>
										</a>
									<?php endif; ?>
								</article>
							</div><!-- /.o-grid__item -->
						</div><!-- /.o-grid -->
					</li>
				<?php endwhile; ?>			
			</ul>
		</main>





	<?php else : ?>
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
						<?php mangopear_component_visit_website__default(get_the_ID()); ?>
					</aside><!-- /.o-grid__item -->
				</div><!-- /.o-grid -->
			</div><!-- /.o-container -->
		</main><!-- /.o-panel -->
	<?php endif; ?>





<?php endif; // Post ID conditional ?>





	<?php 

		if (get_field('portfolio__show-child')) {
			mangopear_panel_portfolio($location = 'single-portfolio', $title = 'The ' . get_the_title() . ' Collection', $parent_id = get_the_ID());
		}

	?>





	<section class="c-portfolio-form">
		<div class="o-container">
			<h2 class="o-panel__heading  c-panel__heading--portfolio">Looking for help on your project?</h2>
			

			<div class="o-container  o-container--optimise-readability  c-portfolio-form__content">
				<p class="c-lede">We're a friendly team who produce stellar work.</p>
				<p>Whether you're looking for some fresh new work or you've been left in the lurch by another agency - we're here to help you and your team better your marketing.</p>
			</div><!-- /.o-container -->


			<div class="o-grid">
				<div class="o-grid__item  u-two-thirds  u-portable--one-whole">
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
				</div><!-- /.o-grid__item -->


				<div class="o-grid__item  u-one-third  u-portable--one-whole">
					<div class="c-contact-details">
						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Call us on:</span></h3>
						<p class="c-lede  c-contact-details__detail"><a href="tel:02380981279">02380 981 279</a></p>
						

						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Email us at:</span></h3>
						<p class="c-lede  c-contact-details__detail"><a href="mailto:projects@mangopear.co.uk">projects@mangopear.co.uk</a></p>
						

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
	</section><!-- /.c-portfolio-form -->





<?php get_footer(); ?>