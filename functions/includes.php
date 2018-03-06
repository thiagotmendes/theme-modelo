<?php
function jQuery3(){
  $date = date("dmy");
  if (!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri()."/assets/js/jquery.min.js", false, $date);
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'jQuery3');

function custom_theme_scripts() {
  $date = date("dmy");
  /* CSS */
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.min.css', array(),$date, 'screen' );
  wp_enqueue_style( 'Estilo.global', get_template_directory_uri().'/assets/css/estilo.min.css', array(),$date, 'screen' );

  /* JS */
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), $date, true );
  wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $date, true );
  wp_enqueue_script( 'funcoes', get_template_directory_uri() . '/assets/js/funcoes.min.js', array('jquery'), $date, true );
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
