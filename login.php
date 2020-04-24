<?php

require_once("veprime.php");

 ?>


<html>
      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Comptatible" content="ie=edge"> <!-- perdoret per te lejuar perdorues te zgjedhin ca versioni i Internet Explorer do paraqitet -->
        <link rel="stylesheet" href="style.css">
      <title> Login </title>
    </head>
<body>

    <br><br><br>
<form id="box" action="" method="POST">
    <div class="login-box">

        <p class="login"> <strong> login </strong> </p>

        <div class="username-part">
            Email <!-- ishte username e ndryshova dhe e bera email qe te bej krahasimet ne databaze vetem me email-->
            <br> <br>
            <i class="fa fa-user"></i>
            <input type="email" placeholder="Type your email" name="email" value="">
        </div>
           <br>
        <div class="username-part">
            Password
            <br> <br>
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Type your password" name="password" value="">
        </div>
          <button type="submit" name="SignIn" >Sign in</button><br>
        <p class="forgot-pass"> Forgot password?</p> <br> <br>
        <a href="signup.php" class="signup" >sign up</a>

    </div>
  </form>
</div>
</body>
</html>
