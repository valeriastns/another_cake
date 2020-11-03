<?php
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-font1', 'https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap', false );
 wp_enqueue_style( 'custom-google-font2', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );


 add_action( 'after_setup_theme', 'yourtheme_setup' );
 
 function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
 }

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

 