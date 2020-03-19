<?php
/*
Template Name: Register page
*/


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head() ?>
    <title>Document</title>
</head>
<body>
<a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Выход">Выход</a>
<div>
    <label for="register_email">Email</label>
    <input id="register_email" type="email">
    <label for="register_name">user name</label>
    <input id="register_name" type="text">
    <label for="register_pwd">password</label>
    <input id="register_pwd" type="text">
    <button id="registerBtn" type="submit">Register</button>
</div>
<a href="http://wordpress/login/" >Go to login</a>
<?php wp_footer() ?>
</body>
</html>

