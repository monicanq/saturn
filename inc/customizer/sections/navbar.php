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

// Add more navbar border color control
$wp_customize->add_setting( 'navbar_border' , array(
    'default'     => '#000000',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_border', array(
    'label'        => 'Top Navbar Border Color',
    'section'    => 'navbar',
    'settings'   => 'navbar_border',
) ) );

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
        // 'right-menu' => 'Right',
        'left' => 'Left',
        'center' => 'Center',
    ),
) );

// Add overlaying navbar control
$wp_customize->add_setting( 'navbar_overlay' , array(
    'default'     => 'no',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'navbar_overlay', array(
'label' => 'Transparent navbar',
'section' => 'navbar',
'settings' => 'navbar_overlay',
'type' => 'radio',
'choices' => array(
    'yes' => 'Yes',
    'no' => 'No',
),
    ) );

// Add sticky navbar control
$wp_customize->add_setting( 'sticky_navbar' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'sticky_navbar', array(
    'label' => 'Sticky navbar',
    'section' => 'navbar',
    'settings' => 'sticky_navbar',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
),
) );

// Add bottom border shadow navbar control
$wp_customize->add_setting( 'navbar_shadow' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'right-menu' => 'right-menu',
    'centered-menu' => 'centered-menu',
    'left-menu' => 'left-menu',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );

$wp_customize->add_control( 'navbar_shadow', array(
    'label' => 'Navbar Bottom Shadow',
    'section' => 'navbar',
    'settings' => 'navbar_shadow',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
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
