<?php
function sdt_theme_styles(){
    // css
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css',
        array('bootstrap_css'));

    //javascripts
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js',
        array('jquery'), false, true);
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js',
        array('jquery', 'bootstrap_js'), false, true);
}

// local onde ativa as coisas
function sdt_after_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menu('top', 'Menu Superior');
}

// funçao de ativaçao dos widgets
function sdt_widgets(){

}