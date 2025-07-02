<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('graboboi-child', get_stylesheet_directory_uri() . '/style.css', [], wp_get_theme()->get('Version'));
});
