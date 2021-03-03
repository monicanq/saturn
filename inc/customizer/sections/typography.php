<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Typography Settings and Controls
 *
 */

// Test of Google Font Select Control
$wp_customize->add_setting( 'sample_google_font_select',
     array(
        //  'default' => $this->defaults['body_font'],
         'sanitize_callback' => 'saturn_google_font_sanitization'
     )
 );
 $wp_customize->add_control( new saturn_Google_Font_Select_Custom_Control( $wp_customize, 'sample_google_font_select',
     array(
         'label' => __( 'Choose a Font for your Theme', 'saturn' ),
         'description' => esc_html__( 'All Google Fonts sorted alphabetically', 'saturn' ),
         'section' => 'typography',
         'input_attrs' => array(
             'font_count' => 'all',
             'orderby' => 'alpha',
         ),
     )
 ) );