<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Add Sanitizer
 *
 */
 
//radio box sanitization function

function saturn_sanitize_radio( $input, $setting ){

    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible radio box options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                    
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
    
}



//checkbox sanitization function
function saturn_sanitize_checkbox( $input ){
            
    //returns true if checkbox is checked
    return ( isset( $input ) ? true : false );
}


//select sanitization function
function saturn_sanitize_select( $input, $setting ){
        
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                        
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        
}

//file input sanitization function
function saturn_sanitize_file( $file, $setting ) {
        
    //allowed file types
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png'
    );
        
    //check file type from file name
    $file_ext = wp_check_filetype( $file, $mimes );
        
    //if file has a valid mime type return it, otherwise return default
    return ( $file_ext['ext'] ? $file : $setting->default );
}
