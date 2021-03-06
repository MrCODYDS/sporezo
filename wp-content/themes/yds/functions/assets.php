<?php

function load_assets() {

    // Include main.css
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/dest/main.css', array(), false);

    // Include slick.css
    wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/src/slick/slick.css', array(), false);
    wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/src/slick/slick-theme.css', array(), false);

    // Remove default jQuery (to remove it from header)
    wp_deregister_script('jquery');
    
    // Include default jQuery (and put it in footer)
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'));
    wp_enqueue_script('jquery', '', '', '', true);

    // Include jquery UI datepicker
    wp_enqueue_script( 'jquery-ui-datepicker' );

    // Include modal.js
    wp_enqueue_script('modal-js', get_template_directory_uri() . '/src/js/modal.js', array(), false, true);
    
    // Include main.js
    wp_enqueue_script('main-js', get_template_directory_uri() . '/src/js/main.js', array(), false, true );

    // Include slider.js
    wp_enqueue_script('slider-js', get_template_directory_uri() . '/src/js/slider.js', array(), false, true );

    // Include slick.min.js
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/src/slick/slick.min.js', array(), false, true);

    // Include datapicker-nl-BE.js
    wp_enqueue_script('datapicker-nl-BE-js', get_template_directory_uri() . '/src/js/datepicker-nl-BE.js', array(), false, true);

}

add_action('wp_enqueue_scripts', 'load_assets');