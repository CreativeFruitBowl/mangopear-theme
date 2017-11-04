<?php

	/**
	 * Links for WP Social Login plugin
	 */
	

	function mangopear_social_login_buttons($url) {

		$social_providers = array(
			array(
				'class' 	=> 'google',
				'title' 	=> 'Sign in easily with your Google account.',
				'string' 	=> 'Google',
				'url-param' => 'Google',
				'svg' 		=> '<svg class="o-button__icon  o-button__icon--left" width="30" height="30" viewBox="0 0 141.7 141.7"><path fill="currentColor" d="M0.4,70.9C-0.5,47.7,19.8,26.3,43,26c11.8-1,23.3,3.6,32.3,11.1c-3.7,4-7.4,8-11.4,11.8 c-7.9-4.8-17.4-8.4-26.6-5.2c-14.8,4.2-23.8,21.7-18.3,36.3c4.5,15.2,23,23.5,37.4,17.1c7.5-2.7,12.4-9.6,14.6-17 c-8.6-0.2-17.2-0.1-25.7-0.3c0-5.1,0-10.2,0-15.3c14.3,0,28.6-0.1,43,0.1c0.9,12.5-1,25.9-9.1,35.9 c-11.1,14.3-31.7,18.5-48.4,12.9C12.9,107.5,0,89.6,0.4,70.9z"/><path fill="currentColor" d="M116.1,51.6c4.2,0,8.5,0,12.8,0c0,4.3,0.1,8.6,0.1,12.8c4.3,0,8.6,0.1,12.8,0.1c0,4.3,0,8.5,0,12.8 c-4.3,0-8.6,0-12.8,0.1c0,4.3-0.1,8.6-0.1,12.8c-4.3,0-8.5,0-12.8,0c0-4.3,0-8.6-0.1-12.8c-4.3,0-8.6-0.1-12.8-0.1 c0-4.3,0-8.5,0-12.8c4.3,0,8.5,0,12.8-0.1C116,60.1,116,55.9,116.1,51.6z"/></svg>',
			),
			
			array(
				'class' 	=> 'linkedin',
				'title' 	=> 'Sign in easily with your LinkedIn account.',
				'string' 	=> 'LinkedIn',
				'url-param' => 'LinkedIn',
				'svg' 		=> '<svg class="o-button__icon  o-button__icon--left" viewBox="0 0 50 50" width="30" height="30"><path fill="#FFFFFF" d="M15.2,42V19.4H7.7V42H15.2z M11.5,16.3c2.6,0,4.3-1.7,4.3-3.9c0-2.2-1.6-3.9-4.2-3.9c-2.6,0-4.2,1.7-4.2,3.9 C7.3,14.6,8.9,16.3,11.5,16.3L11.5,16.3L11.5,16.3z M19.4,42h7.5V29.4c0-0.7,0-1.4,0.2-1.8c0.5-1.3,1.8-2.7,3.9-2.7 c2.7,0,3.8,2.1,3.8,5.1V42h7.5V29c0-6.9-3.7-10.2-8.6-10.2c-4.1,0-5.8,2.3-6.8,3.8h0.1v-3.3h-7.5C19.5,21.5,19.4,42,19.4,42L19.4,42 z"/></svg>',
			),
		);


		foreach ($social_providers as $social_provider) :
			$redirect_url = urlencode($url);
			$login_url = get_site_url() . '/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=' . $social_provider['url-param'] . '&redirect_to=' . $redirect_url;

?>

			<a href="<?php echo $login_url; ?>" class="o-button  o-button--primary  o-button--social  o-button--social-<?php echo $social_provider['class']; ?>" rel="nofollow" title="Use <?php echo $social_provider['title']; ?> to log in to mangopear">
				<?php echo $social_provider['svg']; ?>
				
				
				<span class="o-button__text"><?php echo $social_provider['string']; ?></span>
				

				<svg class="o-button__icon--right  o-icon--chevron-right" viewBox="0 0 36 36" width="24" height="24">
					<rect fill="currentColor" y="16.5" width="31.3" height="3"></rect>
					<polygon fill="currentColor" points="19.2,31.9 17.3,29.6 31.3,18 17.3,6.4 19.2,4.1 36,18 "></polygon>
				</svg>
			</a>


<?php

		endforeach;
	}


?>