<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
 */

/**
 * Add General Settings and Controls
 *
 */

 /* Logo Mobile Image */
$wp_customize->add_setting('logo_mobile', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    'sanitize_callback' => 'caper_sanitize_image',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_mobile', array(
    'label' => esc_html__( 'Logo Image for Mobile Screens', 'caper' ),
    'description' => esc_html__( 'Add a different logo for mobile screens', 'caper' ),
    'priority' => 9,
    'section' => 'title_tagline',
    'settings' => 'logo_mobile',
))
);


/*Boxed Content Width*/
$wp_customize->add_setting( 'box_width' , array(
    'default'     => 1160,
    'transport'   => 'postMessage',
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'box_width', array(
    'label'	=>  esc_html__( 'Width of the boxed content', 'caper' ),
    'min' => 900,
    'max' => 1400,
    'step' => 10,
    'section' => 'general',
) ) );


/*SideBar Side*/
$wp_customize->add_setting( 'sidebar_side',
array(
    'default' => 'right',
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_radio',
)
);
$wp_customize->add_control( new Caper_Image_Radio_Button_Custom_Control( $wp_customize, 'sidebar_side',
array(
    'label' =>  esc_html__( 'Side of sidebar Page (if displayed)' , 'caper' ),
    'section' => 'general',
    'choices' => array(
        'left' => array( // Required. Setting for this particular radio button choice
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/sidebar-left.png', // Required. URL for the image
            'name' =>  esc_html__( 'Left' , 'caper' ) // Required. Title text to display
        ),
        'right' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/sidebar-right.png',
            'name' =>  esc_html__( 'Right' , 'caper' )
        ),
    )
)
) );

