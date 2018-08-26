<?php

/**
 * [Mangopear]	Output row: Portfolio
 *
 * @category    filter
 * @package     mangopear
 * @author      Andi North <andi@mangopear.co.uk>
 * @copyright   2018 Mangopear Limited
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @since       4.0.0
 * @version     4.0.0
 */


/**
 * CHANGELOG
 *
 * @version 4.0.0
 *          Init new component
 */


/**
 * CONTENTS
 *
 * [1]  Forbid direct loading of this file
 * [2]	Get global WooCommerce values
 * [3]	Define class
 */


/**
 * [1]	Forbid direct loading of this file
 */

if (! defined('ABSPATH')) { exit; }





/**
 * [3]	Define function
 *
 * 		[a]	Set default values for params
 */

if (! function_exists('mangopear__the_portfolio_row')) :
	function mangopear__the_portfolio_row($args = array()) {

		/**
		 * [a]	Set default values for params
		 */
		
		$defaults = array(
			'title'					=> false,
			'colour--background'	=> false,
			'colour--text'			=> false,
			'items'					=> false,
		);


		$args = wp_parse_args($args, $defaults);

?>


		<section class="o-panel" <?php if ($args['colour--background']) { echo 'style="background-color: ' . $args['colour--background'] . '"'; } ?>>
			<div class="o-container">
				<?php if ($args['title']) : ?>
					<h2 class="o-panel__heading  c-panel__heading--portfolio" <?php if ($args['colour--text']) { echo 'style="color: ' . $args['colour--text'] . '"'; } ?>>
						<?php echo $args['title']; ?>
					</h2>
				<?php endif; ?>





				<div class="o-grid  o-grid--center">
					<?php

						/**
						 * Loop through the resources with 'links' category
						 */
						
						$portfolios_args = array(
							'post_type' 		=> 'portfolio',
							'posts_per_page' 	=> -1,
							'post__in' 			=> $args['items'],
							'orderby' 			=> 'post__in'
						);


						$portfolio_items = new WP_Query($portfolios_args);


						if ($portfolio_items->have_posts()) :
							while ($portfolio_items->have_posts()) : $portfolio_items->the_post(); ?>
								<div class="o-grid__item  u-one-third  u-lap--one-half  u-palm--one-whole">
									<article class="c-portfolio  c-portfolio--has-link  c-portfolio--<?php echo $post->post_name; ?>">
										<header class="c-portfolio__header">
											<h3 class="c-portfolio__title">
												<a href="<?php the_permalink(); ?>" class="c-portfolio__title-link">
													<?php the_title(); ?>
													<span class="u-hide">&nbsp;-&nbsp;</span>
													<span class="c-portfolio__strapline"><?php the_field('portfolio__strapline'); ?></span>
												</a>
											</h3>


											<div class="c-portfolio__content">
												<?php the_excerpt(); ?>
											</div><!-- /.c-portfolio__content -->
										</header>


										<div class="c-portfolio__image">
											<img class="c-portfolio__image-el" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'portfolio--lister'); ?>">


											<noscript>
												<img class="c-portfolio__image-el" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'portfolio--lister'); ?>">
											</noscript>
										</div><!-- /.c-portfolio__image -->


										<div class="c-portfolio__button">
											<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  o-panel__button">
												<span class="o-button__text">View case study</span>
												<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
													<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
													<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
												</svg>
											</a>
										</div>


										<a href="<?php the_permalink(); ?>" class="c-portfolio__overlay-link" title="<?php the_title(); ?>"></a>
									</article>
								</div><!-- /.o-grid__item -->
							<?php endwhile; ?>
						<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div><!-- /.o-grid -->
			</div><!-- /.o-container -->
		</section>


	<?php } ?>
<?php endif; ?>