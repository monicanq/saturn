<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Breaks Settings and Controls
 *
 */
 
 
/*********** Break One Customization ***********/
// Break One Height
$wp_customize->add_setting( 'break_one_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
) );
    
$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_one_height', array(
    'label'	=>  'Height of the first section break',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'section_breaks',
) ) );
        
// Break One Image
// $wp_customize->get_setting( 'break_one_img' )->transport = 'postMessage';
$wp_customize->add_setting('break_one_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_one_img', array(
    'label' => __( 'Background Image for first break', 'theme-slug' ),
    'section' => 'section_breaks',
    'settings' => 'break_one_img',
    'sanitize_callback' => 'saturn_sanitize_image',
    ))
);

    /*Image One*/
$wp_customize->add_setting( 'parallax_break_one' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'parallax_break_one', array(
    'label' => 'Make first image fixed',
    'section' => 'section_breaks',
    'settings' => 'parallax_break_one',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );



/*********** Break Two Customization ***********/

// Break Two Height
$wp_customize->add_setting( 'break_two_height' , array(
    'default'     => 100,
    'transport'   => 'postMessage',
) );
    
$wp_customize->add_control( new WP_Customize_Range( $wp_customize, 'break_two_height', array(
    'label'	=>  'Height of the second section break',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'section' => 'section_breaks',
) ) );

// Break Two Image
$wp_customize->add_setting('break_two_img', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_image',
));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'break_two_img', array(
    'label' => __( 'ackground Image for second break', 'theme-slug' ),
    'section' => 'section_breaks',
    'settings' => 'break_two_img',
))
);
        
/*Image Two*/
$wp_customize->add_setting( 'parallax_break_two' , array(
    'default'     => 'yes',
    'transport'   => 'refresh',
    'sanitize_callback' => 'saturn_sanitize_radio'
) );


$wp_customize->add_control( 'parallax_break_two', array(
    'label' => 'Make second image fixed',
    'section' => 'section_breaks',
    'settings' => 'parallax_break_two',
    'type' => 'radio',
    'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
    ),
) );