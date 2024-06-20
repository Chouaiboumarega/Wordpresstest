<?php

function montheme_supports()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('menus');

    register_nav_menu('header', 'En tete du menu');

}


function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://maxdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://maxdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.css', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' [], false, true);
    wp_deregister_script('jquery');
    wp_deregister_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true );
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}


function montheme_title($title){
    return 'salut';

}

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_script', 'montheme_register_assets');
add_filter('wp_title', 'montheme_title');

add_theme_support('title-tag');
