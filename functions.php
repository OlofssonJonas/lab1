<?php

//  add_theme_support('menus');
add_theme_support('post-thumbnails');

//köa in 
function style() {
    wp_enqueue_style('bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.css", array(), false, 'all');
    wp_enqueue_style('css', get_template_directory_uri(). "/assets/css/style.css");
    wp_enqueue_style('font', get_template_directory_uri(). "/assets/css/font-awesome.css");
    
    
}
add_action('wp_enqueue_scripts', 'style');

function script() {
    
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri(). '/assets/js/jquery.js');
    wp_enqueue_script('jquery');

    wp_register_script('js', get_template_directory_uri(). '/assets/js/');
    wp_enqueue_script('js');
}
add_action('wp_enqueue_scripts', 'script');


//funktion för att registrera menyer
    function menu (){

    $locations = array(
        'primary' => "Header Menu",
        'side' => "Side Menu",
        'footer' => "Footer Menu"
        );
        register_nav_menus($locations);
    }
    
add_action('init', 'menu');


// function register_custom_menu() {
//     register_nav_menu('custom-menu',__('Custom Menu'));
// }
// add_action('init', 'register_custom_menu');
?>