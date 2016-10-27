<?php

function theme_gsap_script() {  // This loads GSAP - used for animations
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/wp-content/js/custom-gsap-scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

function my_theme_enqueue_styles() {  // This loads the js from the parent theme 'Blade' - AFTER all other js listed here

    $parent_style = 'parent-style'; // update parent theme name - Blade?

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
