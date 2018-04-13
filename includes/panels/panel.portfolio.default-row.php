<?php

/**
 * [Mangopear]	Get component: [Portfolio] Default content row
 *
 * This is an ACF flexible row - shown in portfolio items and is the most basic type.
 *
 * @category    filter
 * @package     mangopear
 * @author      Andi North <andi@mangopear.co.uk>
 * @copyright   2018 Mangopear Limited
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @since       4.0.0
 * @version     4.0.0
 */


/**
 * CHANGELOG
 *
 * @version 4.0.0
 *          Init new component
 */


/**
 * CONTENTS
 *
 * [1]  Forbid direct loading of this file
 * [2]	Get global WooCommerce values
 * [3]	Define class
 */


/**
 * [1]	Forbid direct loading of this file
 */

if (! defined('ABSPATH')) { exit; }





/**
 * [3]	Define function
 *
 * 		[a]	Set default values for params
 */

if (! function_exists('mangopear_panel__portfolio__default')) :
	function mangopear_panel__portfolio__default($args = array()) {

		/**
		 * [a]	Set default values for params
		 */
		
		$defaults = array(
			'image'					=> '',
			'image--second'			=> '',
			'content'				=> '',
			'colour--background'	=> '',
			'colour--text'			=> '',
		);


		$args = wp_parse_args($args, $defaults);


		$class__background = ($args['colour--background']) ? 'o-block--has-background' : '';
		$class__typography = ($args['colour--text'])       ? 'o-block--has-coloured-text' : '';

		$style__background = ($args['colour--background']) ? 'background: ' . $args['colour--background'] . ';' : '';
		$style__typography = ($args['colour--text'])       ? 'color: '      . $args['colour--text']       . ';' : '';

?>

		<section class="o-block  <?php echo $class__background . '  ' . $class__typography; ?>" style="<?php echo $style__background . ' ' . $style__typography; ?>">
			<?php if ($args['image']) : ?>
				<?php if ($args['media__format'] == 'double') : ?>
					<div class="o-block__media  o-block__media--double  <?php echo $class__image_padding; ?>">
						<img class="o-block__media__asset" 
						     alt="<?php $args['imaage']['title']; ?>" 
						     src="data:image/gulpif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
						     data-src="<?php echo $args['image']['url']; ?>">


						<img class="o-block__media__asset" 
						     alt="<?php $args['imaage']['title']; ?>" 
						     src="data:image/gulpif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
						     data-src="<?php echo $args['image--second']['url']; ?>">


						<noscript>
							<img class="o-block__media__asset  o-block__media__asset--noscript" alt="<?php $args['imaage']['title']; ?>" src="<?php echo $args['image']['url']; ?>">
							<img class="o-block__media__asset  o-block__media__asset--noscript" alt="<?php $args['imaage--second']['title']; ?>" src="<?php echo $args['image--second']['url']; ?>">
						</noscript>
					</div><!-- /.c-portfolio__image -->


				<?php else : ?>
					<div class="o-block__media  <?php echo $class__image_padding; ?>">
						<img class="o-block__media__asset" 
						     alt="<?php $args['imaage']['title']; ?>" 
						     src="data:image/gulpif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
						     data-src="<?php echo $args['image']['url']; ?>">


						<noscript>
							<img class="o-block__media__asset  o-block__media__asset--noscript" alt="<?php $args['imaage']['title']; ?>" src="<?php echo $args['image']['url']; ?>">
						</noscript>
					</div><!-- /.c-portfolio__image -->
				<?php endif; ?>
			<?php endif; ?>


			<?php if ($args['content']) : ?>
				<div class="o-block__content">
					<div class="o-container  o-container--optimise-readability">
						<?php echo $args['content']; ?>
					</div><!-- /.o-container -->
				</div>
			<?php endif; ?>
		</section>

	<?php } ?>
<?php endif; ?>