<?php
  require_once("veprime.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="enter_email.css">
</head>
<body>
  <form method="post" id="reset-box">
	<div class="div-box"> 
	  <img src="logo1.png" alt="Wander around Tirana" class="img">
		<h2 class="form-title">Reset password</h2>
		<div class="form-group">
			<input type="email" placeholder="Type your e-mail address" name="email">
		</div> <br> <br>
		 <button class="btn" type="submit" name="reset_password" >Submit</button>
		
    </div>
	</form>
</body>
</html>
