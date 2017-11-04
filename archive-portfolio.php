<?php

	/**
	 * Core template: [Archive] Portfolio
	 *
	 * @category 	Additional WordPress template files
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	3.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */
	

	get_header();
	
?>


	<header class="u-clearfix  o-header--portfolio" style="margin-bottom: 3em; background-color: #1CB6C3"><div class="c-portfolio-header__gradient" style="background: #1CB6C3;background: -webkit-radial-gradient(center,ellipse cover,#7FD5E0 0,#1CB6C3 65%);background: -webkit-radial-gradient(center,ellipse,#7FD5E0 0,#1CB6C3 65%);background: radial-gradient(ellipse at center,#7FD5E0 0,#1CB6C3 65%);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7FD5E0',endColorstr='#1CB6C3',GradientType=1);"></div>
		<div class="c-portfolio-header__content">
			<h1 class="c-portfolio-header__title">Our work</h1>
			<h2 class="c-portfolio-header__title--sub">Mangopear creative</h2>
			<h3 class="c-portfolio-header__descriptor">We’re really rather proud of our work here at Mangopear, below is a sample of the work we're proudest of.</h3>
		</div>
	</header>


	<?php mangopear_panel_portfolio($location = 'archive-portfolio', $title = false); ?>
<?php get_footer(); ?>