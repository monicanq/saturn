<?php
/**
 * The custom frontpage template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Caper
 */


get_header();
    ?>

    <main id="primary" class="site-main">
    <section id='first-section' class='container-flex'> 
        <?php
            $arr = array( 's1c1', 's1c2', 's1c3');
            foreach ($arr as &$value) {
                if (is_active_sidebar($value)) :?>
                    <div class="column">
                        <?php dynamic_sidebar( $value); ?>	
                    </div>  
                <?php endif;
            }
        ?>
    </section>
    <div id="break-1" class='break'></div>.

    <section id='second-section' class='container-flex'> 
    <?php
        $arr = array( 's2c1', 's2c2', 's2c3');
        foreach ($arr as &$value) {
            if (is_active_sidebar($value)) :?>
                <div class="column">
                    <?php dynamic_sidebar( $value); ?>	
                </div>  
            <?php endif;
        }?>
    </section>
    <div id="break-2" class='break'></div>

    </main><!-- #main -->

    <?php

get_footer();
