<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add Styles for Post Page
 *
 */

 
function caper_postpage_styles(){
    $css = '';

    /*Show sidebar*/
    if (get_theme_mod('post_page_sidebar') == true):
        $css .= '
            @media screen and (min-width: 50em) {
                /* .container-flex .post-page{
                    display: flex;
                } */
                .post-page main{
                    width: 75%;
                }
                .post-page .sidebar{
                    width: 25%;
                }
            }';
    endif;

    if (get_theme_mod('featured_image_fullwidth') == true):
        $css .= '
            div.post-thumbnail img{
                width:100%;
            }';

    endif;

    // Post Title alignment
    switch (get_theme_mod( 'post_title_alignment' )) {
        case 'center':
            $css .= '.post header h1.entry-title { text-align: center; }';
            break;
        case 'left':
            $css .= '.post header h1.entry-title { text-align: left; }';
            break;
        case 'right':
            $css .= '.post header h1.entry-title { text-align: right; }';
            break;
    }

    return $css;
}