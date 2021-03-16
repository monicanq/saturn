<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Custom Page
 *
 */

/*Show sidebar*/
if (get_theme_mod('custom_page_sidebar') == true):?>
	<style>
        @media screen and (min-width: 50em) {
            /* .container-flex .custom-page{
                display: flex;
            } */
            .custom-page main{
                width: 75%;
            }
            .custom-page .sidebar{
                width: 25%;
            }
        }
    </style>
<?php
endif;

?>