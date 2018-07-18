<?php

	/**
	 * [MangUI] Breadcrumb functionality for themes
	 *
	 * This function outputs a <nav>igation that contains the breadcrumbs for the post
	 * or page that is being viewed. Custom post types are only supported in the most
	 * basic of ways.
	 *
	 * You can extend this functionality to support post types by editing the code below.
	 *
	 * @category 	Startr setup
	 * @package  	mangui
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/hildon/docs/themes/hildon/
	 * @since   	1.0.0
	 * @see 		/themes/hildon/functions/source/mangui.startr.setup.php
	 */
	
	function mangui_startr_breadcrumbs() {
		global $post;





		/**
		 * Set up nav links data, starting with the home page link.
		 */

		$links = array(
			array(
				'type'		=> 'link',
				'href'		=> get_option('home'),
				'label'		=> 'Home',
				'title'		=> 'Go back to the homepage.',
				'a-class'	=> '',
				'li-class'	=> 'o-nav__item--home',
				'target'	=> '',
			),
		);





		/**
		 * Set up additional nav links
		 */


		/**
		 * Taxonomy pages
		 */
		
		if (is_tax()) :
			global $wp_query;
			$term = $wp_query->get_queried_object();


			/**
			 * For resources...
			 */
			
			if ($term->taxonomy == 'resource__tags') :
				$links[] = array(
					'type'		=> 'end',
					'label'		=> 'Post tagged in: ' . $term->name,
					'li-class'	=> 'o-nav__item--no-link',
				);


			elseif ($term->taxonomy == 'our-views__categories') :
				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/our-views/',
					'label'		=> 'Our views',
					'title'		=> 'A collection of our views',
					'a-class'	=> '',
					'li-class'	=> 'o-nav__item--blog',
					'target'	=> '',
				);


				$links[] = array(
					'type'		=> 'end',
					'label'		=> 'Post tagged in: ' . $term->name,
					'li-class'	=> 'o-nav__item--no-link',
				);

			endif;





		/**
		 * For archives...
		 */
		
		elseif (is_archive()) : $post_type = get_post_type();


			/**
			 * For posts...
			 */
			
			if ($post_type == 'retainer') :
				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/account/',
					'label'		=> 'Your account',
					'title'		=> 'Your account dashboard',
					'a-class'	=> '',
					'li-class'	=> '',
					'target'	=> '',
				);

				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/account/finance/',
					'label'		=> 'Finance',
					'title'		=> 'Finance',
					'a-class'	=> '',
					'li-class'	=> '',
					'target'	=> '',
				);

				$links[] = array(
					'type'		=> 'end',
					'label'		=> 'Your retainer',
					'li-class'	=> 'o-nav__item--no-link',
				);





			else :
				$links[] = array(
					'type'		=> 'end',
					'label'		=> post_type_archive_title($prefix = '', $display = false),
					'li-class'	=> 'o-nav__item--no-link',
				);





			endif;





		











		/**
		 * For categories...
		 */
		
		elseif (is_home()) :
			$links[] = array(
				'type'		=> 'end',
				'label'		=> 'The mangopear blog',
				'li-class'	=> 'o-nav__item--no-link',
			);











		/**
		 * For singles...
		 */
		
		elseif (is_single()) :
			$post_type = get_post_type();


			/**
			 * For posts...
			 */
			
			if ($post_type == 'post') :
				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/writings/',
					'label'		=> 'Press &amp; latest news',
					'title'		=> 'Read our latest press releases & news articles',
					'a-class'	=> '',
					'li-class'	=> 'o-nav__item--blog',
					'target'	=> '',
				);


				$post_categories = get_the_category(); $separator = ', '; $content = '';
				if (!empty($post_categories)) :
					foreach ($post_categories as $category) :
						$links[] = array(
							'type'		=> 'link',
							'href'		=> esc_url(get_category_link($category->term_id)),
							'label'		=> esc_html($category->name),
							'title'		=> 'View all posts in ' . esc_html($category->name),
							'a-class'	=> '',
							'li-class'	=> 'o-nav__item--blog',
							'target'	=> '',
						);
					endforeach;
				endif;


				$links[] = array(
					'type'		=> 'end',
					'label'		=> get_the_title(),
					'li-class'	=> 'o-nav__item--no-link',
				);


			/**
			 * For portfolio posts...
			 */
			
			elseif ($post_type == 'portfolio') :
				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/our-work/',
					'label'		=> 'Our work',
					'title'		=> 'View our portfolio and case studies',
					'a-class'	=> '',
					'li-class'	=> 'o-nav__item--portfolio',
					'target'	=> '',
				);


				if ($post->post_parent) :
					$ancestors = get_post_ancestors($post->ID);


					foreach($ancestors as $ancestor) :
						$links[] = array(
							'type'		=> 'link',
							'href'		=> get_permalink($ancestor),
							'label'		=> get_the_title($ancestor),
							'title'		=> get_the_title($ancestor),
							'a-class'	=> '',
							'li-class'	=> '',
							'target'	=> '',
						);
					endforeach;


					$links[] = array(
						'type'		=> 'end',
						'label'		=> get_the_title(),
						'li-class'	=> 'o-nav__item--no-link',
					);

				else :
					$links[] = array(
						'type'		=> 'end',
						'label'		=> get_the_title(),
						'li-class'	=> 'o-nav__item--no-link',
					);


				endif;


			/**
			 * For resources...
			 */
			
			elseif ($post_type == 'resources') :
				$links[] = array(
					'type'		=> 'end',
					'label'		=> get_the_title(),
					'li-class'	=> 'o-nav__item--no-link',
				);


			/**
			 * For resources...
			 */
			
			elseif ($post_type == 'our-views') :
				$links[] = array(
					'type'		=> 'link',
					'href'		=> '/our-views/',
					'label'		=> 'Our views',
					'title'		=> 'A collection of our views',
					'a-class'	=> '',
					'li-class'	=> 'o-nav__item--blog',
					'target'	=> '',
				);


				$links[] = array(
					'type'		=> 'end',
					'label'		=> get_the_title(),
					'li-class'	=> 'o-nav__item--no-link',
				);



			endif;











		/**
		 * For pages...
		 */

		elseif (is_page()) :
			if ($post->post_parent) :
				$ancestors = array_reverse(get_post_ancestors($post->ID));


				foreach($ancestors as $ancestor) :
					$links[] = array(
						'type'		=> 'link',
						'href'		=> get_permalink($ancestor),
						'label'		=> get_the_title($ancestor),
						'title'		=> get_the_title($ancestor),
						'a-class'	=> '',
						'li-class'	=> '',
						'target'	=> '',
					);
				endforeach;


				$links[] = array(
					'type'		=> 'end',
					'label'		=> get_the_title(),
					'li-class'	=> 'o-nav__item--no-link',
				);

			else :
				$links[] = array(
					'type'		=> 'end',
					'label'		=> get_the_title(),
					'li-class'	=> 'o-nav__item--no-link',
				);


			endif;
		endif;





		/**
		 * Set up breadcrumb markup
		 */
		
		$breadcrumb_html  = '<nav class="c-breadcrumbs  o-nav  o-nav--row">';
			$breadcrumb_html .= '<ul class="o-nav__list">';


				foreach ($links as $link):
					$link__type 	= ($link['type'] == 'link' || 'end' || 'categories') ? $link['type'] : 'end' ;
					$link__href 	= ($link['href'] != '') ? $link['href'] : '';
					$link__label 	= ($link['label'] != '') ? $link['label'] : '';
					$link__title 	= ($link['title'] != '') ? $link['title'] : '';
					$link__a_class 	= ($link['a-class'] != '') ? $link['a-class'] : '';
					$link__li_class = ($link['li-class'] != '') ? $link['li-class'] : '';
					$link__target 	= ($link['target'] != '') ? 'target="' . $link['target'] . '"' : '';


					if ($link__type == 'link') :
						$breadcrumb_html .= '<li class="o-nav__item  ' . $link__li_class . '">';
							$breadcrumb_html .= '<a href="' . $link__href . '" class="' . $link__a_class . '" title="' . $link__title . '"  ' . $link__target . '>';
								$breadcrumb_html .= $link__label;
							$breadcrumb_html .= '</a>';
						$breadcrumb_html .= '</li>';


					elseif ($link__type == 'end') :
						$breadcrumb_html .= '<li class="o-nav__item  ' . $link__li_class . '">';
							$breadcrumb_html .= $link__label;
						$breadcrumb_html .= '</li>';


					elseif ($link__type == 'categories') :
						$breadcrumb_html .= '<li class="o-nav__item  ' . $link__li_class . '">';
							$breadcrumb_html .= $link['category'];
						$breadcrumb_html .= '</li>';


					endif;
				endforeach;
			

			$breadcrumb_html .= '</ul>';
		$breadcrumb_html .= '</nav>';






		/**
		 * Output HTML
		 */
		
		echo $breadcrumb_html;
	}