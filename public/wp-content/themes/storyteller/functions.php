<?php
/**
 * Summary of custom_theme_styles
 * @return void
 */
function custom_theme_styles() {
    // Enqueue your custom stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . 'app/public/wp-content/themes/storyteller/style.css', array(), '1.0', 'all');

    // Debug message
    error_log('Custom stylesheet enqueued!');
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');
