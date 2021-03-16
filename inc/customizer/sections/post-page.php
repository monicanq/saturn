<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
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
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'post_page_sidebar',
	array(
		'label' => esc_html__( 'Show Sidebar in Post Page', 'caper' ),
		'section' => 'post_page'
	)
) );

 /*Featured image full width*/
 //add setting
$wp_customize->add_setting( 'featured_image_fullwidth',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'featured_image_fullwidth',
	array(
		'label' => esc_html__( 'Show Featured Image Full Width', 'caper' ),
		'section' => 'post_page'
	)
) );
		
/*Posted date and author information*/
//add setting
$wp_customize->add_setting( 'posted_info',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'posted_info',
	array(
		'label' => esc_html__( 'Show Date and Author Info', 'caper' ),
		'section' => 'post_page'
	)
) );

// Title alignment Control
$wp_customize->add_setting( 'post_title_alignment',
	array(
		'default' => 'left',
		'transport' => 'refresh',
		'sanitize_callback' => 'caper_sanitize_radio',
	)
);
$wp_customize->add_control( new Caper_Image_Radio_Button_Custom_Control( $wp_customize, 'post_title_alignment',
	array(
		'label' =>  esc_html__( 'Post Title Alignment', 'caper' ),
		'section' => 'post_page',
		'choices' => array(
			'center' => array( // Required. Setting for this particular radio button choice
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Center.png', // Required. URL for the image
				'name' =>  esc_html__( 'Center', 'caper' ) // Required. Title text to display
			),
			'right' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Right.png',
				'name' =>  esc_html__( 'Right', 'caper' )
			),
			'left' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Left.png',
				'name' =>  esc_html__( 'Left', 'caper' )
			),
		)
	)
) );