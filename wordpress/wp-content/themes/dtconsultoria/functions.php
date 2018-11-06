<?php
/* Aqui serão colocados toda a lógica do sistema */
//Include
require get_template_directory().'/include/setup.php';

//Hooks
add_action('wp_enqueue_scripts', 'sdt_theme_styles');
add_action('after_setup_theme', 'sdt_after_setup');
add_action('widgets_init', 'sdt_widgets');