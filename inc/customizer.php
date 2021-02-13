<?php
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function saturn_customize_register( $wp_customize ) {
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
				'render_callback' => 'saturn_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'saturn_customize_partial_blogdescription',
			)
		);
	}
	/***************************
	         Add Sanitization 
	 ***************************/
	include get_template_directory() . '/inc/customizer/sanitization/sanitizer.php';


	/***************************
	         Add Sections 
	 ***************************/
	//Add Theme Customization Panel
	$wp_customize->add_panel( 'theme_options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Options', 'Saturn'),
		'description'    => '',
	) );

	
	// Add Social Media Section
	$wp_customize->add_section(
		'social-media',
		array(
			'title' => __( 'Social Media', 'Saturn' ),
			'panel' => 'theme_options',
			'priority' => 30,
			'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', '_s' )
		)
	);
	//Controls and Settings for Social Media Section
	// include get_template_directory() . '/inc/customizer/sections/social.php';
	

	//Add Navbar Section
	$wp_customize->add_section(
		'navbar',
		array(
			'title' => __( 'Navbar', 'Saturn'),
			'panel' => 'theme_options',
			'priority' => 30,
			'description' => __( 'Customize your navbar in this section' )
		)
	);
	//Controls and Settings for Navbar Section
	include get_template_directory() . '/inc/customizer/sections/navbar.php';


	//Add Section Breaks Section
	$wp_customize->add_section('section_breaks', array(
        'title'    => __('Section Breaks', 'Saturn'),
		'panel' => 'theme_options',
		'priority' => 70,
    ));
	//Controls and Settings for Test Section
	// include get_template_directory() . '/inc/customizer/sections/breaks.php';


	//Add testing section
	$wp_customize->add_section('newTest', array(
        'title'    => __('New Test', 'Saturn'),
		'panel' => 'theme_options',
        'priority' => 120,
    ));
	//Controls and Settings for Test Section
	// include get_template_directory() . '/inc/customizer/sections/test.php';


	//Include Settings and Controls for Generic Tabs
	// include get_template_directory() . '/inc/customizer/sections/colors.php';
	// include get_template_directory() . '/inc/customizer/sections/header-image.php';


	$wp_customize->add_section('conditional', array(
        'title'    => __('Conditional', 'Saturn'),
		'panel' => 'theme_options',
        'priority' => 120,
    ));

	include get_template_directory() . '/inc/customizer/sections/conditional.php';
	
}
add_action( 'customize_register', 'saturn_customize_register' );

/**
 * Add css for the new color controls in the customizer
 */
function saturn_customizer_css()
{
	?>
	<!-- Styles for colors -->
	<style type="text/css">
		/* Change color of the text in the page */
		body { color: <?php echo get_theme_mod('text_color', '#333'); ?>; }
		/* Change links color */
		/* a { color: <?php //echo get_theme_mod('link_color', '#1f6193'); ?>; } */
		/* Change main menu links color */
		.main-navigation a { color: <?php echo get_theme_mod('menu_color', '#666'); ?>; }
		/* Change navbar background color */
		:root { --navbar-color: <?php echo get_theme_mod('navbar_color', '#ccc'); ?>; }
		/* Style for parallax effect */
		#header-caret a i{ color : <?php echo get_theme_mod('caret_color', '#fff'); ?>; }
	</style> 

	<!-- Styling for position of logo on mobile menu -->
	<?php if( get_theme_mod( 'mobile_logo_position', 'center' ) == 'center' ) : ?>
		<style type="text/css">
			/* Change position of the logo */
			.custom-logo-link {
									align-items: center;
									justify-content: center;
								}		
		</style> 
	<?php else: ?>
		<style type="text/css">
			/* Change position of the logo */
			.custom-logo-link {
									align-items: center;
									justify-content: flex-start;
								}		
		</style> 
	<?php endif; ?>

	<!-- Styling for overlaying top navbar -->
	<?php if( get_theme_mod( 'navbar_overlay', 'yes' ) == 'yes' ) : ?>
		<style type="text/css">
			/* Change position type of navbar and transparency */
			#site-header { background: transparent;} 			
		</style> 
	<?php endif; ?>

	<!-- Styling for sticky & overlay top navbar -->
	<?php if( get_theme_mod( 'sticky_navbar', 'yes' ) == 'yes' && get_theme_mod( 'navbar_overlay', 'yes' ) == 'yes') : ?>
		<style type="text/css">
		 	/* Change position type of navbar */
			 #site-header {	position: fixed; }
		 </style> 
	<?php elseif (get_theme_mod( 'sticky_navbar', 'yes' ) == 'yes' && get_theme_mod( 'navbar_overlay', 'no' ) == 'no') : ?>
		<style type="text/css">
		 	/* Change position type of navbar */
			#top-header {	
				position: sticky; 
				top : 0; 
				z-index : 10;}
		 </style> 
	<?php elseif (get_theme_mod( 'sticky_navbar', 'no' ) == 'no' && get_theme_mod( 'navbar_overlay', 'yes' ) == 'yes') : ?>
		<style type="text/css">
		 	#site-header { background: transparent;
							position: absolute;}
		 </style> 
	<?php endif;?>

	<!-- Styling for navbar link size -->
	<style type="text/css">
	<?php 
		switch (get_theme_mod( 'navbar_text_size' )) {
			case 'big':?>
				.main-navigation a { font-size: 1.5rem; }
			<?php	break;
			case 'medium':?>
				.main-navigation a { font-size: 1.2rem; }
			<?php	break;
			case 'small':?>
				.main-navigation a { font-size: 0.9rem; }
			<?php	break;
		}?>
	</style> 
	<!-- Styling for parallax effect of header image -->
	<?php if( get_theme_mod( 'parallax_header', 'yes' ) == 'yes') : ?>
		<style type="text/css">
			 #banner{
			/* The image used */
			background-image: url(<?php echo esc_url( get_header_image() ); ?>);

			/* Set a specific height */
			height: <?php echo get_theme_mod( 'header_img_height', 40 ) ?>vh;

			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
			}

		 </style> 
	<?php else : ?>
		<style type="text/css">
			#banner{
				/* The image used */
				background-image: url(<?php echo esc_url( get_header_image() ); ?> );

				/* Set a specific height */
				height: <?php echo get_theme_mod( 'header_img_height', 40 ) ?>vh;

				/* Create the parallax scrolling effect */
				background-attachment: scroll;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				-moz-background-size: cover;
				-webkit-background-size: cover;
				-o-background-size: cover;
			}
		 </style> 
	<?php endif;?>
	<style>
		#break-1{
			/* The image used */
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_one_img' ) ); ?>);

			/* Set a specific height */
			height: <?php echo get_theme_mod( 'break_one_height', 40 ) ?>vh;
		}
		#break-2{
			/* The image used */
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_two_img' ) ); ?>);

			/* Set a specific height */
			height: <?php echo get_theme_mod( 'break_two_height', 40 ) ?>vh;
		}
	</style>

<?php
}
add_action( 'wp_head', 'saturn_customizer_css');



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function saturn_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function saturn_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function saturn_customize_preview_js() {
	wp_enqueue_script( 'saturn-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'saturn_customize_preview_js' );


/**
 * Include Custom Controls for Customizer
 */

include get_template_directory() . '/inc/customizer/extensions/radio.php';
include get_template_directory() . '/inc/customizer/extensions/slider.php';


