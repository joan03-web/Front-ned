<?php require_once("veprime.php"); ?>

<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Comptatible" content="ie=edge"> <!-- perdoret per te lejuar perdorues te zgjedhin ca versioni i Internet Explorer do paraqitet -->
      <link rel="stylesheet" href="login.css">
      <style media="screen">
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
      </style>
        <title> Login </title>
    </head>

    <br><br><br>
<form id="box" method="post">
    <div class="login-box">
        <img src="foto_login_signup/logo1.png"alt="Wander around Tirana"style="width:80px;height:75px" class="img">
        <p class="login"> <strong> login </strong> </p>
        <div class="email-part">
            <p style="text-align: left">E-mail</p>
            <br>
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Type your e-mail" name="email" value="">
        </div>

        <div class="email-part">
            <p style="text-align: left">Password</p
            <br>
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Type your password" name="password" value="">
        </div>
        <?php

        if (isset($_SESSION['error'])) {
          echo '<p style="color:red">'. htmlentities($_SESSION['error'])."</p>\n";
          unset($_SESSION['error']);//e fshim
        }
         ?>
         <input class="btn" type="submit" name="SignIn" value="Login">
        <p class="forgot-pass "><a href="forgotPass/enter_email.php"> Forgot password?</p> </a> <br> <br> <br>
        <p class="signup"><a href="signup.php">  Sign up</a> </p>
    </div>
    </form>
</div>
</body>
</html>
