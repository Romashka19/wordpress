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
	<div>
		<label for="user_name">User Name</label>
		<input id="user_name" type="text">
		<label for="password">Password</label>
		<input id="password" type="email">
		<button id="loginBtn" type="submit">Login</button>
	</div>
  <?php wp_footer() ?>
</body>
</html>
