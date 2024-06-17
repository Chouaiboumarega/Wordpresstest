<?php

function montheme_supports (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function montheme_register_assets_css (){
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
}

function montheme_register_assets (){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}


add_theme_support('title-tag');