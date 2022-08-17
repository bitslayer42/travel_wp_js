<?php

// "Simple" method to enqueue a JavaScript file 
// The wp_enqueue_scripts WordPress "hook" will run your my_theme_enqueue_styles() function at the right time
// The my_theme_enqueue_styles() function can be used to enqueue any number of script and style files

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function my_theme_enqueue_styles() {
  if (is_page('about-us')) {
    $cssTimeStamp = filemtime(get_stylesheet_directory() . '/style.css');
    wp_enqueue_style( 'tj-style', get_stylesheet_directory_uri() . '/style.css', array(), $cssTimeStamp );
    $dataTimeStamp = filemtime( get_stylesheet_directory() . '/data.js');
    wp_enqueue_script('tj-test-js2', get_stylesheet_directory_uri() . '/data.js', array(), $dataTimeStamp, true);  
    $scriptTimeStamp = filemtime( get_stylesheet_directory() . '/tree.js');
    wp_enqueue_script('tj-test-js', get_stylesheet_directory_uri() . '/tree.js', array(), $scriptTimeStamp, true);
  }
}
