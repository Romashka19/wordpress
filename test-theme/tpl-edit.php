<?php
/*
Template Name: edit post
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
    <div>
        <?php echo do_shortcode('[post]'); ?>
    </div>
<?php wp_footer() ?>
</body>
</html>
