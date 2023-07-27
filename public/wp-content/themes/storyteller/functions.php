<?php

function story_teller_theme_files()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style('story_teller_main_sttyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'story_teller_theme_files');