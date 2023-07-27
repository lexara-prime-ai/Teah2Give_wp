<?php

function story_teller_theme_files()
{
    // REMOVE microtime METHOD CALL IN PROD. REPLACE WITH VERSION i.e "1.0"
    wp_enqueue_script('story_teller_main_script', get_theme_file_uri('/js/theme.js'), NULL, microtime(), true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('story_teller_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'story_teller_theme_files');

function story_teller_features() {
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'story_teller_features');