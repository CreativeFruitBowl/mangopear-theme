<?php

	/**
	 * Core template: Error 404
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

?>


	<header class="o-panel  o-panel--title">
		<div class="o-container">
			<h1 class="c-page-title">Whoops!</h1>
		</div>
	</header>


	<main class="o-panel">
		<div class="o-container">
			<div class="o-container  o-container--optimise-readability  o-container--align-left">
				<h2>It looks as though there's an issue here.</h2>
				<p>To be precise, it's an error with the status code 404. <strong>That means the page you tried visiting does not exist.</strong></p>
				<p>We would suggest checking the link you tried visiting to make sure it looks correct and is spelt correctly.</p>
				<p>If you still can't access the content you're looking for, let us know <a href="https://twitter.com/MangopearUK" target="_blank">on Twitter</a> or by <a href="/contact/">contacting us</a>. Alternatively, you could search our website to find the content you're looking for.</p>
			</div><!-- /.o-container -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->


<?php get_footer(); ?>