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
	
	get_header();


	mangopear_output_page_title();





	/**
	 * Loop through journeys
	 */
	
	if (have_rows('journeys')) :

?>


		<main class="o-panel">
			<div class="o-container">
				<ol class="c-journeys">
					<?php while (have_rows('journeys')) : the_row(); ?>
						<?php $select = get_sub_field('select'); ?>


						<?php if ($select == 'journey') : ?>
							<li class="c-journey  c-journey--<?php the_sub_field('type'); ?>">
								<div class="o-grid">
									<div class="o-grid__item  u-one-sixth">
										<i class="c-journey__icon">
											<?php $type = get_sub_field('type'); ?>
											<?php if ($type == 'bus' || $type == 'coach') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z"/></svg>
											<?php elseif ($type == 'tram') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M19 16.94V8.5c0-2.79-2.61-3.4-6.01-3.49l.76-1.51H17V2H7v1.5h4.75l-.76 1.52C7.86 5.11 5 5.73 5 8.5v8.44c0 1.45 1.19 2.66 2.59 2.97L6 21.5v.5h2.23l2-2H14l2 2h2v-.5L16.5 20h-.08c1.69 0 2.58-1.37 2.58-3.06zm-7 1.56c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm5-4.5H7V9h10v5z"/></svg>
											<?php elseif ($type == 'rail') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M4 15.5C4 17.43 5.57 19 7.5 19L6 20.5v.5h12v-.5L16.5 19c1.93 0 3.5-1.57 3.5-3.5V5c0-3.5-3.58-4-8-4s-8 .5-8 4v10.5zm8 1.5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm6-7H6V5h12v5z"/></svg>
											<?php elseif ($type == 'taxi' || $type == 'uber') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5H15V3H9v2H6.5c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
											<?php elseif ($type == 'walk') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7"/></svg>
											<?php elseif ($type == 'cycle') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/></svg>
											<?php elseif ($type == 'start' || $type == 'end') : ?>
												<svg fill="currentColor" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg"><path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z"/></svg>
											<?php endif; ?>
										</i>


										<?php if ($type == 'bus' || $type == 'coach') { ?><h2 class="c-journey__route-number"><?php the_sub_field('route__number'); ?></h2><?php } ?>
									</div><!-- /.o-grid__item -->





									<div class="o-grid__item  u-four-sixths">
										<div class="c-journey__depart">
											<?php $depart_map = get_sub_field('departure--point'); ?>
											<h3 class="c-journey__time  c-journey__time--depart"><?php the_sub_field('departure--time'); ?></h3>
											
											<p class="c-journey__point  c-journey__point--depart">
												<span>From: </span>
												<a href="<?php echo 'https://www.google.co.uk/maps/?q=loc:' . $depart_map['lat'] . ',' . $depart_map['lng']; ?>" target="_blank">
													<strong><?php echo $depart_map['address']; ?></strong>
												</a>
											</p>
										</div><!-- /.c-journey__depart -->


										<div class="c-journey__arrive">
											<?php $arrival_map = get_sub_field('arrival--point'); ?>
											<h3 class="c-journey__time  c-journey__time--arrival"><?php the_sub_field('arrival--time'); ?></h3>
											
											<p class="c-journey__point  c-journey__point--arrival">
												<span>From: </span>
												<a href="<?php echo 'https://www.google.co.uk/maps/?q=loc:' . $arrival_map['lat'] . ',' . $arrival_map['lng']; ?>" target="_blank">
													<strong><?php echo $arrival_map['address']; ?></strong>
												</a>
											</p>
										</div><!-- /.c-journey__arrive -->
									</div><!-- /.o-grid__item -->





									<div class="o-grid__item  u-one-sixth">
										<h3 class="c-journey__ticket"></h3>
									</div><!-- /.o-grid__item -->
								</div><!-- /.o-grid -->
							</li>





						<?php elseif ($select == 'connection') : ?>
							<li class="c-journey  c-journey--connection">
								<div class="o-grid">
									<div class="o-grid__item  u-one-sixth">
										<i class="c-journey__icon">
											<svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>
										</i>
									</div><!-- /.o-grid__item -->


									<div class="o-grid__item  u-five-sixths">
										<p class="c-journey__point  c-journey__point--arrival">
											<span>Connection time: </span>
											<strong><?php the_sub_field('connection'); ?></strong>
										</p>
									</div><!-- /.o-grid__item -->
								</div><!-- /.o-grid -->
							</li>


						<?php elseif ($select == 'meal') : ?>
							<li class="c-journey  c-journey--meal">
								<div class="o-grid">
									<div class="o-grid__item  u-one-sixth">
										<i class="c-journey__icon">
											<svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/></svg>
										</i>
									</div><!-- /.o-grid__item -->


									<div class="o-grid__item  u-five-sixths">
										<?php $food_map = get_sub_field('meal__location'); ?>
										<p class="c-journey__point  c-journey__point--arrival">
											<span>Meal time allocation: </span>
											<a href="<?php echo 'https://www.google.co.uk/maps/?q=loc:' . $food_map['lat'] . ',' . $food_map['lng']; ?>" target="_blank">
												<strong><?php echo $food_map['address']; ?></strong>
											</a>
											<strong class="c-journey__meal-time">- <?php the_sub_field('meal__time'); ?></strong>
										</p>
									</div><!-- /.o-grid__item -->
								</div><!-- /.o-grid -->
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
				</ol>
			</div><!-- /.o-container -->
		</main><!-- /.o-panel -->
	<?php endif; ?>


<?php get_footer(); ?>