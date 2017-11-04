<?php

	/**
	 * Output the visit website component
	 *
	 * A simple component to show a button to visit the website, typically 
	 * for a portfolio piece. The component is styled with an image and has
	 * customisable content.
	 *
	 * Usually, the parameters will be custom field controlled through the template.
	 *
	 * @category 	Theme output
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Parameters
	 *
	 * $strapline		string 	The strapline to be shown on the front end
	 * $type 			string 	Define the type of action to perform
	 * 							[a]	link 		URi prefixed with protocol
	 * 							[b]	download 	A file to download, value should be URi
	 * 							[c]	images 		An array of images from the Gallery ACF field
	 * $action_url		string 	The URi required for $type link
	 * $action_file 	string 	The URi required for $type download
	 * $action_images 	array 	The array containing image data for $type images
	 */
	
	function mangopear_component_visit_website($strapline = '', $type = 'link', $action_url = '', $action_file = '', $action_images = '') {

?>


	<section class="c-visit-website">
		<i class="c-visit-website__icon  c-visit-website__icon--<?php echo $type; ?>">
			<svg fill="currentColor" height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
			    <?php
			    	if ($type == 'link') 			{ echo '<path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>'; }
			    	elseif ($type == 'images') 		{ echo '<path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/>'; }
			    	elseif ($type == 'download') 	{ echo '<path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>'; }
				?>
			</svg>
		</i>





		<p class="c-lede  c-visit-website__content"><?php echo $strapline; ?></p>





		<?php if ($type == 'link' && $action_url != '') : ?>
			<a href="<?php echo $action_url; ?>" class="o-button  o-button--primary  c-visit-website__button" target="_blank">
				 <span class="o-button__text">View this website</span>
				<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24"><rect fill="currentColor" y="16.5" width="31.3" height="3"></rect><polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon></svg>
			</a>
		<?php endif; ?>


		<?php if ($type == 'download' && $action_file != '') : ?>
			<a href="<?php echo $action_file; ?>" class="o-button  o-button--primary  c-visit-website__button" target="_blank">
				 <span class="o-button__text">Download a sample</span>
				<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24"><rect fill="currentColor" y="16.5" width="31.3" height="3"></rect><polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon></svg>
			</a>
		<?php endif; ?>


		<?php if ($type == 'images' && $action_images != array()) : ?>
			<button class="o-button  o-button--primary  c-visit-website__button  js-open-modal" data-modal="js-modal--portfolio-sample" target="_blank">
				 <span class="o-button__text">View a sample</span>
				<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24"><rect fill="currentColor" y="16.5" width="31.3" height="3"></rect><polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon></svg>
			</button>
			<noscript><p>Please enable Javascript to enjoy the full experience. You can alternatively view the samples <?php foreach ($action_images as $image) : ?><a href="<?php echo $image['url']; ?>" target="_blank">here</a> or <?php endforeach; ?> enable Javascript in your browser.</p></noscript>
		<?php endif; ?>
	</section><!-- /.c-portfolio-link -->





	<?php

		/**
		 * Output the modal markup
		 */

	?>

	<?php if ($type == 'images' && $action_images != array()) : ?>
		<div class="o-modal  o-modal--portfolio-sample  js-modal--portfolio-sample  is-hidden">
			<div class="o-modal__background  js--modal__background" data-modal="js-modal--portfolio-sample"></div>


			<div class="o-modal__close">
				<button class="o-button  o-modal__close-button  js--modal__close" data-modal="js-modal--portfolio-sample">
					<i class="o-button__icon">
						<svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
						</svg>
					</i>
					<span class="o-button__text">Close</span>
				</button>
			</div><!-- /.o-modal__close -->





			<div class="o-modal__content">
				<h2 class="o-modal__title">A sample of our work...</h2>


				<ul class="o-modal-gallery">
					<?php foreach ($action_images as $image) : ?>
						<li class="o-modal-gallery__slide">
							<div class="o-modal-gallery__image-wrapper">
								<a href="<?php echo $image['url']; ?>" target="_blank" class="o-modal-gallery__image-link">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
								</a>
							</div>


							<div class="o-container  o-container--optimise-readability">
								<div class="c-lede  o-modal-gallery__description">
									<?php echo wpautop($image['description']); ?>
								</div>
							</div><!-- /.o-container -->
						</li>
					<?php endforeach; ?>
				</ul>
			</div><!-- /.o-modal__content -->
		</div><!-- /.o-modal -->
	<?php endif; ?>


<?php } ?>