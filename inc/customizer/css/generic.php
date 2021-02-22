<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Styles for Columns
 *
 */

?>
	<style type="text/css">
		/* Change color of the text in the page */
		body { color: <?php echo get_theme_mod('text_color', '#333'); ?>; }
		/* Change links color */
		/* a { color: <?php //echo get_theme_mod('link_color', '#1f6193'); ?>; } */
		/* Change main menu links color */
		.main-navigation a { color: <?php echo get_theme_mod('menu_color', '#666'); ?>; }
		/* Change navbar background color */
		:root { --navbar-color: <?php echo get_theme_mod('navbar_color', '#ccc'); ?>; }
		/* Style for parallax effect */
		#header-caret a i{ color : <?php echo get_theme_mod('caret_color', '#fff'); ?>; }
	</style>

