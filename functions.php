<?php
/**
 *
 * Functions.php sets up the site and provides some helper functions, which are used in the
 * 
 */
if ( ! function_exists( 'wpcodefish_setup' ) ) {
      function wpcodefish_setup(){
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
      }
}


add_action( 'after_setup_theme', 'wpcodefish_setup' );


function wpcodefish_scripts(){
    wp_enqueue_style('google_fonts', get_temp_dir().'/assets/css/reboot.css');
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700');
    wp_enqueue_style('codefish_styles',  get_stylesheet_uri());
   
}

 

add_action( 'wp_enqueue_scripts', 'wpcodefish_scripts' );



?>