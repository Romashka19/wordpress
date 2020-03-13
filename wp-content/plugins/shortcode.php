<?php

/*
 * Plugin Name: shortcode
 * Plugin URI:
 * Description: count auth
 * Version: 1.0
 * Author: Daniil
 * Author URI:
 * License: GPLv2 or later
 */

function say_hello(){
    return '<h1>welcome to my web site</h1>';
}

function get_info(){
    $url = "https://jsonplaceholder.typicode.com/posts";
    $contents = file_get_contents($url);
    $results = json_decode($contents);
    foreach ($results as $result) {
        print ' <tr>
                  <td>'. $result->id .'</td>
                  <td>'. $result->userId .'</td>
                  <td>'. $result->title .'</td>
                  <td>'. $result->body .'</td>
                </tr>' ;
    }
}


add_shortcode('json', 'get_info');
add_shortcode('hello', 'say_hello');

?>
