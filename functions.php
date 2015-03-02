<?php

//-------------------------

/*
 * WordPress Sample function and action
 * for loading scripts in themes
 */
 
// Let's hook in our function with the javascript files with the wp_enqueue_scripts hook 

add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Register some javascript files, because we love javascript files. Enqueue a couple as well 

function load_scripts() {
 	wp_register_script( 'home.js', get_stylesheet_directory_uri() . '/js/home.js', array('jquery'), '1.0', true );
  	wp_register_script( 'scripts.js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script( 'scripts.js' );
    
   /* if( is_front_page() ) {
  		wp_enqueue_script( 'home.js' );
  	}
*/
}

//-------------------------
?>