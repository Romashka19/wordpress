<?php
/*
Template Name: Custom page
*/

echo do_shortcode('[hello]');
?>

<table>
    <tr>
        <th>Id</th>
        <th>UserId</th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    <tr>
        <td><?php echo do_shortcode('[json]'); ?></td>
    </tr>
</table>
