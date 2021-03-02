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
$wp_customize->add_setting( 'post_page_sidebar', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'post_page_sidebar_control', array(
    'label' => 'Show Sidebar in custom Page',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'post_page_sidebar'
));

 /*Featured image full width*/
//add setting
$wp_customize->add_setting( 'featured_image_fullwidth', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'featured_image_fullwidth_control', array(
    'label' => 'Show Featured Image Full Width',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'featured_image_fullwidth'
));

 /*Posted date and author information*/
//add setting
$wp_customize->add_setting( 'posted_info', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'posted_info_control', array(
    'label' => 'Show posted Date and Author Information',
    'type'  => 'checkbox', 
    'section' => 'post_page',
    'settings' => 'posted_info'
));


/*Post Title Alignment*/
// $wp_customize->add_setting( 'post_title_alignment' , array(
//     'type' => 'custom_radio',
//     'transport' => 'refresh', 
//     'default' => 'right',
// ) );

// $wp_customize->add_control( new WP_Customize_Radio( $wp_customize, 'post_title_alignment', array(
//     'label'	=>  'Title alignment',
//     'generic_img' => true,
//     'section' => 'post_page',
//     'choices' => array(
//         'center' => 'Center',
//         'left' => 'Left',
//         'right' => 'Right',
//     ),
// ) ) );

// Add desktop menu position control
// $wp_customize->add_setting( 'post_title_alignment' , array(
//     'default'     => 'right',
//     'transport'   => 'refresh',
//     'sanitize_callback' => 'saturn_sanitize_radio'
// ) );

// $wp_customize->add_control( 'post_title_alignment', array(
//     'label' => 'Title alignment',
//     'section' => 'post_page',
//     'settings' => 'post_title_alignment',
//     'type' => 'radio',
//     'choices' => array(
//         'right' => 'Right',
//         'left' => 'Left',
//         'center' => 'Center',
//     ),
// ) );

$wp_customize->add_setting( 'post_title_alignment',
	array(
		'default' => 'left',
		'transport' => 'refresh',
		// 'sanitize_callback' => 'skyrocket_text_sanitization'
	)
);
$wp_customize->add_control( new WP_Customize_Radio_Image( $wp_customize, 'post_title_alignment',
	array(
		'label' => __( 'Post Title Alignment' ),
		// 'description' => esc_html__( 'Sample custom control description' ),
		'section' => 'post_page',
		'choices' => array(
			'center' => array( // Required. Setting for this particular radio button choice
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Center.png', // Required. URL for the image
				'name' => __( 'Center' ) // Required. Title text to display
			),
			'right' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Right.png',
				'name' => __( 'Right' )
			),
			'left' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/Left.png',
				'name' => __( 'Left' )
			),
		)
	)
) );