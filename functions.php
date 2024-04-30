<?php

function wpdevs_load_script(){
    wp_enqueue_style( 'wpdevs_style_load', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'wpdevs_load_script' );