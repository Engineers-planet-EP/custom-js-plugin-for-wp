<?php
/*
Plugin Name: Custom Code Plugin
Plugin URI: https://yourwebsite.com
Description: A plugin to allow custom HTML, JS, and CSS in WordPress posts/pages.
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
License: GPL2
*/

// Enqueue custom CSS and JS files
function custom_code_enqueue_scripts() {
    wp_enqueue_style('custom-code-css', plugins_url('css/custom-code.css', __FILE__));
    wp_enqueue_script('custom-code-js', plugins_url('js/custom-code.js', __FILE__), array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_code_enqueue_scripts');

// Shortcode to allow custom HTML, JS, and CSS input
function custom_code_shortcode($atts, $content = null) {
    // Return the content inside the shortcode with custom JS and CSS
    return '<div class="custom-code-container">' . do_shortcode($content) . '</div>';
}
add_shortcode('custom_code', 'custom_code_shortcode');
?>
