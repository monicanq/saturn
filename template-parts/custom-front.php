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
	
    <section id='first-section'> 
        <?php dynamic_sidebar( 's1c1' ); ?>
        <?php dynamic_sidebar( 's1c2' ); ?>
        <?php dynamic_sidebar( 's1c3' ); ?>
    </section>
    <div id="break-1" class='break'></div>.

    <section id='second-section'> 
        <?php dynamic_sidebar( 's2c1' ); ?>
        <?php dynamic_sidebar( 's2c2' ); ?>
        <?php dynamic_sidebar( 's2c3' ); ?>
    </section>
    <div id="break-2" class='break'></div>

    </main><!-- #main -->

    <?php

get_footer();