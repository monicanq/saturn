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

function caper_custompage_styles(){
    $css = '';
    /*Show sidebar*/
    if (get_theme_mod('custom_page_sidebar') == true):
        $css .= '
            .custom-page main{
                width: 75%;
            }
            .custom-page .sidebar{
                width: 25%;
            }
        ';

    endif;


    return $css;
}