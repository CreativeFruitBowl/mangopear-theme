<?php

	/**
	 * Template name: [Account] Dashboard
	 *
	 * This template will show a user their account dashboard, providing they're logged in to the 
	 * website. If the user is not logged in, the user will be shown the log in form.
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


	/**
	 * Output page title
	 *
	 * @see /themes/mangopear/functions/source/mangopear/mangopear.output.page-title.php
	 */
	
	mangopear_output_page_title();
	
?>


	<main class="o-panel">
		<div class="o-container">
			<?php

				/**
				 * Output error message if log in failed
				 */
				
				if ($_GET['login-status'] === 'failed') :
					echo '<p class="o-message  o-message--negative"><strong>Failed to log you in.</strong> Please double check your username and password are correct and try again.</p>';
				endif;

			?>





			<?php if (!is_user_logged_in()) : ?>
				<div class="o-grid">
					<div class="o-grid__item  u-one-half  u-portable--one-whole">
						<h2>Log in to your account:</h2>
						<?php mangopear_output_login_form(); ?>
					</div><!-- /.o-grid__item -->



					<div class="o-grid__item  u-one-half  u-portable--one-whole">
						<h2>Quick log in:</h2>
						<?php mangopear_social_login_buttons(get_permalink()); ?>
						<p class="c-lede">The quickest and easiest way to log in to the mangopear website is by using one of your social media accounts.</p>
						<p><em>Don't worry, nothing will be posted to your social account.</em></p>
					</div><!-- /.o-grid__item -->
				</div><!-- /.o-grid -->





			<?php else : ?>
				<div class="o-grid">
					<div class="o-grid__item  u-one-whole">
						<h2>Welcome to your dashboard:</h2>
					</div><!-- /.o-grid__item -->





					<div class="o-grid__item  u-one-half  u-portable--one-whole">
						<a href="/account/finance/retainer/" class="o-button  o-button--primary  o-button--positive">
							<span class="o-button__text">Your retainer</span>
							<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
								<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
								<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
							</svg>
						</a>
					</div>
				</div><!-- /.o-grid -->





			<?php endif; ?>
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->





<?php get_footer(); ?>