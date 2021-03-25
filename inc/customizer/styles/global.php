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

function caper_global_styles(){

    $css = '
        @media screen and (min-width: 50em) {
            .container-flex, .boxed-content {
                max-width: var(--boxed-content);
                margin: auto;
            }
        }
        :root{
            --boxed-content: ' . esc_html ( get_theme_mod('box_width')) . 'px;
        }';

    return $css;
}

