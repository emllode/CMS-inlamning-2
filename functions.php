<?php

function add_stylesheet()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addStyleSheets');


register_nav_menus(
    array(
        'main-menu' => 'primary',
    )
)