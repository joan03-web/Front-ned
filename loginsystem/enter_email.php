<?php
  require_once("veprime.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form method="post">
		<h2 class="form-title">Reset password</h2>

		<div class="form-group">
			<label>Your email address</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset_password">Submit</button>
		</div>
	</form>
</body>
</html>
