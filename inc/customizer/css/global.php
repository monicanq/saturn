<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add General for Custom Page
 *
 */

/*Boxed content*/
if (get_theme_mod('boxed_content') == true):?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex{
                max-width: var(--boxed-content);
                margin: auto;
            }
        }
    </style>
<?php
endif;


?>