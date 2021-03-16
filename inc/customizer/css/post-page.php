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

/*Show sidebar*/
if (get_theme_mod('post_page_sidebar') == true):?>
	<style>
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
        }
    </style>
<?php

endif;

if (get_theme_mod('featured_image_fullwidth') == true):?>

    <style>
            div.post-thumbnail img{
                width:100%;
            }
        </style>
    <?php

endif;

// Post Title alignment
?>
<style type="text/css">
<?php 
    switch (get_theme_mod( 'post_title_alignment' )) {
        case 'center':?>
            .post header h1.entry-title { text-align: center; }
            <?php	break;
        case 'left':?>
            .post header h1.entry-title { text-align: left; }
            <?php	break;
        case 'right':?>
            .post header h1.entry-title { text-align: right; }
            <?php	break;
    }?>
</style> 
