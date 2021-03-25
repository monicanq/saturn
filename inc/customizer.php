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
	
	//Add Post Page section
	$wp_customize->add_section('columns', array(
		'title'    => __(' Widget Columns Width ', 'caper'),
		'panel' => 'theme_options',
		'priority' => 120,
	));
	//Controls and Settings for Custom Page Section
	include get_template_directory() . '/inc/customizer/sections/columns.php';


	
	//Include Settings and Controls for Generic Tabs
	include get_template_directory() . '/inc/customizer/sections/colors.php';
	include get_template_directory() . '/inc/customizer/sections/header-image.php';
	
}
add_action( 'customize_register', 'caper_customize_register' );

/**
 * Add css for the customizer
 */
function caper_add_css(){

	$css = '';
	
	include get_template_directory() . '/inc/customizer/styles/header-breaks-images.php';
	$css .= caper_header_breaks_images();
	
	include get_template_directory() . '/inc/customizer/styles/generic.php';
	$css .= caper_generic();

	include get_template_directory() . '/inc/customizer/styles/navbar.php';
	$css .= caper_navbar_styles();

	include get_template_directory() . '/inc/customizer/styles/custom-page.php';
	$css .= caper_custompage_styles();

	include get_template_directory() . '/inc/customizer/styles/global.php';
	$css .= caper_global_styles();

	include get_template_directory() . '/inc/customizer/styles/post-page.php';
	$css .= caper_postpage_styles();

	include get_template_directory() . '/inc/customizer/styles/columns.php';
	$css .= caper_column_styles();

	wp_add_inline_style( 'caper-style', $css );
}
add_action( 'wp_enqueue_scripts', 'caper_add_css' );


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


