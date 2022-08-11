<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/styles.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('script', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'script');

   
   
}
add_action('wp_enqueue_scripts', 'add_script');