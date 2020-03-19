<?php

function authcustom_script_method(){
    wp_register_script( 'custom', get_template_directory_uri() . '/js/auth.js', array('jquery') ,'1.0',true);
    wp_enqueue_script( 'custom');
}
add_action( 'wp_enqueue_scripts', 'authcustom_script_method' );

function my_custom_login(){
    $user = wp_signon();

    if ( is_wp_error($user) ) {
        echo $user->get_error_message();
    }

}

function my_custom_register(){
    $user_name = $_POST['user_login'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    wp_create_user($user_name,$password,$user_email);
}

add_action('wp_ajax_nopriv_login','my_custom_login');
add_action('wp_ajax_nopriv_register','my_custom_register');