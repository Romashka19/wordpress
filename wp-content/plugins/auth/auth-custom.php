<?php

function authcustom_script_method(){
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/auth.js', array('jquery') ,'1.0',true);
}
add_action( 'wp_enqueue_scripts', 'authcustom_script_method' );

function my_custom_login(){
    var_dump($_POST);
}
add_action('wp_ajax_login','my_custom_login');