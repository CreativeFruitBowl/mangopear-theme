<?php

	/**
	 * Template name: Home
	 *
	 * @category    template
	 * @package     mangopear
	 * @author      Andi North <andi@mangopear.co.uk>
	 * @copyright   2018 Mangopear Limited
	 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @since       1.0.0
	 * @version     4.0.0
	 */


	/**
	 * CHANGELOG
	 *
	 * @version 4.0.0
	 *          Re-wrote template
	 */


	get_header();

?>




	<div class="c-welcome">
		<div class="c-welcome__content">
			<div class="c-welcome__mangopear">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" width="300" height="200" xml:space="preserve" class="u-mangopear-welcome-logo">
					<path class="u-welcome-mangopear__stroke" style="fill: none; stroke: #004D5D; stroke-width: 6; stroke-miterlimit: 10;" d="M100.2,121.4l0.6-44.1c0.1-4.1,2.3-7.8,5.8-9.8L145.1,46c3.6-2,7.9-1.9,11.4,0.2l37.9,22.5 c3.5,2.1,5.6,5.9,5.6,9.9l-0.6,44.1c-0.1,4.1-2.3,7.8-5.8,9.8L155.1,154c-3.6,2-7.9,1.9-11.4-0.2l-37.9-22.5 C102.3,129.2,100.2,125.5,100.2,121.4z"/>
					<path class="u-welcome-mangopear__m"      style="fill: none;" d="M178.1,97.5v19.3h-11.3V99.3c0-4.8-2.4-7.1-6-7.1c-1.7,0-3.5,0.8-5.1,2.8c0.1,0.8,0.1,1.7,0.1,2.5v19.3h-11.3 V99.3c0-4.8-2.4-7.1-6-7.1c-1.7,0-3.4,0.8-5,2.9v21.6h-11.3V83.1h11.3V85c2.2-1.9,4.6-3,8.3-3c4.2,0,7.9,1.6,10.4,4.6 c3.5-3.2,6.9-4.6,12-4.6C172.1,82,178.1,87.9,178.1,97.5z"/>
				</svg>
			</div><!-- /.c-welcome__mangopear -->
		</div><!-- /.c-welcome__content -->
	</div><!-- /.c-welcome -->





	<main class="main  o-panel  o-panel--gutterless">
		<div class="c-home">
			<h1 class="c-home__title">
				<?php

					$blue_chars = array('h', 'e', 'l', 'l', 'o', '_', 'w', 'o', 'r', 'l', 'd');

					echo '<pre>';
						echo '<span class="c-home__char  c-home__char--green">&gt;| </span>';
						foreach ($blue_chars as $char) { echo '<span class="c-home__char  c-home__char--blue">' . $char . '</span>'; }
						echo '<span class="c-home__char  c-home__char--white">(</span>';
						echo '<span class="c-home__char  c-home__char--white">)</span>';
						echo '<span class="c-home__char  c-home__char--white">;</span>';
					echo '</pre>';

				?>
			</h1>


			<p class="c-home__description">
				We help leading brands and independent companies break the digital mould. If you're looking for passion, dedication, and attention to detail look no further.
			</p>


			<div class="c-home__actions">
				<a href="/what-we-do/" class="o-button  o-button--circular  c-home__action">
					<span class="o-button__text">What we do</span>
					<svg class="o-button__icon" height="24" width="24" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow-right"/></svg>
				</a>

				<span class="c-home__actions-divider">- &nbsp;or&nbsp; -</span>

				<a href="/our-work/" class="o-button  o-button--circular  c-home__action">
					<span class="o-button__text">Our work</span>
					<svg class="o-button__icon" height="24" width="24" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow-right"/></svg>
				</a>
			</div><!-- /.c-home__actions -->
		</div><!-- /.c-home-panel -->
	</main><!-- /.panel -->





	<?php mangopear_panel_services($show_button = true); ?>





	<!-- Web font loading -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,700']
			}
		});
	</script>





	<!-- Google Analytics tracking code -->
	<script async defer>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','/wp-content/themes/mangopear/resources/js/analytics.js','ga');

		ga('create', 'UA-45542791-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>