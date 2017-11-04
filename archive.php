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





			<?php

				/**
				 * Get our posts
				 */
				
				if (have_posts()) :

			?>


				<main class="main">
					<section class="lister--blog">
						<div class="container">
							<h1 class="title  title--page"><?php single_cat_title('', true); ?></h1>
						</div>


						<ul class="grid  posts-list">
							<?php while (have_posts()) : the_post(); ?> 

								<li class="post  post--blog">
									<div class="grid__item  three-quarters  lap--one-whole  palm--one-whole">
										<time datetime="<?php echo get_the_date('c'); ?>" class="post__date">
											<span class="date__day"><?php echo get_the_date('j'); ?></span>
											<span class="date__month"><?php echo get_the_date('M'); ?></span>
										</time>


										<article class="post__article">
											<h2 class="post__title">
												<a href="<?php the_permalink(); ?>" class="post__title__link"><?php the_title(); ?></a>
											</h2>


											<div class="post__excerpt"><?php the_excerpt(); ?></div>


											<a href="<?php the_permalink(); ?>" class="post__button  button--secondary">
												Read full article
												<svg class="button__icon--right  icon--chevron--right" viewBox="0 0 16 16" width="14" height="14">
													<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
												</svg>
											</a>
										</article>
									</div><!-- /.grid__item -->
								</li>

							<?php endwhile; ?>
						</ul>
					</section><!-- /.container -->


				<?php else : ?>

					
					<section class="lister--blog  lister--no-posts  container">
						<h1 class="header--stylised">My writings</h1>

						<h2>No posts found.</h2>
						<p>Looks like we couldn't find any posts here. Sorry!</p>
					</section>





					<?php

						/**
						 * Let's get paginated
						 *
						 * [1]	Load up the global query var
						 * [2]	Create a ridiculously large number as a max for the  max number of posts
						 * [3]	Show the pagination
						 * [4]	Reset wp_query so that queries below work as expected
						 */
						
						/**
						 * [1]	Load up the global query var
						 */
					
						global $wp_query;


						/**
						 * [2]	Create a ridiculously large number as a max for the  max number of posts
						 */

						$big = 999999999;


						/**
						 * [3]	Show the pagination
						 */

						echo paginate_links( 
							array(
								'base'		=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'current'	=> max(1, get_query_var('paged')),
								'total'		=> $wp_query->max_num_pages,
								'format'	=> '?page=%#%',
								'type'		=> 'list',
								'end_size'	=> 3
							)
						);


						/**
						 * [4]	Reset wp_query so that queries below work as expected
						 */

						wp_reset_query();
					
					?>
				</main>


				<?php endif; ?>





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>