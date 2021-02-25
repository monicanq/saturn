<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Navbar Settings and Controls
 *
 */

 // Add navbar menu links color control
$wp_customize->add_setting( 'menu_color' , array(
    'default'     => '#555',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
    'label'        => 'Main Menu Links Color',
    'section'    => 'navbar',
    'settings'   => 'menu_color',
) ) );

// Add navbar background color control
$wp_customize->add_setting( 'navbar_color' , array(
    'default'     => '#ccc',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_color', array(
    'label'        => 'Top Navbar Color',
    'section'    => 'navbar',
    'settings'   => 'navbar_color',
) ) );


/* Add overlaying navbar control */
//add setting
$wp_customize->add_setting( 'navbar_overlay', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'navbar_overlay_control', array(
    'label' => 'Display Transparent navbar',
    'type'  => 'checkbox', 
    'section' => 'navbar',
    'settings' => 'navbar_overlay'
));

// Add sticky navbar control
//add setting
$wp_customize->add_setting( 'sticky_navbar', array(
    'default' => '',
    'sanitize_callback' => 'saturn_sanitize_checkbox',
));

//add control
$wp_customize->add_control( 'sticky_navbar_control', array(
    'label' => 'Stick Navbar to top of the page',
    'type'  => 'checkbox', 
    'section' => 'navbar',
    'settings' => 'sticky_navbar'
));

// Add desktop menu position control
$wp_customize->add_setting( 'menu_position' , array(
    'default'     => 'right-menu',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );
// Uncomment when the Radio file has been filled
// $wp_customize->add_control( new WP_Customize_Radio( $wp_customize, 'menu_position', array(
// 	'label'	=>  'Menu position (big screen)',
// 	'section' => 'navbar',
//     'choices' => array(
//         'right-menu' => 'Right',
//         'left-menu' => 'Left',
//         'centered-menu' => 'Center', ),
// ) ) );

$wp_customize->add_control( 'menu_position', array(
    'label' => 'Menu position (big screen)',
    'section' => 'navbar',
    'settings' => 'menu_position',
    'type' => 'radio',
    'choices' => array(
        'right-menu' => 'Right',
        'left-menu' => 'Left',
        'centered-menu' => 'Center',
    ),
) );
// $wp_customize->add_setting( 'myset' , array(
// 	'default'     => 60,
// 	'transport'   => 'postMessage',
// ) );



// Add mobile logo position control
$wp_customize->add_setting( 'mobile_logo_position' , array(
    'default'     => 'left',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'mobile_logo_position', array(
    'label' => 'Logo position (Mobile screens)',
    'section' => 'navbar',
    'settings' => 'mobile_logo_position',
    'type' => 'radio',
    'choices' => array(
        'left' => 'Left',
        'center' => 'Center',
    ),
) );



// Add menu text size control
$wp_customize->add_setting( 'navbar_text_size' , array(
    'default'     => 'small',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'navbar_text_size', array(
    'label' => 'Navbar Links Size',
    'section' => 'navbar',
    'settings' => 'navbar_text_size',
    'type' => 'radio',
    'choices' => array(
        'big' => 'Big',
        'medium' => 'Medium',
        'small' => 'Small'
    ),
) );


$wp_customize->add_setting( 'banner_height' , array(
	'default'     => 60,
	'transport'   => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'topnav_height', array(
	'label'	=>  'Height of the banner',
	'min' => 0,
	'max' => 100,
	'step' => 1,
	'section' => 'navbar',
) ) );
