<?php
//öppnar upp för att använda menyer
add_theme_support('menus');
//öppnar upp för att använda thumbnails
add_theme_support('post-thumbnails');
//öppnar upp för att använda widgets
add_theme_support('widgets');

//köa in CSS
function style() {
    wp_enqueue_style('bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.css", array(), false, 'all');
    wp_enqueue_style('css', get_template_directory_uri(). "/assets/css/style.css");
    wp_enqueue_style('font', get_template_directory_uri(). "/assets/css/font-awesome.css");

}
add_action('wp_enqueue_scripts', 'style');

function scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery.js', array(), '1.0', true);
    wp_enqueue_script('js', get_template_directory_uri(). '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'scripts');


//funktion för att registrera menyer
    function menu (){

    $locations = array(
        'primary' => "Header Menu",
        'side' => "Side Menu",
        );
        register_nav_menus($locations);
    }
    
add_action('init', 'menu');


//registrerar widgetar
 function theme_widgets() {
    $widgets = array(
        array (
            'name' => 'rightWidget1',
            'id' => 'rightWidget1',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            'name' => 'rightWidget2',
            'id' => 'rightWidget2',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            'name' => 'rightWidget3',
            'id' => 'rightWidget3',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            'name' => 'footWidget1',
            'id' => 'footWidget1',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
                'name' => 'footWidget2',
            'id' => 'footWidget2',
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            'name' => 'footWidget3',
            'id' => 'footWidget3',
            'before_widget' => '',
            'after_widget' => ''
            
        ),
        array(
            'name' => 'footWidget4',
            'id' => 'footWidget4',
            'before_widget' => '',
            'after_widget' => ''
            
        ),
    );
    foreach ($widgets as $widget) {
        register_sidebar($widget);
    }
}
add_action('init', 'theme_widgets');





?>