<?php
/*
Template Name: post page
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
    <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Выход">Выход</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th></th>
        </tr>
        <tr>
            <td><?php echo do_shortcode('[posts]'); ?></td>
        </tr>
    </table>
</div>
<?php wp_footer() ?>
</body>
</html>

