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
	 Add Panels 
		***************************/
	//Add Theme Customization Panel
	$wp_customize->add_panel( 'theme_options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Options', 'Saturn'),
		'description'    => '',
		) );
	// $wp_customize->add_panel( 'widget_areas', array(
	// 	'priority'       => 20,
	// 	'capability'     => 'edit_widget_areas',
	// 	'theme_supports' => '',
	// 	'title'          => __('Edit Widget Areas', 'Saturn'),
	// 	'description'    => '',
	// 	) );



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
		
	//Add General Section
	$wp_customize->add_section(
		'general',
		array(
			'title' => __( 'Global Styles', 'Saturn'),
			'panel' => 'theme_options',
			'priority' => 30,
			'description' => __( 'Customize your global styles in this section' )
			)
		);
	//Controls and Settings for General Section
	include get_template_directory() . '/inc/customizer/sections/general.php';

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
		// 'priority' => 70,
    ));
	//Controls and Settings for Breaks Section
	include get_template_directory() . '/inc/customizer/sections/breaks.php';
	
	
	//Add Custom Page section
	$wp_customize->add_section('custom_page', array(
		'title'    => __(' Custom Page ', 'Saturn'),
		'panel' => 'theme_options',
        'priority' => 120,
    ));
	//Controls and Settings for Custom Page Section
	include get_template_directory() . '/inc/customizer/sections/custom-page.php';
	
	//Add Post Page section
	$wp_customize->add_section('post_page', array(
		'title'    => __(' Post Page ', 'Saturn'),
		'panel' => 'theme_options',
		'priority' => 120,
	));
	//Controls and Settings for Custom Page Section
	include get_template_directory() . '/inc/customizer/sections/post-page.php';

	
	//Include Settings and Controls for Generic Tabs
	include get_template_directory() . '/inc/customizer/sections/colors.php';
	include get_template_directory() . '/inc/customizer/sections/header-image.php';
	
	
}
add_action( 'customize_register', 'saturn_customize_register' );

/**
 * Add css for the new color controls in the customizer
 */
function saturn_customizer_css()
{
	include get_template_directory() . '/inc/customizer/css/generic.php';
	include get_template_directory() . '/inc/customizer/css/custom-page.php';
	include get_template_directory() . '/inc/customizer/css/post-page.php';
	include get_template_directory() . '/inc/customizer/css/general.php';
	?>
	<!-- Styles for colors -->
	<style type="text/css">
		#banner{
			background-image: url(<?php echo esc_url( get_header_image() ); ?>);
			height: <?php echo get_theme_mod( 'header_img_height', 40 ) ?>vh;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			-moz-background-size: cover;
			-webkit-background-size: cover;
			-o-background-size: cover;
		}
		#break-1{
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_one_img' ) ); ?>);
			height: <?php echo get_theme_mod( 'break_one_height', 40 ) ?>vh;
			background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
		}
		#break-2{
			background-image: url(<?php echo esc_url( get_theme_mod( 'break_two_img' ) ); ?>);
			height: <?php echo get_theme_mod( 'break_two_height', 40 ) ?>vh;
			background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
		}	
		</style> 

	<!-- Styling for position of logo on mobile menu -->
	<?php if( get_theme_mod( 'mobile_logo_position', 'center' ) == 'center' ) : ?>
		<style type="text/css">
			/* Change position of the logo */
			.site-branding {
				align-items: center;
				justify-content: center;
			}		
			</style> 
	<?php else: ?>
		<style type="text/css">
			/* Change position of the logo */
			.site-branding {
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
			/* #top-header {background: transparent;} */
			</style> 
	<?php endif; ?>

	<!-- Styling for sticky & overlay top navbar -->
	<?php if( get_theme_mod( 'sticky_navbar', 'yes' ) == 'yes' && get_theme_mod( 'navbar_overlay', 'yes' ) == 'yes') : ?>
		<style type="text/css">
		 	/* Change position type of navbar */
			 /* #site-header {	position: fixed; } */
			 #navigation-button{ position: fixed; }
			 /* Let's try something new */
			 #top-header {	
				 position: sticky; 
				 top : 0; 
				 z-index : 10;
				 background: transparent;
				 /* height: 0; */
				}
				</style> 
	<?php elseif (get_theme_mod( 'sticky_navbar', 'yes' ) == 'yes' && get_theme_mod( 'navbar_overlay', 'no' ) == 'no') : ?>
		<style type="text/css">
		 	/* Change position type of navbar */
			 #top-header {	
				 position: sticky; 
				 top : 0; 
				 z-index : 10;
				}
				#navigation-button{ position: fixed; }
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

// include get_template_directory() . '/inc/customizer/widgets/widgets-add.php';
