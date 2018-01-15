<?php

	/**
	 * Output the HTML for the login form
	 */
	

	function mangopear_output_login_form($redirect_url = '', $placeholder = false) {

?>

		<form class="o-form" name="loginform" id="loginform" method="post" action="/wp-login.php">
			<fieldset>
				<div class="o-form__field  o-form__field--text">
					<?php if ($placeholder === false) { ?><label class="o-form__label" for="user_login">Username (email address) <span class="o-form__required">*<span class="u-invisible"> (required)</span></span></label><?php } ?>
					<div class="o-form__input"><input type="text" id="user_login" name="log" value=""<?php if ($placeholder === true) { echo ' placeholder="Username (email address) *"'; } ?>></div>
				</div><!-- /.o-form__field -->


				<div class="o-form__field  o-form__field--password">
					<?php if ($placeholder === false) { ?><label class="o-form__label" for="user_pass">Password <span class="o-form__required">*<span class="u-invisible"> (required)</span></span></label><?php } ?>
					<div class="o-form__input"><input type="password" id="user_pass" name="pwd" value=""<?php if ($placeholder === true) { echo ' placeholder="Password *"'; } ?>></div>
				</div><!-- /.o-form__field -->


				<div class="o-form__field  o-form__field--single-checkbox">
					<label class="o-form__label">
						<div class="o-form__input"><input type="checkbox" id="rememberme" name="rememberme" value="forever"></div>
						Keep me logged in
					</label>
				</div><!-- /.o-form__field -->


				<div class="o-form__field  o-form__field--submit">
					<button class="o-button  o-button--primary">
						<span class="o-button__text">Log in now</span>
						<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
							<rect fill="currentColor" y="16.5" width="31.3" height="3"/>
							<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "/>
						</svg>
					</button><!-- /.hire-me__button -->
				</div><!-- /.o-form__field -->


				<?php if ($_GET['redirect_to'] != "") : ?>
					<input type="hidden" name="redirect_to" value="<?php echo $_GET['redirect_to']; ?>"/>
				<?php endif; ?>
			</fieldset>
		</form>


<?php } ?>