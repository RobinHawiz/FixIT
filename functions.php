<?php

// Add menu
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny'
    ));
}

// Aktivera utvald bild
add_theme_support('post-thumbnails');

// Aktivera widget
add_action('widgets_init', 'dk_widget_init');

function dk_widget_init() {
    register_sidebar([
        'name'          => 'Homepage teaser',
        'id'            => 'homepage-teaser',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ]);
}