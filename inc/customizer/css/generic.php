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

?>
<style type="text/css">
	/* Change color of the text in the page */
	body { color: <?php echo ( esc_html ( get_theme_mod('text_color', '#333'))); ?>; }
	/* Change links color */
	a { color: <?php echo ( esc_html ( get_theme_mod('link_color', '#1f6193'))); ?>; }
	/* Change links color */
	a:visited { color: <?php echo ( esc_html ( get_theme_mod('visited_link_color', '#1f6193'))); ?>; }
	/* Change main menu links color */
	.main-navigation a { color: <?php echo ( esc_html ( get_theme_mod('menu_color', '#666'))); ?>; }
	/* Change navbar background color */
	:root { --navbar-color: <?php echo ( esc_html ( get_theme_mod('navbar_color', '#ccc'))); ?>; }
	/* Style for parallax effect */
	#header-caret a i{ color : <?php echo ( esc_html ( get_theme_mod('caret_color', '#fff'))); ?>; }
</style>
<?php




/*Sidebar side*/
if (get_theme_mod('sidebar_side', 'left') == 'left'):?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex .custom-page,
			.container-flex .post-page,
			.container-flex .search,
			.container-flex .archive{
                flex-direction: row-reverse;
            }
        }
    </style>
<?php
else:?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex .custom-page,
			.container-flex .post-page,
			.container-flex .search,
			.container-flex .archive{
                flex-direction: row;
            }
        }
    </style>
<?php
endif;

?>