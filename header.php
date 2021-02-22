<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Saturn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Load fontawesome in a non blocking way to improve page loading time -->
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'saturn' ); ?></a>

	<header id="top-header" class="clear" <?php if ( is_front_page() && is_home() 
											&& get_theme_mod( 'navbar_overlay', 'yes' ) == 'yes' 
											&& get_theme_mod( 'sticky_navbar', 'yes' ) == 'yes' ) : 
											echo "style='height: 0'";
											endif;?>>
		<div id='site-header'>
			<div id='main-menu' class='container container--flex <?php echo get_theme_mod( 'menu_position' ) ?>'> 
				<div class='branding-block '>
					<div class="site-branding ">
						<?php the_custom_logo(); ?>
					
						<div class="site-info ">
							<?php //if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<!-- <?php// else : ?>
								<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
							<?php //endif; 
							$saturn_description = get_bloginfo( 'description', 'display' );
							if ( $saturn_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $saturn_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div> <!-- .site-info -->
					</div> <!-- .site-branding -->
				</div> <!-- .branding-block -->
				<div class="navigation-block">
					<nav id="site-navigation" class="main-navigation">
						<button id='navigation-button' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars fa-2x"></i></button>
						<?php
							$walker = new Nfr_Menu_Walker();
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'walker'		 => $walker,
									)
						);?>
					</nav> <!-- #site-navigation -->		
				</div> <!-- #site-navigation -->
			</div> <!-- .container -->
		</div>	<!-- #site-header -->
	</header><!-- #top-header -->
	<?php if ( is_front_page() && is_home() || get_theme_mod( 'home_page_header', 'yes' ) == 'yes' ) : ?>
		<div id="banner">
			<?php //the_header_image_tag(); ?>
			<?php if ( get_theme_mod( 'section_caret', 'yes' ) == 'yes'): ?>
				<div id="header-caret">
					<a id='caret' href='#'>
						<i class="fas fa-angle-down fa-4x"></i>
					</a>
				</div> <!-- #header-caret -->
			<?php endif; ?>
		</div> <!-- #banner -->
	<?php endif; ?>
	<!-- echo get_theme_mod( 'cd_photocount', 0 ) -->

	