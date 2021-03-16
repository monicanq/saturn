<?php
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function caper_customize_register( $wp_customize ) {
	/***************************
	 Name and site description
	 ***************************/
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'caper_customize_partial_blogname',
				)
			);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'caper_customize_partial_blogdescription',
				)
			);
		}
	/***************************
	 Add Sanitization 
		***************************/
	include get_template_directory() . '/inc/customizer/sanitization/sanitizer.php';
		
			
	/***************************
	 Add Panels 
		***************************/
	//Add Theme Customization Panel
	$wp_customize->add_panel( 'theme_options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Options', 'caper'),
		'description'    => '',
		) );

	
	//Add General Section
	$wp_customize->add_section(
		'general',
		array(
			'title' => __( 'Global Styles', 'caper'),
			'panel' => 'theme_options',
			'priority' => 30,
			'description' => __( 'Customize your global styles in this section', 'caper' )
			)
		);
	//Controls and Settings for Global Section
	include get_template_directory() . '/inc/customizer/sections/global.php';

	//Add Navbar Section
	$wp_customize->add_section(
		'navbar',
		array(
			'title' => __( 'Navbar', 'caper'),
			'panel' => 'theme_options',
			'priority' => 30,
			'description' => __( 'Customize your navbar styles in this section', 'caper' )
			)
		);
	//Controls and Settings for Navbar Section
	include get_template_directory() . '/inc/customizer/sections/navbar.php';
	
	
	//Add Section Breaks Section
	$wp_customize->add_section('section_breaks', array(
		'title'    => __('Section Breaks', 'caper'),
		'panel' => 'theme_options',
		// 'priority' => 70,
    ));
	//Controls and Settings for Breaks Section
	include get_template_directory() . '/inc/customizer/sections/breaks.php';
	
	
	//Add Custom Page section
	$wp_customize->add_section('custom_page', array(
		'title'    => __(' Custom Page ', 'caper'),
		'panel' => 'theme_options',
        'priority' => 120,
    ));
	//Controls and Settings for Custom Page Section
	include get_template_directory() . '/inc/customizer/sections/custom-page.php';
	
	//Add Post Page section
	$wp_customize->add_section('post_page', array(
		'title'    => __(' Post Page ', 'caper'),
		'panel' => 'theme_options',
		'priority' => 120,
	));
	//Controls and Settings for Custom Page Section
	include get_template_directory() . '/inc/customizer/sections/post-page.php';
	
	//Add Font section
	$wp_customize->add_section('typography', array(
		'title'    => __(' Typography ', 'caper'),
		'panel' => 'theme_options',
		'priority' => 120,
	));
	//Controls and Settings for Typography Section
	// Add in future because enqueueing problems need to be solved
	// include get_template_directory() . '/inc/customizer/sections/typography.php';

	//Add Test section
	$wp_customize->add_section('test', array(
		'title'    => __(' Test ', 'caper'),
		'panel' => 'theme_options',
		'priority' => 120,
	));
	//Controls and Settings for Custom Page Section
	// include get_template_directory() . '/inc/customizer/sections/test.php';
	
	
	//Include Settings and Controls for Generic Tabs
	include get_template_directory() . '/inc/customizer/sections/colors.php';
	include get_template_directory() . '/inc/customizer/sections/header-image.php';
	
}
add_action( 'customize_register', 'caper_customize_register' );

/**
 * Add css for the new color controls in the customizer
 */
function caper_customizer_css()
{
	include get_template_directory() . '/inc/customizer/css/generic.php';
	include get_template_directory() . '/inc/customizer/css/custom-page.php';
	include get_template_directory() . '/inc/customizer/css/post-page.php';
	include get_template_directory() . '/inc/customizer/css/global.php';
	include get_template_directory() . '/inc/customizer/css/navbar.php';
	?>
	<!-- Styles for colors -->
	<style type="text/css">
		#banner{
			background-image: url(<?php echo esc_url( get_header_image() ); ?>);
			height: <?php if ( !get_header_image() ):?>
							0vh; <?php
						else:	
							echo (esc_html(get_theme_mod( 'banner_height', 40 ))) ?>vh;
						<?php endif; ?>
		}
		#break-1{
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_one_img' ) ); ?>);
			height: <?php echo (esc_html(get_theme_mod( 'break_one_height', 40 ))) ?>vh;
		}
		#break-2{
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_two_img' ) ); ?>);
			height: <?php echo (esc_html(get_theme_mod( 'break_two_height', 40 ))) ?>vh;
		}	

		#banner, #break-1, #break-2{
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
		}
	</style> 

	
	<!-- Styling for parallax effects image -->
	<?php if( get_theme_mod( 'parallax_header', 'yes' ) == 'yes') : ?>
		<style type="text/css">
			 #banner{
				 /* Create the parallax scrolling effect */
				 background-attachment: fixed;
				}
				
				</style> 
	<?php else : ?>
		<style type="text/css">
			#banner{
				/* Create the parallax scrolling effect */
				background-attachment: scroll;
			}
			</style> 
	<?php endif;?>
	<style>
		/* Styling for parallax effects */
		/* Break-1 image */
		<?php if( get_theme_mod( 'parallax_break_one', 'yes' ) == 'yes') : ?>
			#break-1{
				/* Create the parallax scrolling effect */
				background-attachment: fixed;
			}
		<?php else : ?>
			#break-1{
				/* Create the parallax scrolling effect */
				background-attachment: scroll;
			}
		<?php endif;?>
		
		/* Break-2 image */
		<?php if( get_theme_mod( 'parallax_break_two', 'yes' ) == 'yes') : ?>
			#break-2{
				/* Create the parallax scrolling effect */
				background-attachment: fixed;
			}
		<?php else : ?>
			#break-2{
				/* Create the parallax scrolling effect */
				background-attachment: scroll;
			}
		<?php endif;?>
	</style>


<?php
}
add_action( 'wp_head', 'caper_customizer_css');


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function caper_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function caper_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function caper_customize_preview_js() {
	wp_enqueue_script( 'caper-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), CAPER_VERSION, true );
}
add_action( 'customize_preview_init', 'caper_customize_preview_js' );


/**
 * Include Custom Controls for Customizer
 */

include get_template_directory() . '/inc/customizer/extensions/slider.php';
include get_template_directory() . '/inc/customizer/extensions/custom-controls.php';


