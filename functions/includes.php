<?php
function custom_theme_scripts() {
    /* CSS */
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.min.css', array(),'3.3.6', 'screen' );
    wp_enqueue_style( 'Estilo.global', get_template_directory_uri().'/assets/css/estilo.min.css', array(),'3.3.6', 'screen' );

    /* JS */
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '3.3.5', true );
    wp_enqueue_script( 'funcoes', get_template_directory_uri() . '/assets/js/funcoes.min.js', array('jquery'), '3.3.5', true );
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
