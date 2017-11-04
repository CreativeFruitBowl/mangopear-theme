<?php
	
	/**
	 * Flexible content panel: Call to action - Default version
	 */
	
	function mangopear_panel_portfolio($location = 'archive-portfolio', $title = false, $parent_id = false, $portfolio_ids = false) {
		$query_count = ($location == 'footer') ? 3 : -1;


		if     ($location == 'footer') 				{ $query_parents = 0;			$title_to_show = 'Our portfolio &amp; case studies'; }
		elseif ($location == 'archive-portfolio') 	{ $query_parents = 0;			$title_to_show = false; }
		elseif ($location == 'single-portfolio') 	{ $query_parents = $parent_id;	$title_to_show = $title; }


?>


		<section class="o-panel  o-panel--<?php echo $location; ?>">
			<div class="o-container">
				<?php if ($title_to_show != false) : ?>
					<h2 class="o-panel__heading  c-panel__heading--portfolio"><?php echo $title_to_show; ?></h2>
				<?php endif; ?>





				<div class="o-grid  o-grid--center">
					<?php

						/**
						 * Loop through the resources with 'links' category
						 */
						
						if ($portfolio_ids) :
							$portfolios_args = array(
								'post_type' 		=> 'portfolio',
								'posts_per_page' 	=> -1,
								'post__in' 			=> $portfolio_ids,
								'orderby' 			=> 'post__in'
							);


						else :
							$portfolios_args = array(
								'post_type'			=> 'portfolio',
								'tax_query'			=> '',
								'showposts'			=> $query_count,
								'posts_per_page'	=> $query_count,
								'post_parent'		=> $query_parents,
								'orderby' 			=> 'menu_order',
								'order'   			=> 'ASC',
							);


						endif;


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





				<?php if ($title_to_show != false) : ?>
					<div class="o-panel__button-wrapper">
						<a href="/our-work/" class="o-button  o-button--secondary  o-panel__button">
							<span class="o-button__text">View our portfolio &amp; case studies</span>
							<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
								<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
								<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
							</svg>
						</a>
					</div>
				<?php endif; ?>
			</div><!-- /.o-container -->
		</section>


	<?php } ?>