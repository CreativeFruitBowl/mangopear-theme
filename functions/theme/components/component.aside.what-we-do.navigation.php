<?php

	/**
	 * Output the What we do sidebar navigation component
	 *
	 * A simple component that shows a navigation that details the services
	 * we offer. This component is not CMS controlled.
	 *
	 * @category 	Theme output
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	
	function mangopear_component__what_we_do__nav() {

?>


	<section class="o-pod">
		<header class="o-pod__header  o-pod__header--padded">
			<h2 class="c-resource__links-title">What we do:</h2>
		</header>


		<div class="o-pod__content">
			<nav class="o-nav  o-nav--collections  o-nav--services">
				<h3 class="o-nav__title"><span class="o-nav__title-overflow">Marketing consultation:</span></h3>
				<ul class="o-nav__list">
					<li class="o-nav__item"><a href="<?php echo get_permalink(774); ?>" class="o-nav__link"><strong>Marketing campaigns:</strong><br> Design, development and publication</a></li>
					<li class="o-nav__item"><a href="<?php echo get_permalink(775); ?>" class="o-nav__link"><strong>Digital strategy:</strong><br> Analyse, review and enhance</a></li>
				</ul>


				<h3 class="o-nav__title"><span class="o-nav__title-overflow">Design &amp; review:</span></h3>
				<ul class="o-nav__list">
					<li class="o-nav__item"><a href="<?php echo get_permalink(); ?>" class="o-nav__link"><strong>Brand re-invention:</strong><br> Consultation, design and execution</a></li>
					<li class="o-nav__item"><a href="<?php echo get_permalink(); ?>" class="o-nav__link">Something</a></li>
				</ul>


				<h3 class="o-nav__title"><span class="o-nav__title-overflow">Public transport consultation:</span></h3>
				<ul class="o-nav__list">
					<li class="o-nav__item"><a href="<?php echo get_permalink(769); ?>" class="o-nav__link">The complete branding experience</a></li>
					<li class="o-nav__item"><a href="<?php echo get_permalink(770); ?>" class="o-nav__link">Website consultation &amp; creation</a></li>
					<li class="o-nav__item"><a href="<?php echo get_permalink(771); ?>" class="o-nav__link"><strong>Route marketing:</strong><br> Branding, timetables &amp; route maps</a></li>
				</ul>
			</nav>
		</div><!-- /.o-pod__content -->


		<footer class="o-pod__footer  o-pod__footer--padded">
			<p>
				<a href="/what-we-do/" class="o-button  o-button--secondary">
					<span class="o-button__text">Read more about what we do</span>
					<svg class="o-button__icon--right  o-icon--chevron--right" viewBox="0 0 16 16" width="14" height="14">
						<path fill="currentColor" d="M.156 0l.125.125 7.906 7.875-8 8h5.625l6.594-6.594 1.438-1.406-1.438-1.406-6.563-6.594h-5.688z"></path>
					</svg>
				</a>
			</p>
		</footer>
	</section><!-- /.o-pod -->


<?php } ?>