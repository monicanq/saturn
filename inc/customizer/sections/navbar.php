<?php 
/**
 * Caper Theme Customizer
 *
 * @package Caper
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
    'sanitize_callback' => 'caper_sanitize_radio',
)
);
$wp_customize->add_control( new Caper_Image_Radio_Button_Custom_Control( $wp_customize, 'menu_position',
array(
    'label' =>  esc_html__( 'Menu and Logo position (big screen)', 'caper' ),
    'section' => 'navbar',
    'choices' => array(
        'centered-menu' => array( // Required. Setting for this particular radio button choice
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logocentered.png', // Required. URL for the image
            'name' =>  esc_html__( 'Center' , 'caper' ) // Required. Title text to display
        ),
        'right-menu' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logoright.png',
            'name' =>  esc_html__( 'Right' , 'caper' )
        ),
        'left-menu' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/logoleft.png',
            'name' =>  esc_html__( 'Left' , 'caper' )
        ),
    )
)
) );


/* Add overlaying navbar control */
//add setting
$wp_customize->add_setting( 'navbar_overlay',
array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_checkbox'
	)
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'navbar_overlay',
array(
    'label' => esc_html__( ' Display Transparent navbar ' , 'caper' ),
    'section' => 'navbar'
	)
    ) );
    
/* Add sticky navbar control */
//add setting
$wp_customize->add_setting( 'sticky_navbar',
array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_checkbox'
    )
);
//add control
$wp_customize->add_control( new Caper_Toggle_Switch_Custom_control( $wp_customize, 'sticky_navbar',
array(
    'label' => esc_html__( ' Stick Navbar to top of page' , 'caper' ),
    'section' => 'navbar'
    )
    ) );
        
/* Add navbar background color control */
$wp_customize->add_setting( 'navbar_color' , array(
    'default'     => '#ccc',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_color', array(
    'label'        => esc_html__( ' Top Navbar Color ' , 'caper' ),
    'section'    => 'navbar',
    'settings'   => 'navbar_color',
) ) );

/* Add mobile logo position control */
$wp_customize->add_setting( 'mobile_logo_position',
array(
    'default' => 'left',
    'transport' => 'refresh',
    'sanitize_callback' => 'caper_sanitize_radio',
)
);
$wp_customize->add_control( new Caper_Image_Radio_Button_Custom_Control( $wp_customize, 'mobile_logo_position',
array(
    'label' =>  esc_html__( 'Logo position (Mobile screens)' , 'caper' ),
    'section' => 'navbar',
    'choices' => array(
        'center' => array( // Required. Setting for this particular radio button choice
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/moblogcenter.png', // Required. URL for the image
            'name' =>  esc_html__( 'Center' , 'caper' ) // Required. Title text to display
        ),
        'left' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/moblogleft.png',
            'name' =>  esc_html__( 'Left' , 'caper' )
        ),
    )
)
) );

/* Add menu text size control */
 $wp_customize->add_setting( 'navbar_text_size',
 array(
     'default' => 'medium',
     'transport' => 'refresh',
     'sanitize_callback' => 'caper_sanitize_radio',
 )
 );
 $wp_customize->add_control( new Caper_Image_Radio_Button_Custom_Control( $wp_customize, 'navbar_text_size',
 array(
     'label' =>  esc_html__( ' Navbar Links Size' , 'caper' ),
     'section' => 'navbar',
     'choices' => array(
         'big' => array( // Required. Setting for this particular radio button choice
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/bigfont.png', // Required. URL for the image
             'name' =>  esc_html__( 'Large' , 'caper' ) // Required. Title text to display
         ),
         'medium' => array(
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/mediumfont.png',
             'name' =>  esc_html__( 'Medium' , 'caper' )
         ),
         'small' => array(
             'image' => trailingslashit( get_template_directory_uri() ) . 'assets/img/smallfont.png',
             'name' =>  esc_html__( 'Small' , 'caper' )
         ),
     )
 )
 ) );

 /* Add navbar background color control */
$wp_customize->add_setting( 'menu_color' , array(
    'default'     => '#ccc',
    'transport'   => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color' //validates 3 or 6 digit HTML hex color code
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
    'label'        => esc_html__( ' Menu Links Color ' , 'caper' ),
    'section'    => 'navbar',
    'settings'   => 'menu_color',
) ) );