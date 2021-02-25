<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Styles for Custom Page
 *
 */

/*Show sidebar*/
if (get_theme_mod('custom_page_sidebar') == true):?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex{
                display: flex;
            }
            .custom-page{
                width: 75%;
            }
            .custom-sidebar{
                width: 25%;
            }
        }
    </style>
<?php
endif;

