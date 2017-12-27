<?php

	/**
	 * [Core template name]	Header (Partial)
	 *
	 * This is the core header file that is included in all of the WordPress 
	 * templates used throughout the theme. This file contains the HTML that
	 * makes up the top of every website page.php.
	 *
	 * You should note the `wp_header();` hook that plugins and WordPress core
	 * may use to add additional HTML and stylesheets and/or JavaScript 
	 * files to the website.
	 *
	 * Please note: You should enqueue stylesheets and JavaScript documents
	 * - DO NOT simply insert them at the bottom of this document.
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Please note: The <!DOCTYPE HTML> element CAN NOT have any characters before it
	 * 				otherwise there will be styling issues with the rendered website.
	 */
	
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
		

		<!-- Make this site responsive, dude -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/favicon.ico">
		<link rel="apple-touch-icon"                  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="57x57"    href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72"    href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76"    href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114"  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120"  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144"  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152"  href="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-152x152.png">
		<meta name="apple-mobile-web-app-title"      content="Mangopear creative - Design. Development. Consultancy.">
		<meta name="application-name"                content="Mangopear creative - Design. Development. Consultancy.">
		<meta name="msapplication-TileColor"         content="#129da9">
		<meta name="msapplication-TileImage"         content="<?php echo get_template_directory_uri(); ?>/resources/images/favicon/apple-touch-icon-144x144.png">
		<meta name="theme-color"                     content="#129da9">
		

		<?php wp_head(); ?>
	</head>





	<body <?php body_class(); ?>>
		<header class="c-main-header  js-main-header  has-transition  u-clearfix">
			<div class="c-main-header__toggle  c-main-header__cell  c-main-header__cell--left" style="padding-right: 15px;">
				<input type="checkbox" name="js-nav-toggle--main" id="js-nav-toggle--main" class="c-nav-toggle__input  js-nav-toggle__input">
				<label class="c-nav-toggle__label  js-nav-toggle__label" for="js-nav-toggle--main" tabindex="1">
					<i class="o-icon  o-icon--navigation"><span class="c-navigation-icon__bar--one"></span><span class="c-navigation-icon__bar--two"></span><span class="c-navigation-icon__bar--three"></span></i>
					<span class="u-invisible">Toggle navigation</span>
				</label><!-- /.c-nav-toggle__label -->


				<nav class="o-nav  o-nav--main  js-nav-to-open  nav-to-open--main">
					<ul class="o-nav__list">
						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/" class="o-nav__link" title="The home of Mangopear creative">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
								</svg>
								<span class="o-nav__label">Home</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/what-we-do/" class="o-nav__link" title="Read about what we do">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
								</svg>
								<span class="o-nav__label">What we do</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/our-work/" class="o-nav__link" title="View our portfolio and case studies">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M10 18h5V5h-5v13zm-6 0h5V5H4v13zM16 5v13h5V5h-5z"/>
								</svg>
								<span class="o-nav__label">Our work</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/about/" class="o-nav__link" title="Read all about Mangopear creative">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M5.5 22v-7.5H4V9c0-1.1.9-2 2-2h3c1.1 0 2 .9 2 2v5.5H9.5V22h-4zM18 22v-6h3l-2.54-7.63C18.18 7.55 17.42 7 16.56 7h-.12c-.86 0-1.63.55-1.9 1.37L12 16h3v6h3zM7.5 6c1.11 0 2-.89 2-2s-.89-2-2-2-2 .89-2 2 .89 2 2 2zm9 0c1.11 0 2-.89 2-2s-.89-2-2-2-2 .89-2 2 .89 2 2 2z"/>
								</svg>
								<span class="o-nav__label">About Mangopear</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/contact/" class="o-nav__link" title="Get in touch with us">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
								</svg>
								<span class="o-nav__label">Contact us</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://account.mangopear.co.uk" class="o-nav__link" title="<?php echo (!is_user_logged_in()) ? 'Log in to your account' : 'View your account dashboard'; ?>">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
								</svg>
								<span class="o-nav__label"><?php echo (!is_user_logged_in()) ? 'Log in to your account' : 'View your account dashboard'; ?></span>
							</a>
						</li>


						<li class="o-nav__divider">Our blogs</li>


						<li class="o-nav__item">
							<a href="https://coding.mangopear.co.uk" class="o-nav__link" title="A collection of useful resources">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"/>
								    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 10l-2.5-1.5L15 12V4h5v8z"/>
								</svg>
								<span class="o-nav__label">Useful resources</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://witterings.mangopear.co.uk/" class="o-nav__link" title="Our thoughts on buses, trains and all things transport">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"/>
								    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 10l-2.5-1.5L15 12V4h5v8z"/>
								</svg>
								<span class="o-nav__label">Witterings from Mangopear</span>
							</a>
						</li>


						<li class="o-nav__item">
							<a href="https://mangopear.co.uk/writing/" class="o-nav__link" title="Read our latest press releases & news articles">
								<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
									<path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"/>
								    <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 10l-2.5-1.5L15 12V4h5v8z"/>
								</svg>
								<span class="o-nav__label">Press &amp; latest news</span>
							</a>
						</li>
					</ul>
				</nav>


				<div class="c-nav-toggle__background  js-nav-toggle__background"></div>
			</div><!-- /.c-main-header__toggle -->





			<a href="<?php echo get_site_url(); ?>" class="c-main-header__button  c-main-header__button--left  o-button  o-button--just-icon  c-main-header__cell  c-main-header__cell--left">
				<svg class="o-icon  o-icon--logo" height="35" width="35" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#mangopear"/></svg>
				<span class="u-invisible">Mangopear creative</span>
			</a>





			<form role="search" method="get" action="<?php bloginfo('url');?>" class="c-search__form  c-main-header__cell  c-main-header__cell--center">
				<input type="hidden" value="Search">
				<input type="text" name="s" value="" class="c-search__input" placeholder="Search mangopear creative" data-swplive="true">

				<button class="c-search__submit  o-button">
					<svg class="o-icon--search" height="32" width="32" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#search"/></svg>
					<span class="u-hide">Search</span>
				</button>
			</form>





			<div class="c-main-header__toggle--account  c-main-header__cell  c-main-header__cell--right">
				<input type="checkbox" name="js-nav-toggle--account" id="js-nav-toggle--account" class="c-nav-toggle__input  js-nav-toggle__input">
				<label class="c-nav-toggle__label  js-nav-toggle__label" for="js-nav-toggle--account" tabindex="1">
					<svg class="o-icon  o-icon--account-navigation" height="32" width="32" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#person"/></svg>
					<span class="u-invisible">Toggle navigation</span>
				</label><!-- /.c-nav-toggle__label -->


				<nav class="o-nav  o-nav--main  o-nav--account  js-nav-to-open  nav-to-open--account">
					<?php if (!is_user_logged_in()) : ?>
						<div class="c-header__login-form">
							<div class="c-header-login__form-wrapper">
								<h2>Log in now:</h2>
								<?php mangopear_output_login_form($redirect_url = '', $placeholder = true); ?>
							</div><!-- /.c-header-login__form-wrapper -->


							<div class="c-header-login__quick-wrapper">
								<h3>Quick log in:</h3>
								<?php mangopear_social_login_buttons(get_permalink()); ?>
								<p><em>Don't worry, nothing will be posted to your social account.</em></p>
							</div><!-- /.c-header-login__quick-wrapper -->
						</div>

					<?php else : ?>
						<ul class="o-nav__list">
							<li class="o-nav__item">
								<a href="/account/" class="o-nav__link">
									<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
									</svg>
									<span class="o-nav__label">View your account dashboard</span>
								</a>
							</li>


							<?php if (current_user_can('manage_options')) : ?>
								<li class="o-nav__item">
									<a href="/wp-admin/" target="_blank" class="o-nav__link">
										<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
										</svg>
										<span class="o-nav__label">Go to WordPress dashboard</span>
									</a>
								</li>
							<?php endif; ?>


							<?php if (current_user_can('manage_options')) : ?>
								<li class="o-nav__item">
									<a href="<?php echo get_edit_post_link($post->ID); ?>" target="_blank" class="o-nav__link">
										<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
										</svg>
										<span class="o-nav__label">Edit this post</span>
									</a>
								</li>
							<?php endif; ?>
							

							<li class="o-nav__item">
								<a href="<?php echo wp_logout_url(get_permalink()); ?>" class="o-nav__link">
									<svg fill="currentColor" class="o-nav__icon" viewBox="0 0 24 24" height="32" width="32">
										<path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>
									</svg>
									<span class="o-nav__label">Log out</span>
								</a>
							</li>
						</ul>

					<?php endif; ?>
				</nav>


				<div class="c-nav-toggle__background  js-nav-toggle__background"></div>
			</div><!-- /.c-main-header__toggle -->
		</header>