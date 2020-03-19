<?php
/*
Template Name: login page
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
		<label for="user_name">User Name</label>
		<input id="user_name" type="text">
		<label for="password">Password</label>
		<input id="password" type="email">
		<button id="loginBtn" type="submit">Login</button>
	</div>
<a href="http://wordpress/register/" >Go to register</a>
  <?php wp_footer() ?>
</body>
</html>
s