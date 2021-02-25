<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saturn
 */

get_header();
?>
<div class="container-flex">
	
		<main id="primary" class="custom-page clear">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	<?php
	if (get_theme_mod('custom_page_sidebar') == true): ?>
		<div class="custom-sidebar clear">
			<?php get_sidebar(); ?>
		</div>
	<?php
	endif;?>
</div>
<?php
get_footer();
