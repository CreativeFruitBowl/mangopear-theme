<?php


	/**
	 * Only logged in users, please!
	 */
	
	mangopear_redirect_if_not_logged_in();





	/**
	 * Redirect if form is submitted
	 */
	
	if ($_POST['retainer-month'] != "" && $_POST['retainer-year'] != "" && $_POST['retainer-client'] != "") :
		wp_redirect('/account/finance/retainer/?retainer-month=' . $_POST['retainer-month'] . '&retainer-year=' . $_POST['retainer-year'] . '&retainer-client=' . $_POST['retainer-client']);
	elseif ($_POST['retainer-month'] != "" && $_POST['retainer-year'] != "") :
		wp_redirect('/account/finance/retainer/?retainer-month=' . $_POST['retainer-month'] . '&retainer-year=' . $_POST['retainer-year']);
	endif;





	/**
	 * If add retainer entry form submitted, create the new post
	 */
	
	if ($_POST['c-retainers-add__title'] != "" && $_POST['c-retainers-add__duration'] != "") :
		$new_retainer_args = array(
			'post_type'			=> 'retainer',
			'post_author'		=> 2,
			'post_title'		=> $_POST['c-retainers-add__title'],
			'post_status'		=> 'publish',
			'ping_status'		=> 'closed',
		);

		$new_post_id = wp_insert_post($new_retainer_args, $wp_error);
		update_field('duration', $_POST['c-retainers-add__duration'], $new_post_id); // Update ACF duration field
		wp_set_post_terms($new_post_id, $_POST['c-retainers-add__client'], 'retainer__client'); // Assign the client term
	endif;





	/**
	 * Core template: [Archive] Retainer
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
	
	mangopear_output_page_title($show_title = true, $show_breadcrumb = true, $title_content = 'Your retainer');
	
?>


	<main class="o-panel">
		<div class="o-container">
			<?php
				$query_year   = ($_GET['retainer-year'])  ? $_GET['retainer-year']  : date('Y');
				$query_month  = ($_GET['retainer-month']) ? $_GET['retainer-month'] : date('n');
				
				if (get_current_user_id() == 2) {
					$query_client = ($_GET['retainer-client']) ? $_GET['retainer-client'] : '';
				} else {
					$query_client = get_user_meta(get_current_user_id(), 'retainer_client_id', true);					
				}
			?>
			<div class="c-retainers">
				<h2 class="c-retainers__heading">
					Your retainer items:
				</h2>





				<form class="c-retainers__form  u-clearfix" id="retainers">
					<label class="c-retainers__label" for="retainer-month">Find all entries in: </label>
					

					<select class="c-retainers__select" name="retainer-month" id="retainer-month">
						<option value="1" <?php if ($query_month == 1) { echo 'selected'; } ?>>January</option>
						<option value="2" <?php if ($query_month == 2) { echo 'selected'; } ?>>February</option>
						<option value="3" <?php if ($query_month == 3) { echo 'selected'; } ?>>March</option>
						<option value="4" <?php if ($query_month == 4) { echo 'selected'; } ?>>April</option>
						<option value="5" <?php if ($query_month == 5) { echo 'selected'; } ?>>May</option>
						<option value="6" <?php if ($query_month == 6) { echo 'selected'; } ?>>June</option>
						<option value="7" <?php if ($query_month == 7) { echo 'selected'; } ?>>July</option>
						<option value="8" <?php if ($query_month == 8) { echo 'selected'; } ?>>August</option>
						<option value="9" <?php if ($query_month == 9) { echo 'selected'; } ?>>September</option>
						<option value="10" <?php if ($query_month == 10) { echo 'selected'; } ?>>October</option>
						<option value="11" <?php if ($query_month == 11) { echo 'selected'; } ?>>November</option>
						<option value="12" <?php if ($query_month == 12) { echo 'selected'; } ?>>December</option>
					</select>


					<select class="c-retainers__select" name="retainer-year" id="retainer-year">
						<option value="2016" <?php if ($query_month == 2016) { echo 'selected'; } ?>>2016</option>
					</select>


					<?php if (get_current_user_id() == 2) : ?>
						<label class="c-retainers__label  c-retainers__label--for" for="retainer-client"> for: </label>


						<select class="c-retainers__select  c-retainers__select--for" name="retainer-client" id="retainer-client">
							<?php
							
								/**
								 * Loop through the client categories to produce a list of all.
								 */
								
								$client_terms = get_terms('retainer__client', 'orderby=count&hide_empty=0');

								foreach ($client_terms as $term) :
									$term = get_term($term, 'retainer__client', 'OBJECT');
									echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
								endforeach;

							?>
						</select>
					<?php endif; ?>


					<button class="o-button  o-button--primary  c-retainers__button">
						<span class="o-button__text">View retainer entries</span>
					</button>
				</form>





				<?php

					$retainer_args = array(
						'post_type'			=> 'retainer',
						'posts_per_page'	=> -1,
						'date_query'		=> array(
							'year'	=> $query_year,
							'month'	=> $query_month,
						),
						'tax_query'			=> array(
							array(
								'taxonomy'	=> 'retainer__client',
								'field'		=> 'slug',
								'terms'		=> $query_client,
							)
						),
					);


					$retainers = new WP_Query($retainer_args);
					if ($retainers->have_posts()) :
						$retainer__total = 0;

				?>
						<ul class="c-retainers__list">
							<?php while ($retainers->have_posts()) : $retainers->the_post(); $retainer__total = $retainer__total + get_field('duration'); ?>
								<li class="c-retainers__item">
									<div class="c-retainers__grid  o-grid  o-grid--wide  o-grid--middle">
										<div class="o-grid__item  u-one-sixth  u-portable--one-half">
											<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="c-retainers__date">
												<strong class="c-retainers__day"><?php echo get_the_date('j'); ?><sup><?php echo get_the_date('S'); ?></sup></strong>
												<span class="c-retainers__month"><?php echo get_the_date('F'); ?></span>
											</time>
										</div><!-- /.o-grid__item -->


										<div class="o-grid__item  u-one-sixth  u-portable--one-half">
											<p class="c-retainers__duration"><?php the_field('duration'); ?> hours</p>
										</div><!-- /.o-grid__item -->


										<div class="o-grid__item  u-four-sixths  u-portable--one-whole">
											<h3 class="c-retainers__title"><?php the_title(); ?></h3>
										</div><!-- /.o-grid__item -->
									</div><!-- /.o-grid -->
								</li>
							<?php endwhile; ?>


							<li class="c-retainers__item">
								<div class="c-retainers__grid  o-grid  o-grid--wide  o-grid--middle">
									<div class="o-grid__item  u-one-sixth  u-portable--one-half">&nbsp;</div>
									<div class="o-grid__item  u-one-sixth  u-portable--one-half"><p class="c-retainers__duration"><?php echo $retainer__total; ?> hours</p></div>
									<div class="o-grid__item  u-four-sixths  u-portable--one-whole"><h3 class="c-retainers__title">: this month's total hours</h3></div>
								</div><!-- /.o-grid -->
							</li>
						</ul>



					<?php else : ?>
						<p>There are no retainers items to be shown for this month.</p>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div><!-- /.c-retainers -->











			<?php if (get_current_user_id() == 2) : ?>
				<div class="c-retainers__add">
					<h2 class="o-form__title--contact">Add a new retainer entry:</h2>


					<form enctype="multipart/form-data" method="post" class="frm-show-form  o-form  o-form--contact" id="retainers-add">
						<div class="frm_form_fields">
							<fieldset>
								<div class="o-form__field">
									<label for="c-retainers-add__title" class="o-form__label">Entry description: <span class="frm_required">*</span></label>
									<div class="o-form__input"><input type="text" id="c-retainers-add__title" name="c-retainers-add__title" value=""></div>
								</div>


								<div class="o-form__field">
									<label for="c-retainers-add__duration" class="o-form__label">Entry duration: <span class="frm_required">*</span></label>
									<div class="o-form__input"><input type="text" id="c-retainers-add__duration" name="c-retainers-add__duration" value=""></div>
								</div>


								<div class="o-form__field">
									<label for="c-retainers-add__client" class="o-form__label">Entry client: <span class="frm_required">*</span></label>
									<div class="o-form__input">
										<select class="c-retainers__select  c-retainers__select--for" name="c-retainers-add__client" id="c-retainers-add__client">
											<?php
											
												/**
												 * Loop through the client categories to produce a list of all.
												 */
												
												$client_terms = get_terms('retainer__client', 'orderby=count&hide_empty=0');

												foreach ($client_terms as $term) :
													$term = get_term($term, 'retainer__client', 'OBJECT');
													echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
												endforeach;

											?>
										</select>
									</div>
								</div>


								<div class="o-form__submit">
									<div class="o-form__button">
										<button class="o-button  o-button--primary  o-button--positive  o-button--submit">
											<span class="o-button__text">Add new entry</span>
											<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
												<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
												<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
											</svg>
										</button>
									</div>
								</div>
							</fieldset>
						</div>
					</form>
				</div><!-- /.c-retainers__add -->
			<?php endif; ?>
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->





<?php get_footer(); ?>