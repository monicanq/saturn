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
	<?php global $template;
		$myvar = substr($template, -8, 8);
		if ( get_theme_mod('custom_page_footer', 'yes') == 'yes' || $myvar != 'page.php'): ?>
			<section id='footer-section'> 
				<?php dynamic_sidebar( 's3c1' ); ?>
				<?php dynamic_sidebar( 's3c2' ); ?>
				<?php dynamic_sidebar( 's3c3' ); ?>
			</section>
		<?php 
		endif;
		if ( is_front_page() && is_home() ) :
			dynamic_sidebar( 's4' ); 
		endif; 
		?>
		<div class="designer-info">
			<p>Theme Saturn by: <a href="https://coscriber.com/">Coscriber</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
