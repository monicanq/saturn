<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Styles for Post Page
 *
 */

/*Show sidebar*/
if (get_theme_mod('post_page_sidebar', 'yes') == 'yes'):?>
	<style>
        @media screen and (min-width: 50em) {
            .container-flex{
                display: flex;
            }
            .post-page{
                width: 75%;
            }
            .post-sidebar{
                width: 25%;
            }
        }
    </style>
<?php

endif;

