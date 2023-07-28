<?php

function story_teller_theme_files()
{
    // REMOVE microtime METHOD CALL IN PROD. REPLACE WITH VERSION i.e "1.0"
    wp_enqueue_script('story_teller_main_script', get_theme_file_uri('/js/main.js'), null, microtime(), true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('story_teller_main_styles', get_stylesheet_uri(), null, microtime());
}

add_action('wp_enqueue_scripts', 'story_teller_theme_files');

function story_teller_features()
{
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'story_teller_features');

function add_aos_animation()
{
    wp_enqueue_style('AOS_animate', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', false, null);
    wp_enqueue_script('AOS', '//cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', false, null, true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/animate.js', array('AOS'), null, true);
}

add_action('wp_enqueue_scripts', 'add_aos_animation');