<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Saturn
 */

?>

	<footer id="colophon" class="site-footer">
		<section id='footer-section'> 
			<?php dynamic_sidebar( 's3c1' ); ?>
			<?php dynamic_sidebar( 's3c2' ); ?>
			<?php dynamic_sidebar( 's3c3' ); ?>
		</section>
		<?php dynamic_sidebar( 's4' ); ?>
		<div class="designer-info">
			<p>Theme Saturn by: <a href="https://coscriber.com/">Coscriber</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
