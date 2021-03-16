<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caper
 */

?>
	<footer id="colophon" class="site-footer">
	<?php global $template;
		$myvar = substr($template, -8, 8);
		if ( get_theme_mod('custom_page_footer') == true || $myvar != 'page.php'): ?>
			<section id='footer-section' class='container-flex'> 
				<?php
				$arr = array( 's3c1', 's3c2', 's3c3');
				foreach ($arr as &$value) {
					if (is_active_sidebar($value)) :?>
						<div class="column">
							<?php dynamic_sidebar( $value); ?>	
						</div>  
					<?php endif;
				}?>
			</section>
		<?php 
		endif;
		if ( is_front_page() && is_home() ) :
			dynamic_sidebar( 's4' ); 
		endif; 
		?>
		<div class="designer-info">
			<p>Theme Caper by  <span>&#169;</span>coscriber, 2021</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
