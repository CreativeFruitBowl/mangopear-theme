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
	
	mangopear_output_page_title($show_title = true, $show_breadcrumb = true, $title_content = 'Press &amp; latest news');

?>





	<main class="o-blog">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if (has_post_format('aside')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--aside">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--aside">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M70,36c0-2.2-1.8-4-4-4H34c-2.2,0-4,1.8-4,4v24c0,2.2,1.8,4,4,4h28l8,8L70,36z M62,56H38v-4h24 V56z M62,50H38v-4h24V50z M62,44H38v-4h24V44z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--monthly">
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
										<span class="o-date__year"><?php echo get_the_date('Y'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->





				<?php elseif (has_post_format('audio')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--audio">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--audio">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M25.4,41.8v16.4h10.9L50,71.9V28.1L36.3,41.8H25.4z M62.3,50c0-4.8-2.8-9-6.8-11v22 C59.5,59,62.3,54.8,62.3,50z M55.5,26v5.6C63.4,34,69.2,41.3,69.2,50s-5.8,16-13.7,18.4V74c11-2.5,19.2-12.3,19.2-24 S66.4,28.5,55.5,26z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->

				


				<?php elseif (has_post_format('chat')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--chat">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--chat">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M70.6,38.6h-4.8v21.6H34.6V65c0,1.3,1.1,2.4,2.4,2.4h26.4L73,77V41C73,39.7,71.9,38.6,70.6,38.6z M61,53V31.4 c0-1.3-1.1-2.4-2.4-2.4H27.4c-1.3,0-2.4,1.1-2.4,2.4V65l9.6-9.6h24C59.9,55.4,61,54.3,61,53z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('gallery')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--gallery">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--gallery">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M73,62.6V33.8c0-2.6-2.2-4.8-4.8-4.8H39.4c-2.6,0-4.8,2.2-4.8,4.8v28.8c0,2.6,2.2,4.8,4.8,4.8h28.8 C70.8,67.4,73,65.2,73,62.6z M46.6,53l4.9,6.5l7.1-8.9l9.6,12H39.4L46.6,53z M25,38.6v33.6c0,2.6,2.2,4.8,4.8,4.8h33.6v-4.8H29.8 V38.6H25z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										

										<?php if (have_rows('images')) : $images = have_rows('images'); ?>
											<ul class="o-blog__gallery">
												<?php while (have_rows('images')) : the_row(); $image = get_sub_field('url'); ?>
													<li class="c-gallery__image">
														<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('image')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--image">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--image">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" class="st0" d="M74,68.7V31.3c0-2.9-2.4-5.3-5.3-5.3H31.3c-2.9,0-5.3,2.4-5.3,5.3v37.3c0,2.9,2.4,5.3,5.3,5.3 h37.3C71.6,74,74,71.6,74,68.7z M40.7,54l6.7,8l9.3-12l12,16H31.3L40.7,54z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										

										<ul class="o-blog__gallery">
											<?php if (get_field('images')) : $image = get_field('images'); ?>
												<li class="c-gallery__image">
													<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
													<?php if ($image['caption']) { ?> <p class="c-gallery__caption"><?php echo $image['caption']; ?></p><?php } ?>
												</li>
											<?php endif; ?>
										</ul>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('link')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--link">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--link">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M23.1,53c0-5.5,4.4-9.9,9.9-9.9h12.8V37H33c-8.8,0-16,7.2-16,16s7.2,16,16,16h12.8v-6.1H33 C27.5,62.9,23.1,58.5,23.1,53z M36.2,56.2h25.6v-6.4H36.2V56.2z M65,37H52.2v6.1H65c5.5,0,9.9,4.4,9.9,9.9s-4.4,9.9-9.9,9.9H52.2V69 H65c8.8,0,16-7.2,16-16S73.8,37,65,37z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<a href="<?php the_content(); ?>" class="c-post-just-link">
											<span class="o-button__text"><?php the_content(); ?></span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('quote')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--testimonial">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--testimonial">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M32,65h9l6-12V35H29v18h9L32,65z M56,65h9l6-12V35H53v18h9L56,65z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<blockquote class="o-testimonial">
										<?php the_content(); ?>
									</blockquote>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('status')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--status">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--status">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" class="st0" d="M65,63.9c-2,0-3.8,0.8-5.2,2.1l-19-11.1c0.1-0.6,0.2-1.2,0.2-1.9s-0.1-1.3-0.2-1.9l18.8-11 c1.4,1.3,3.3,2.2,5.4,2.2c4.4,0,8-3.6,8-8s-3.6-8-8-8s-8,3.6-8,8c0,0.6,0.1,1.3,0.2,1.9l-18.8,11C37,45.9,35.1,45,33,45 c-4.4,0-8,3.6-8,8s3.6,8,8,8c2.1,0,4-0.8,5.4-2.2l19,11.1c-0.1,0.6-0.2,1.1-0.2,1.7c0,4.3,3.5,7.8,7.8,7.8s7.8-3.5,7.8-7.8 S69.3,63.9,65,63.9z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php elseif (has_post_format('video')) : ?>
					<section class="o-panel  o-panel--blog  o-panel--video">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--video">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M62.3,49v-9.3c0-1.5-1.2-2.7-2.7-2.7h-32c-1.5,0-2.7,1.2-2.7,2.7v26.7c0,1.5,1.2,2.7,2.7,2.7h32 c1.5,0,2.7-1.2,2.7-2.7V57L73,67.7V38.3L62.3,49z"/>
										</svg>
									</i>
									<time datetime="" class="o-date__time  o-date__time--daily">
										<span class="o-date__day"><?php echo get_the_date('j'); ?></span>
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				


				<?php else : ?>
					<section class="o-panel  o-panel--blog  o-panel--standard">
						<div class="o-container">
							<div class="o-grid  o-grid--middle">
								<div class="o-grid__item  u-one-quarter  u-portable--one-whole  o-blog__wrapper--icon">
									<i class="o-blog__icon  o-blog__icon--standard">
										<svg viewBox="0 0 100 100" class="o-blog__icon-el">
											<path fill="currentColor" d="M54,63.5H29v5h25V63.5z M69,43.5H29v5h40V43.5z M29,58.5h40v-5H29V58.5z M29,33.5v5h40v-5H29z"/>
										</svg>
									</i>



									<time datetime="" class="o-date__time  o-date__time--monthly">
										<span class="o-date__month"><?php echo get_the_date('F'); ?></span>
										<span class="o-date__year"><?php echo get_the_date('Y'); ?></span>
									</time>
								</div><!-- /.o-grid__item -->


								<div class="o-grid__item  u-three-quarters  u-portable--one-whole  o-blog__wrapper--content">
									<div class="o-blog__post">
										<h3 class="c-post__title"><a href="<?php the_permalink(); ?>" class="c-post__title-link"><?php the_title(); ?></a></h3>
										<div class="c-lede  c-post__content"><?php the_excerpt(); ?></div>
										
										<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-post__button">
											<span class="o-button__text">Read full article</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 16 16" width="20" height="20">
												<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z" />
											</svg>
										</a>
									</div>
								</div><!-- /.grid__item -->
							</div><!-- /.o-grid -->
						</div><!-- /.o-container -->
					</section><!-- /.o-panel -->


				<?php endif; ?>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="o-container  o-container--optimise-readability">
				<h2>Sorry. It looks like there aren't any posts to show you.</h2>
				<p>Go back to the <a href="/writings/">blog articles lister</a> and read the latest posts there.</p>
			</div><!-- /.o-container -->


		<?php endif; ?>
	</main>





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>