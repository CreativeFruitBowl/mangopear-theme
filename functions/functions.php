<?php

	/**
	 * Include MangUI Startr functions and additional Hildon theme functions.
	 *
	 * These functions and filters might be extended from functions, classes and filters found deeper
	 * within this folder.
	 *
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	1.0.0
	 */


	/**
	 * Contents
	 *
	 * [1]	MangUI Startr theme setup
	 * [2]	WooCommerce support
	 */
	

	/**
	 * [1]	MangUI Startr theme setup
	 *
	 * 		[a]	Core theme setup function
	 * 		[b]	Sub file: Enqueue and dequeue scripts/styles
	 * 		[c]	Sub file: Hide admin pages
	 * 		[d]	Sub file: Remove WP default for image links
	 * 		[e]	Sub file: Setup default widgets
	 * 		[f]	Sub file: Amend WYSIWYG <img> HTML output
	 * 		[g]	Sub file: Output breadcrumbs
	 * 		[h]	Sub file: Remove query string from static resources
	 * 		[i]	Sub file: Remove read more jump links
	 */
	
	require_once get_template_directory() . '/functions/mangui/mangui.startr.setup.php'; // [a]
	require_once get_template_directory() . '/functions/mangui/mangui.filter.enqueue-dequeue.php'; // [b]
	require_once get_template_directory() . '/functions/mangui/mangui.filter.hide-admin-pages.php'; // [c]
	require_once get_template_directory() . '/functions/mangui/mangui.filter.no-image-links.php'; // [d]
	require_once get_template_directory() . '/functions/mangui/mangui.filter.widgets.php'; // [e]
	require_once get_template_directory() . '/functions/mangui/mangui.filter.image-html.php'; // [f]
	require_once get_template_directory() . '/functions/mangui/mangui.output.breadcrumbs.php'; // [g]
	require_once get_template_directory() . '/functions/mangui/mangui.return.query-strings.php'; // [h]
	require_once get_template_directory() . '/functions/mangui/mangui.return.read-more.php'; // [i]





	/**
	 * [2]	WooCommerce suppport
	 *
	 * 		[a]	Declare theme support for WooCommerce
	 */
	
	require_once get_template_directory() . '/functions/theme/mangopear.woocommerce.php';





	/**
	 * [3]	Hildon shortcodes
	 *
	 * 		[a]	Buttons
	 */
	
//	require_once get_template_directory() . '/functions/theme/shortcodes/mangopear.shortcode.buttons.php';





	/**
	 * [4]	Other useful functions
	 *
	 * 		[a]	Add admin menu seperator
	 */
	
//	require_once get_template_directory() . '/functions/theme/functions/mangopear.filter.add-admin-menu-seperator.php';





	/**
	 * [5]	Mangopear theme specific functions
	 *
	 * 		[a]	Output page title
	 * 		[b]	Output page content loop
	 * 		[c]	Output social login buttons
	 * 		[d]	Output log in form
	 */
	
	require_once get_template_directory() . '/functions/theme/functions/mangopear.output.page-title.php'; // [a]
	require_once get_template_directory() . '/functions/theme/functions/mangopear.output.page-content.php'; // [b]
	require_once get_template_directory() . '/functions/theme/functions/mangopear.output.account.social-login-buttons.php'; // [c]
	require_once get_template_directory() . '/functions/theme/functions/mangopear.output.account.login.php'; // [d]
	require_once get_template_directory() . '/functions/theme/functions/mangopear.filter.redirect-not-logged-in-users.php'; // [d]





	/**
	 * [6]	Mangopear flexible content panels
	 *
	 * 		[a]	Call to action: Default
	 */
	
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.call-to-action.default.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.call-to-action.alternative.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.portfolio.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.services-we-offer.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.availability.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.testimonial.jeakins.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.testimonial.edge.php';
	require_once get_template_directory() . '/functions/theme/flexible-panels/mangopear.flexible-panel.testimonial.hildon.generic.php';





	/**
	 * [7]	Mangopear components
	 *
	 * 		[a]	Visit website sidebar component for portfolios
	 */
	
	require_once get_template_directory() . '/functions/theme/components/component.aside.portfolio.visit-website.php';
	require_once get_template_directory() . '/functions/theme/components/component.aside.portfolio.visit-website.default-usage.php';
	require_once get_template_directory() . '/functions/theme/components/component.aside.what-we-do.navigation.php';
	require_once get_template_directory() . '/functions/theme/components/component.social-icons.php';