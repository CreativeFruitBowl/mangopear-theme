<?php

	/**
	 * Template partial: Footer
	 *
	 * @category 	Templates
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @since   	2.0.0
	 */


	/**
	 * Time to include some flexible panels, temporarily.
	 */

	if (have_rows('flexible-content')):
		while (have_rows('flexible-content')) : the_row();
			if (get_row_layout() == 'panel'):
				$panel_function = get_sub_field('id');

				if 		($panel_function == 'mangopear_panel_cta_default') 			: mangopear_panel_cta_default();
				elseif	($panel_function == 'mangopear_panel_cta_alternative') 		: mangopear_panel_cta_alternative();
				elseif 	($panel_function == 'mangopear_panel_portfolio') 			: mangopear_panel_portfolio($location = 'footer', $title = 'Our work');
				elseif 	($panel_function == 'mangopear_panel_availability') 		: mangopear_panel_availability();
				elseif 	($panel_function == 'mangopear_panel_testimonial_jeakins') 	: mangopear_panel_testimonial_jeakins();
				elseif 	($panel_function == 'mangopear_panel_testimonial_edge') 	: mangopear_panel_testimonial_edge();
				elseif 	($panel_function == 'testimonial_hildon_generic') 			: mangopear_panel_testimonial_hildon_generic();
				endif;


			elseif (get_row_layout() == 'portfolio'):
				mangopear_panel_portfolio(
					$location 		= 'footer', 
					$title 			= 'Our work',
					$parent_id 		= false,
					$portfolio_ids 	= get_sub_field('items')
				);


			endif;
		endwhile;


	else :
		mangopear_panel_cta_default(); 												// Default call to action panel
		mangopear_panel_portfolio($location = 'footer', $title = 'Our work'); 		// Default portfolio panel


	endif;

?>





	<footer class="o-panel  o-panel--main-footer">
		<div class="o-container">
			<div class="o-grid">
				<div class="o-grid__item  u-one-third  u-lap--one-half  u-palm--one-whole">
					<div class="o-content-slot  o-content-slot--footer">
						<a href="https://mangopear.co.uk/contact/" class="o-content-slot__block-link">
							<h2 class="u-hide">Get your free consultation</h2>
							<p class="u-hide">With a free consultation from Mangopear creative, we can work together to ensure your marketing tools are working for you.</p>
						</a>
					</div><!-- /.o-content-slot -->
				</div><!-- /.o-grid__item -->





				<div class="o-grid__item  u-one-third  u-lap--one-half  u-palm--one-whole">
					<div class="c-contact-details">
						<h3 class="c-contact-details__title"><span class="c-contact-details__title-overflow">Call us on:</span></h3>
						<p class="c-lede  c-contact-details__detail"><a href="tel:02380981279">02380 981 279</a></p>
						

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





				<div class="o-grid__item  u-one-third  u-portable--one-whole">
					<div class="c-footer-column">
						<nav class="o-nav  o-nav--collections  o-nav--legal">
							<h3 class="o-nav__title"><span class="o-nav__title-overflow">Useful links:</span></h3>
							<ul class="o-nav__list">
								<li class="o-nav__item"><a href="https://mangopear.co.uk/what-we-do/" class="o-nav__link">What we do</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/our-work/" class="o-nav__link">Our work</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/about/" class="o-nav__link">About Mangopear</a></li>
								<li class="o-nav__item"><a href="https://coding.mangopear.co.uk/" class="o-nav__link">Useful resources</a></li>
								<li class="o-nav__item"><a href="https://witterings.mangopear.co.uk/" class="o-nav__link">Witterings from Mangopear</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/writing/" class="o-nav__link">Press &amp; latest news</a></li>
							</ul>


							<h3 class="o-nav__title"><span class="o-nav__title-overflow">Legal:</span></h3>
							<ul class="o-nav__list">
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/terms-conditions/" class="o-nav__link">Terms &amp; conditions</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/privacy-policy/" class="o-nav__link">Privacy Policy</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/cookie-policy/" class="o-nav__link">Cookie Policy</a></li>
							</ul>
						</nav>


						<p class="c-copyright">&copy; Copyright <?php echo date('Y'); ?> to Mangopear Limited. <br>All rights reserved.</p>
					</div><!-- /.c-footer-column -->
				</div><!-- /.o-grid__item -->
			</div><!-- /.o-grid -->
		</div><!-- /.o-container -->
	</footer>





	<?php wp_footer(); ?>





	<!-- Web font loading -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Merriweather:400,400italic,700,700italic,300italic,300:latin']
			}
		});
	</script>





	<!-- Google Analytics tracking code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45542791-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-45542791-1');
	</script>

</body>
</html>