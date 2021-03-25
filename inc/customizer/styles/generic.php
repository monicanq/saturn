<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Global
 *
 */

function caper_generic(){
	$css = '
	body { color: ' . esc_html ( get_theme_mod('text_color', '#333')) . '; }

	a { color: ' . esc_html ( get_theme_mod('link_color', '#1f6193')) . '; }

	a:visited { color: ' . esc_html ( get_theme_mod('visited_link_color', '#1f6193')) . '; }

	.main-navigation a { color: ' . esc_html ( get_theme_mod('menu_color', '#666')). ';}

	:root { --navbar-color: ' . esc_html ( get_theme_mod('navbar_color', '#ccc')) . '; 
			--body-text-color: ' . esc_html ( get_theme_mod('text_color', '#333')) . '}
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"] {
		background-color:' .  esc_html ( get_theme_mod('button_color', '#fff')) . '; 
	}';

	if (get_theme_mod('sidebar_side', 'left') == 'left'):
		$css .= '
				@media screen and (min-width: 50em) {
					.container-flex.custom-page,
					.container-flex.post-page,
					.container-flex.search,
					.container-flex.archive{
						flex-direction: row-reverse;
					}
				}
		';
	endif;

	return $css;
}