<?php
function custom_styles() 
{
    wp_register_style(
        'style',
        get_template_directory_uri(), 'scss/style.scss'
    );

    wp_enqueu_style('style')
}

add_action('wp_enqueue_scripts', 'load_css');