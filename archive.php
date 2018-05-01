<?php

	/**
	 * Core template: [Archive] All post types
	 *
	 * @category 	Templates
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */


	get_header();


	mangopear_output_page_title($show_title = true, $show_breadcrumb = true);

?>


	<main class="main">
		<?php if (have_posts()) : ?>
			<section class="lister--blog">
				<div class="container">
					<h1 class="title  title--page">
						<?php single_cat_title('', true); ?>
					</h1>
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
										<a href="<?php the_permalink(); ?>" class="post__title__link">
											<?php the_title(); ?>
										</a>
									</h2>


									<div class="post__excerpt">
										<?php the_excerpt(); ?>
									</div>


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


			<?php get_template_part('template-partials/pagination'); ?>


		<?php else : ?>
			<section class="lister--blog  lister--no-posts  container">
				<h1 class="header--stylised">My writings</h1>

				<h2>No posts found.</h2>
				<p>Looks like we couldn't find any posts here. Sorry!</p>
			</section>


		<?php endif; ?>
	</main>





<?php get_footer(); ?>