<?php

	/**
	 * A function to output the page title markup.
	 *
	 * To simply the editing process, this function is intended to replace manually writing
	 * and editing each instance of the page title (featured on most templates).
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


	/**
	 * Contents
	 *
	 * [1]	Define function
	 * 		[a] @var boolean $title This parameter defines whether to show the title
	 * 			@var string  $title This parameter, when defined as a string, is the text to be output in the function
	 * 		[b] @var boolean $breadcrumb This defines whether or not to show the page breadcrumb
	 */
	
	function mangopear_output_page_title($show_title = true, $show_breadcrumb = true, $title_content = '', $breadcrumb_content = '') { // [1]
		if (get_field('header__style') == 'big') :
			$colour__bg = get_field('header__background');
			$gradient__bg = get_field('header__gradient');
			$text_colour = get_field('header__text-colour') ? get_field('header__text-colour') : '#FFF';


			echo '<header class="u-clearfix  o-header--portfolio" style="background-color: ' . $colour__bg . '">';
				echo '<div class="c-portfolio-header__gradient" style="
							background: ' . $colour__bg . ';
							background: -webkit-radial-gradient(center,ellipse cover,' . $gradient__bg . ' 0,' . $colour__bg . ' 65%);
							background: -webkit-radial-gradient(center,ellipse,' . $gradient__bg . ' 0,' . $colour__bg . ' 65%);
							background: radial-gradient(ellipse at center,' . $gradient__bg . ' 0,' . $colour__bg . ' 65%);
							filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $gradient__bg . '\',endColorstr=\'' . $colour__bg . '\',GradientType=1);"></div>';


				echo '<div class="c-portfolio-header__content" style="color: ' . $text_colour . '">';
					echo '<h1 class="c-portfolio-header__title">' . get_field('header__title') . '</h1>';
					echo '<h2 class="c-portfolio-header__title--sub">' . get_field('header__title__sub-line') . '</h2>';
					echo '<h3 class="c-portfolio-header__descriptor">' . get_field('header__title__description') . '</h3>';
				echo '</div>';
			echo '</header>';





		else :
			echo '<header class="o-panel  o-panel--title">';
				echo '<div class="o-container">';
					echo '<h1 class="c-page-title">';
							if ($show_title == true) {
								if ($title_content == '') { echo get_the_title(); }
								else { echo $title_content; }
							}
					echo '</h1>';





					if ($show_breadcrumb == true) :
						if ($breadcrumb_content != '') : mangopear_parse_breadcrumbs($breadcrumb_content);
						elseif (get_field('breadcrumbs')) : mangopear_parse_breadcrumbs(get_field('breadcrumbs'));
						else : mangui_startr_breadcrumbs();
						endif;
					endif;
				echo '</div>';
			echo '</header>';


		endif;
	}





	/**
	 * [2]	Function to parse the ACF repeater field object and return valid HTML
	 */
	
	function mangopear_parse_breadcrumbs($get_field) {
		if ($get_field) :
			$html  = '<nav class="c-breadcrumbs  o-nav  o-nav--row">';
				$html .= '<ul class="o-nav__list">';
					foreach ($get_field as $row) : the_row();
						if ($row['type'] == true) :
							$html .= '<li class="o-nav__item">';
								$html .= '<a href="' . $row['link'] . '" title="' . $row['label'] . '" class="o-nav__link">' . $row['label'] . '</a>';
							$html .= '</li>';

						else :
							$html .= '<li class="o-nav__item  o-nav__item--no-link">';
								$html .= $row['label'];
							$html .= '</li>';

						endif;

					endforeach;
				$html .= '</ul>';
			$html .= '</nav>';


			echo $html;
		endif;
	}