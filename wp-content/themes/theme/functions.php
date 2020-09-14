<?php
function load_stylesheets(){
    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css',array(),1,'all');
    wp_enqueue_style('main-css');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');



//Footer functions
function load_js(){
    wp_register_script('jquery-min', get_template_directory_uri().'/assets/js/jquery.min.js', array(), 1,1,1);
    wp_enqueue_script('jquery-min');

    wp_register_script('jquery-scrollex', get_template_directory_uri().'/assets/js/jquery.scrollex.js', array(), 1,1,1);
    wp_enqueue_script('jquery-scrollex');

    wp_register_script('jquery-scrolly', get_template_directory_uri().'/assets/js/jquery.scrolly.js', array(), 1,1,1);
    wp_enqueue_script('jquery-scrolly');

    wp_register_script('skel', get_template_directory_uri().'/assets/js/skel.min.js', array(), 1,1,1);
    wp_enqueue_script('skel');

    wp_register_script('util', get_template_directory_uri().'/assets/js/util.js', array(), 1,1,1);
    wp_enqueue_script('util');

    wp_register_script('main', get_template_directory_uri().'/assets/js/main.js', array(), 1,1,1);
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'load_js');

//menu
register_nav_menus(array(
    'primary' => __('Menu'),

));