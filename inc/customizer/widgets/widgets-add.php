<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Register sidebars per user request
 *
 */

function saturn_widgets_add($args1) {
switch ($args1) {
    case 1:
        register_sidebar(
            array(
                'name'          => esc_html__( 'Case 1', 'saturn' ),
                'id'            => 's1-c1',
                'description'   => esc_html__( 'Add widgets here.', 'saturn' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
                'container_selector' => '#widget-area',	
            ));
        break;
    case 2:
        register_sidebar(
            array(
                'name'          => esc_html__( 'Case 2', 'saturn' ),
                'id'            => 's1-c2',
                'description'   => esc_html__( 'Add widgets here.', 'saturn' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
                'container_selector' => '#widget-area',	
            ));
        break;
    case 3:
        register_sidebar(
            array(
                'name'          => esc_html__( 'Case 3', 'saturn' ),
                'id'            => 's1-c3',
                'description'   => esc_html__( 'Add widgets here.', 'saturn' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
                'container_selector' => '#widget-area',	
            ));
        break;

    }
}
add_action( 'widgets_init', 'saturn_widgets_add' );
// add_action( 'customize_register', 'saturn_widgets_add' );
