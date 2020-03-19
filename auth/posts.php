<?php
function edit_script_method(){
    wp_register_script( 'edit', get_template_directory_uri() . '/js/edit.js', array('jquery') ,'1.0',true);
    wp_enqueue_script( 'edit');
}
add_action( 'wp_enqueue_scripts', 'edit_script_method' );

function custom_get_all_posts(){
    $posts = get_posts(array());
    foreach ($posts as $post){
        print ' <tr>
                  <td>'. $post->ID .'</td>
                  <td>'. $post->post_title .'</td>
                  <td>'. $post->post_content .'</td>
                  <td><a href="http://wordpress/info-page/edit-post?post='. $post->ID .'" id="'. $post->ID .'">Edit</a></td>
                </tr>' ;
    }

}
add_shortcode('posts', 'custom_get_all_posts');

function custom_view_post(){
    $posts = get_posts(array());
    $post_id = $_GET["post"];
    foreach ($posts as $post){
        if($post->ID == $post_id){
            print ' <input id="post_id" value="'. $post_id .'" type="hidden"></label>
                    <label for="title">Заголовок</label>
                    <input id="title" placeholder="'. $post->post_title .'"></input>
                    <label for="content">Контент</label>
                    <input id="content" placeholder="'. $post->post_content .'"></input>
                    <button id="edit_post">Edit</button>
                    <button id="delete_post">Delete</button>';
        }
    }
}

function custom_edit_post(){
    if(!$_POST['post_title']){
        $post = get_post($_POST['post_id']);
        $post_title = $post->post_title;
    } else{
        $post_title = $_POST['post_title'];
    }

    if(!$_POST['post_content']){
        $post = get_post($_POST['post_id']);
        $post_content = $post->post_content;
    } else{
        $post_content = $_POST['post_content'];
    }
    $new_post = array(
        'ID' => $_POST['post_id'],
        'post_title' => $post_title,
        'post_content' => $post_content,
        'post_status'   => 'publish',
    );
    wp_insert_post($new_post);
}
function custom_delete_post(){
    wp_delete_post( $_POST['post_id'] );
}
add_action('wp_ajax_edit','custom_edit_post');
add_action('wp_ajax_delete','custom_delete_post');
add_shortcode('post', 'custom_view_post');