<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add General for Custom Page
 *
 */

/*Boxed content*/
if (get_theme_mod('boxed_content') == true):?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex, .boxed-content{
                max-width: var(--boxed-content);
                margin: auto;
            }
        }
        :root{
        	--boxed-content: <?php echo ( esc_html ( get_theme_mod('box_width'))); ?>px;
        }
    </style>
<?php
endif;

?>

