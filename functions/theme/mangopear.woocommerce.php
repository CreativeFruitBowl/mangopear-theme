<?php

	/**
	 * This document handles bespoke functionality that is directly related to WooCommerce.
	 *
	 * @package  	hildon
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/hildon/docs/themes/hildon/
	 * @since   	1.0.0
	 */


	/**
	 * Contents
	 *
	 * [1]	Declare theme support for WooCommerce
	 */
	




	/**
	 * [1]	Declare theme support for WooCommerce
	 */
	
	function mangui_woocommerce_support() {
	    add_theme_support('woocommerce');
	}
	
	add_action('after_setup_theme', 'mangui_woocommerce_support');





	/**
	 * [2]	Ajaxify cart button in header
	 */
	
	function mangopear_woocommerce_header_link($fragments) {
		ob_start();

		$html  = '<a href="' . WC()->cart->get_cart_url() . '" class="o-button  o-button--primary  o-button--header  o-button--header-basket" title="View your shopping cart">';
			$html .= '<svg class="o-button__icon  o-button__icon--left  o-icon--basket" fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">';
				$html .= '<path d="M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>';
			$html .= '</svg>';

			$html .= '<span class="o-button__text">';
				$html .= WC()->cart->get_cart_total() . ' ' . sprintf (_n('(%d)', '(%d)', WC()->cart->cart_contents_count), WC()->cart->cart_contents_count);
			$html .= '</span>';
		$html .= '</a>';
	
		echo $html;
	

		$fragments['a.o-button--header-basket'] = ob_get_clean();
		return $fragments;
	}
	
	add_filter('woocommerce_add_to_cart_fragments', 'mangopear_woocommerce_header_link');





	/**
	 * [3]	Remove default WooCommerce styles
	 */
	
	add_filter('woocommerce_enqueue_styles', '__return_false');