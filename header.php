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
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
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


		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-1323095336194826",
				enable_page_level_ads: true
			});
		</script>
	</head>





	<body <?php body_class(); ?>>
		<header class="c-main-header  js-main-header  has-transition  u-clearfix">
			<div class="c-main-header__toggle  c-main-header__cell  c-main-header__cell--left">
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





			<a href="https://mangopear.co.uk/" class="c-main-header__button  c-main-header__button--left  o-button  o-button--just-icon  c-main-header__cell  c-main-header__cell--left">
				<svg width="182" height="35" viewBox="0 0 242 60" enable-background="new 0 0 242 60" xml:space="preserve" class="o-icon  o-icon--logo">
					<g class="c-logo__ident">
						<path fill="currentColor" d="M27.3,60c-1.3,0-2.6-0.3-3.7-1L3.7,47.7C1.4,46.4,0,43.9,0,41.3V18.7c0-2.6,1.4-5.1,3.7-6.4L23.5,1 c1.1-0.6,2.4-1,3.7-1c1.3,0,2.6,0.3,3.7,1l19.8,11.3c2.3,1.3,3.7,3.8,3.7,6.4v22.6c0,2.6-1.4,5.1-3.7,6.4L31,59 C29.9,59.7,28.6,60,27.3,60z M27.3,2.7c-0.8,0-1.6,0.2-2.3,0.6L5.1,14.7c-1.4,0.8-2.3,2.4-2.3,4v22.6c0,1.6,0.9,3.2,2.3,4 l19.8,11.3c1.4,0.8,3.3,0.8,4.7,0l19.8-11.3c1.4-0.8,2.3-2.4,2.3-4V18.7c0-1.6-0.9-3.2-2.3-4L29.6,3.4C28.9,3,28.1,2.7,27.3,2.7z"/>
						<g>
							<path fill="currentColor" d="M41.9,28.5v9.9H36v-9c0-2.5-1.2-3.6-3.1-3.6c-0.9,0-1.8,0.4-2.7,1.4c0,0.4,0.1,0.9,0.1,1.3v9.9h-5.8v-9 c0-2.5-1.2-3.6-3.1-3.6c-0.9,0-1.8,0.4-2.6,1.5v11.1h-5.8V21h5.8v1c1.2-1,2.4-1.6,4.4-1.6c2.2,0,4.1,0.8,5.4,2.3c1.8-1.6,3.6-2.3,6.2-2.3C38.8,20.5,41.9,23.5,41.9,28.5z"/>
						</g>
					</g>
					<g class="c-logo__mangopear">
						<path fill="currentColor" d="M98.4,28.8v8.4h-5v-7.6c0-2.1-1-3.1-2.7-3.1c-0.8,0-1.5,0.3-2.3,1.2c0,0.4,0.1,0.7,0.1,1.1v8.4h-4.9v-7.6 c0-2.1-1-3.1-2.7-3.1c-0.8,0-1.5,0.4-2.2,1.3v9.4h-4.9V22.6h4.9v0.9c1-0.8,2-1.3,3.7-1.3c1.9,0,3.4,0.7,4.5,2c1.6-1.4,3.1-2,5.3-2 C95.8,22.1,98.4,24.7,98.4,28.8z"/>
						<path fill="currentColor" d="M117.2,37.2h-4.9v-0.8c-1.1,0.7-2.4,1.1-4.1,1.1c-4,0-7.4-3.3-7.4-7.6c0-4.4,3.4-7.6,7.4-7.6 c1.6,0,3,0.4,4.1,1.1v-0.8h4.9V37.2z M112.3,32.1v-4.5c-0.9-1.1-2-1.4-3.1-1.4c-2,0-3.5,1.6-3.5,3.7s1.5,3.6,3.5,3.6 C110.3,33.5,111.3,33.2,112.3,32.1z"/>
						<path fill="currentColor" d="M135.9,28.8v8.4h-5v-7.6c0-2.1-1.1-3.1-2.7-3.1c-0.9,0-1.9,0.5-2.7,1.5v9.2h-4.9V22.6h4.9v1 c1.2-0.9,2.5-1.4,4.1-1.4C133.3,22.1,135.9,24.7,135.9,28.8z"/>
						<path fill="currentColor" d="M154.5,37c0,4.6-3.3,7.2-7.9,7.2c-4.5,0-7.8-2.5-8-6.3h4.9c0.2,1.4,1.3,2.2,3.1,2.2c1.7,0,3-1,3-3v-1.4 c-1.1,0.6-2.4,1-4,1c-4,0-7.4-3.2-7.4-7.1c0-4.5,3.4-7.5,7.4-7.5c1.6,0,2.9,0.4,4,1.1v-0.6h4.9V37z M149.6,31.4v-4 c-0.9-1-2-1.4-3.1-1.4c-2,0-3.5,1.4-3.5,3.5c0,1.6,1.5,3.2,3.5,3.2C147.6,32.8,148.6,32.5,149.6,31.4z"/>
						<path fill="currentColor" d="M173.2,29.9c0,4.5-3.4,7.8-8,7.8s-8-3.3-8-7.8c0-4.4,3.4-7.6,8-7.6S173.2,25.5,173.2,29.9z M168.5,29.9 c0-1.9-1.3-3.4-3.3-3.4c-2,0-3.4,1.5-3.4,3.4c0,2,1.3,3.5,3.4,3.5C167.2,33.4,168.5,31.9,168.5,29.9z"/>
						<path fill="currentColor" d="M192.3,29.9c0,4.3-3.4,7.6-7.4,7.6c-1.6,0-3-0.4-4.1-1.1V44h-4.9V22.6h4.9v0.8c1.1-0.7,2.4-1.1,4.1-1.1 C188.9,22.2,192.3,25.5,192.3,29.9z M187.4,29.9c0-2-1.5-3.7-3.5-3.7c-1.1,0-2.2,0.3-3.1,1.4v4.5c0.9,1.1,2,1.4,3.1,1.4 C185.9,33.5,187.4,31.9,187.4,29.9z"/>
						<path fill="currentColor" d="M209.6,31.2L209.6,31.2l-10.5,0.1c0.4,1.3,1.4,2.4,3.3,2.4c1,0,1.8-0.4,2.3-1.1h4.9c-0.7,3-3.5,4.9-7.2,4.9 c-4.9,0-8.1-3.2-8.1-7.7c0-4.4,3.1-7.6,7.9-7.6c4.3,0,7.6,2.9,7.6,7.3C209.7,30.1,209.7,30.7,209.6,31.2z M199,28.4h6 c-0.3-1.6-1.3-2.4-2.9-2.4C200.5,26,199.4,27,199,28.4z"/>
						<path fill="currentColor" d="M228.1,37.2h-4.9v-0.8c-1.1,0.7-2.4,1.1-4.1,1.1c-4,0-7.4-3.3-7.4-7.6c0-4.4,3.4-7.6,7.4-7.6 c1.6,0,3,0.4,4.1,1.1v-0.8h4.9V37.2z M223.2,32.1v-4.5c-0.9-1.1-2-1.4-3.1-1.4c-2,0-3.5,1.6-3.5,3.7s1.5,3.6,3.5,3.6 C221.2,33.5,222.3,33.2,223.2,32.1z"/>
						<path fill="currentColor" d="M241.5,27c-2.4,0.1-3.9,0.7-5.1,1.9v8.4h-4.9V22.6h4.9v1.6c1.3-1.1,2.9-1.8,5.1-1.8V27z"/>
					</g>
					<g class="c-logo__creative">
						<path fill="currentColor" d="M192.6,48.3h1c-0.3,1.4-1.5,2.4-3.1,2.4c-2,0-3.5-1.5-3.5-3.5c0-1.9,1.5-3.5,3.5-3.5c1.6,0,2.9,1,3.1,2.4 h-1c-0.2-0.9-1-1.5-2.1-1.5c-1.5,0-2.5,1.2-2.5,2.6c0,1.4,1,2.6,2.5,2.6C191.6,49.8,192.4,49.2,192.6,48.3z"/>
						<path fill="currentColor" d="M196.6,45c0.6-0.8,1.5-1.3,2.6-1.3v0.9c-1.1,0-2,0.6-2.6,1.5v4.3h-1v-6.6h1V45z"/>
						<path fill="currentColor" d="M206.8,47.6L206.8,47.6L206.8,47.6h-5.7c0.1,1.3,1.1,2.3,2.5,2.3c0.9,0,1.6-0.4,1.9-1h1.1 c-0.4,1.1-1.6,1.9-3,1.9c-2,0-3.5-1.5-3.5-3.5c0-1.9,1.4-3.5,3.5-3.5c1.9,0,3.2,1.5,3.2,3.4C206.9,47.3,206.9,47.4,206.8,47.6z M201.1,46.8h4.7c-0.1-1.3-1-2.3-2.3-2.3C202.2,44.6,201.3,45.6,201.1,46.8z"/>
						<path fill="currentColor" d="M215.3,50.5h-1v-0.7c-0.6,0.6-1.4,0.9-2.4,0.9c-1.9,0-3.4-1.5-3.4-3.5c0-1.9,1.5-3.5,3.4-3.5 c1,0,1.8,0.3,2.4,0.9v-0.7h1V50.5z M214.3,48.6v-2.8c-0.6-0.8-1.4-1.2-2.3-1.2c-1.5,0-2.6,1.2-2.6,2.6c0,1.4,1.1,2.6,2.6,2.6 C212.9,49.8,213.7,49.4,214.3,48.6z"/>
						<path fill="currentColor" d="M222.1,50.5c-0.6,0.2-1,0.2-1.4,0.2c-1.5,0-2.3-0.9-2.3-2.6v-3.4h-1.8v-0.8h1.8v-2.4h1v2.4h2.5v0.8h-2.5 v3.4c0,1.2,0.5,1.7,1.5,1.7c0.3,0,0.8-0.1,1.1-0.2L222.1,50.5z"/>
						<path fill="currentColor" d="M223.9,41.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7 C224.2,42.1,223.9,41.8,223.9,41.4z M225.1,50.5h-1v-6.6h1V50.5z"/>
						<path fill="currentColor" d="M230.8,50.5h-0.9l-3.2-6.6h1.1l2.6,5.4l2.6-5.4h1.1L230.8,50.5z"/>
						<path fill="currentColor" d="M241.4,47.6L241.4,47.6L241.4,47.6h-5.7c0.1,1.3,1.1,2.3,2.5,2.3c0.9,0,1.6-0.4,1.9-1h1.1 c-0.4,1.1-1.6,1.9-3,1.9c-2,0-3.5-1.5-3.5-3.5c0-1.9,1.4-3.5,3.5-3.5c1.9,0,3.2,1.5,3.2,3.4C241.5,47.3,241.5,47.4,241.4,47.6z M235.7,46.8h4.7c-0.1-1.3-1-2.3-2.3-2.3C236.8,44.6,235.9,45.6,235.7,46.8z"/>
					</g>
				</svg>


				<span class="u-invisible">Mangopear creative</span>
			</a>





			<form role="search" method="get" action="<?php bloginfo('url');?>" class="c-search__form  c-main-header__cell  c-main-header__cell--center">
				<input type="hidden" value="Search">
				<input type="text" name="s" value="" class="c-search__input" placeholder="Search mangopear creative" data-swplive="true">

				<button class="c-search__submit  o-button">
					<svg class="o-icon--search" viewBox="0 0 32 32" width="20" height="20">
						<path class="c-search__glass" fill="currentColor" d="M30.2,26.1l-5.4-5.4c1.5-2.1,2.3-4.7,2.3-7.5C27.1,6,21.2,0.1,14,0.1C6.7,0.1,0.8,6,0.8,13.2c0,7.3,5.9,13.2,13.1,13.2c2,0,3.9-0.4,5.6-1.2l5.8,5.8c0.6,0.6,1.5,1,2.4,1c0.9,0,1.8-0.4,2.4-1C31.5,29.6,31.5,27.4,30.2,26.1zM6.1,13.2c0-4.4,3.5-7.9,7.9-7.9c4.4,0,7.9,3.5,7.9,7.9c0,4.4-3.5,7.9-7.9,7.9C9.6,21.1,6.1,17.6,6.1,13.2z"/>
					</svg>
				</button>
			</form>





			<div class="c-main-header__toggle--account  c-main-header__cell  c-main-header__cell--right">
				<input type="checkbox" name="js-nav-toggle--account" id="js-nav-toggle--account" class="c-nav-toggle__input  js-nav-toggle__input">
				<label class="c-nav-toggle__label  js-nav-toggle__label" for="js-nav-toggle--account" tabindex="1">
					<svg class="o-icon  o-icon--account-navigation" fill="currentColor" viewBox="0 0 24 24" height="32" width="32">
						<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
					</svg>
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