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
	
	mangopear_output_page_title($show_title = true, $show_breadcrumb = false, $title_content = 'Whoops!');

?>





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





<?php

	/**
	 * Get the footer code
	 */	
	get_footer();

?>