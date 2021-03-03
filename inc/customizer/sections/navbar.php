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


 /* Add desktop menu position control */
$wp_customize->add_setting( 'menu_position',
array(
    'default' => 'right-menu',
    'transport' => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio',
)
);
$wp_customize->add_control( new WP_Customize_Radio_Image( $wp_customize, 'menu_position',
array(
    'label' =>  esc_html__( 'Menu and Logo position (big screen)', 'saturn' ),
    'section' => 'navbar',
    'choices' => array(
        'centered-menu' => array( // Required. Setting for this particular radio button choice
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logocentered.png', // Required. URL for the image
            'name' =>  esc_html__( 'Center' , 'saturn' ) // Required. Title text to display
        ),
        'right-menu' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logoright.png',
            'name' =>  esc_html__( 'Right' , 'saturn' )
        ),
        'left-menu' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logoleft.png',
            'name' =>  esc_html__( 'Left' , 'saturn' )
        ),
    )
)
) );

/* Add navbar background color control */
$wp_customize->add_setting( 'navbar_color' , array(
    'default'     => '#ccc',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_color', array(
    'label'        => esc_html__( ' Top Navbar Color ' , 'saturn' ),
    'section'    => 'navbar',
    'settings'   => 'navbar_color',
) ) );

/* Add overlaying navbar control */
//add setting
$wp_customize->add_setting( 'navbar_overlay',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'navbar_overlay',
	array(
		'label' => esc_html__( ' Display Transparent navbar ' , 'saturn' ),
		'section' => 'navbar'
	)
) );

/* Add sticky navbar control */
//add setting
$wp_customize->add_setting( 'sticky_navbar',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'saturn_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Saturn_Toggle_Switch_Custom_control( $wp_customize, 'sticky_navbar',
	array(
		'label' => esc_html__( ' Stick Navbar to top of page' , 'saturn' ),
		'section' => 'navbar'
	)
) );

/* Add mobile logo position control */
// add setting
// $wp_customize->add_setting( 'mobile_logo_position' , array(
//     'default'     => 'left',
//     'transport'   => 'refresh',
//     'sanitize_callback' => 'saturn_sanitize_radio'
// ) );
// add control 
// $wp_customize->add_control( 'mobile_logo_position', array(
//     'label' => 'Logo position (Mobile screens)',
//     'section' => 'navbar',
//     'settings' => 'mobile_logo_position',
//     'type' => 'radio',
//     'choices' => array(
//         'left' => 'Left',
//         'center' => 'Center',
//     ),
// ) );

$wp_customize->add_setting( 'mobile_logo_position',
array(
    'default' => 'left',
    'transport' => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio',
)
);
$wp_customize->add_control( new WP_Customize_Radio_Image( $wp_customize, 'mobile_logo_position',
array(
    'label' =>  esc_html__( 'Logo position (Mobile screens)' , 'saturn' ),
    'section' => 'navbar',
    'choices' => array(
        'center' => array( // Required. Setting for this particular radio button choice
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/moblogcenter.png', // Required. URL for the image
            'name' =>  esc_html__( 'Center' , 'saturn' ) // Required. Title text to display
        ),
        'left' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/moblogleft.png',
            'name' =>  esc_html__( 'Left' , 'saturn' )
        ),
    )
)
) );

/* Add menu text size control */
// add setting
// $wp_customize->add_setting( 'navbar_text_size' , array(
//     'default'     => 'small',
//     'transport'   => 'refresh',
//     'sanitize_callback' => 'saturn_sanitize_radio'
// ) );
// // add control
// $wp_customize->add_control( 'navbar_text_size', array(
//     'label' => 'Navbar Links Size',
//     'section' => 'navbar',
//     'settings' => 'navbar_text_size',
//     'type' => 'radio',
//     'choices' => array(
//         'big' => 'Big',
//         'medium' => 'Medium',
//         'small' => 'Small'
//     ),
// ) );


 /* Add desktop menu position control */
 $wp_customize->add_setting( 'navbar_text_size',
 array(
     'default' => 'medium',
     'transport' => 'refresh',
     'sanitize_callback' => 'saturn_sanitize_radio',
 )
 );
 $wp_customize->add_control( new WP_Customize_Radio_Image( $wp_customize, 'navbar_text_size',
 array(
     'label' =>  esc_html__( ' Navbar Links Size' , 'saturn' ),
     'section' => 'navbar',
     'choices' => array(
         'big' => array( // Required. Setting for this particular radio button choice
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/bigfont.png', // Required. URL for the image
             'name' =>  esc_html__( 'Large' , 'saturn' ) // Required. Title text to display
         ),
         'medium' => array(
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/mediumfont.png',
             'name' =>  esc_html__( 'Medium' , 'saturn' )
         ),
         'small' => array(
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/smallfont.png',
             'name' =>  esc_html__( 'Small' , 'saturn' )
         ),
     )
 )
 ) );