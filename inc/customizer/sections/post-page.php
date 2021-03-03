<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Post Page Settings and Controls
 *
 */

 /*Show SideBar*/
//add setting
$wp_customize->add_setting( 'post_page_sidebar',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'post_page_sidebar',
	array(
		'label' => esc_html__( 'Show Sidebar in Post Page', 'saturn' ),
		'section' => 'post_page'
	)
) );

 /*Featured image full width*/
 //add setting
$wp_customize->add_setting( 'featured_image_fullwidth',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'featured_image_fullwidth',
	array(
		'label' => esc_html__( 'Show Featured Image Full Width', 'saturn' ),
		'section' => 'post_page'
	)
) );
		
/*Posted date and author information*/
//add setting
$wp_customize->add_setting( 'posted_info',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'posted_info',
	array(
		'label' => esc_html__( 'Show Date and Author Info', 'saturn' ),
		'section' => 'post_page'
	)
) );

// Title alignment Control
$wp_customize->add_setting( 'post_title_alignment',
	array(
		'default' => 'left',
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_radio',
	)
);
$wp_customize->add_control( new WP_Customize_Radio_Image( $wp_customize, 'post_title_alignment',
	array(
		'label' =>  esc_html__( 'Post Title Alignment', 'saturn' ),
		'section' => 'post_page',
		'choices' => array(
			'center' => array( // Required. Setting for this particular radio button choice
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Center.png', // Required. URL for the image
				'name' =>  esc_html__( 'Center', 'saturn' ) // Required. Title text to display
			),
			'right' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Right.png',
				'name' =>  esc_html__( 'Right', 'saturn' )
			),
			'left' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Left.png',
				'name' =>  esc_html__( 'Left', 'saturn' )
			),
		)
	)
) );