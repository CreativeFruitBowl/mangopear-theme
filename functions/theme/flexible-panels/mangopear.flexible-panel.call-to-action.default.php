<?php
	
	/**
	 * Flexible content panel: Call to action - Default version
	 */
	
	function mangopear_panel_cta_default($args = array()) {
		mangopear_panel_cta($args);
	}


	function mangopear_panel_cta($args = array()) {
		$defaults = array(
			'title'			=> 'Get your free consultation now...',
			'content'		=> 'It\'s rather simple, all you need to do is get in touch with us and we\'ll set up a meeting with you and your team.',
			'url'			=> '/contact/hire/',
			'button_text'	=> 'Get in touch',
		);


		$args = wp_parse_args($args, $defaults);

?>

		<footer class="o-panel  o-panel--hire-me">
			<div class="o-container">
				<div class="o-grid  o-grid--middle">
					<div class="o-grid__item  u-three-quarters  u-portable--one-whole  c-hire-me__content">
						<h2 class="c-hire-me__heading"><?php echo $args['title']; ?></h2>
						<p class="c-hire-me__text"><?php echo $args['content']; ?></p>
					</div><!-- /.grid__item -->


					<div class="o-grid__item  u-one-quarter  u-portable--one-whole  c-hire-me__call-to-action">
						<a href="<?php echo $args['url']; ?>" class="o-button  o-button--primary  o-button--call-to-action">
							<span class="o-button__text"><?php echo $args['button_text']; ?></span>
							<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
								<rect fill="currentColor" y="16.5" width="31.3" height="3"/>
								<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "/>
							</svg>
						</a><!-- /.hire-me__button -->
					</div><!-- /.o-grid__item -->
				</div><!-- /.o-grid -->
			</div><!-- /.o-container -->
		</footer><!-- /.o-panel -->


	<?php } ?>