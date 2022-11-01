<?php
function theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_support');

function custom_register_styles(){
    $version = wp_get_theme()->get("Version");
    
    wp_enqueue_style("custom-style", get_template_directory_uri() . "/assets/css/style.css", array("custom-bootstrap"), $version, "all");
    wp_enqueue_style("custom-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("custom-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action("wp_enqueue_scripts", "custom_register_styles");

function custom_register_scripts(){
    $version = wp_get_theme()->get("Version");
    
    wp_enqueue_script("custom-slim", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", "all");
    wp_enqueue_script("custom-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", "all");
    wp_enqueue_script("custom-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", "all");
    wp_enqueue_script("custom-script", get_template_directory_uri() . "/assets/js/main.js", array(), $version, "all");
}

add_action("wp_enqueue_scripts", "custom_register_scripts");