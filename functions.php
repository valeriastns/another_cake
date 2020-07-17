<?php
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap', false );
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );






 