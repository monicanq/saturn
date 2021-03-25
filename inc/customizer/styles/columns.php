<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Colums sections *
 */

function caper_column_styles(){
    $css = '
    @media screen and (min-width: 50em) {
        #first-section .column:first-child{
            flex-basis: ' . get_theme_mod('s1c1_width', '30') . '%;
        }
        #first-section .column:nth-child(2){
            flex-basis: ' . get_theme_mod('s1c2_width', '30') . '%;
        }
        #first-section .column:nth-child(3){
            flex-basis: ' . get_theme_mod('s1c3_width', '30') . '%;
        }
        #second-section .column:first-child{
            flex-basis: ' . get_theme_mod('s2c1_width', '30') . '%;
        }
        #second-section .column:nth-child(2){
            flex-basis: ' . get_theme_mod('s2c2_width', '30') . '%;
        }
        #second-section .column:nth-child(3){
            flex-basis: ' . get_theme_mod('s2c3_width', '30') . '%;
        }
    }';

    return $css;
}