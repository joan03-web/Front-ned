<?php require_once("veprime.php"); ?>

<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Comptatible" content="ie=edge"> <!-- perdoret per te lejuar perdorues te zgjedhin ca versioni i Internet Explorer do paraqitet -->
      <link rel="stylesheet" href="login.css">
      <style media="screen">
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
      </style>
        <title> Login </title>
    </head>

<body style="background-image: url('bg.jpg')">
    <br><br><br>
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "login=emptyfields") == true) {
      echo '<p class="loginerror">Plotesoni te dy fushat</p>';
    }
    if(strpos($fullUrl, "login=nouserfound") == true) {
      echo '<p class="loginerror">Ju nuk jeni regjistruar me pare</p>';
    }
    if(strpos($fullUrl, "login=pswnotmatch") == true) {
      echo '<p class="loginerror">Ju lutem vendosni fjalekalimin e sakte</p>';
    }
    if(strpos($fullUrl, "login=error") == true) {
      echo '<p class="loginerror">Ju duhet te logoheni me pare</p>';
    }
    if(strpos($fullUrl, "login=success") == true) {
      echo '<p class="loginerror">Ju u log-uat me sukses!</p>';
    }
    ?>
<form id="box" method="post">
    <div class="login-box">
        <img src="logo1.png"alt="Wander around Tirana"style="width:80px;height:75px" class="img">
        <p class="login"> <strong> login </strong> </p>
        <div class="email-part">
            <p style="text-align: left">E-mail</p>
            <br>
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Type your e-mail" name="email" value="">
        </div>

        <div class="email-part">
            <p style="text-align: left">Password</p>
            <br>
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Type your password" name="password" value="">
        </div>
         <input class="btn" type="submit" name="SignIn" value="Login">
        <p class="forgot-pass "><a href="enter_email.php"> Forgot password?</p> </a> <br> <br> <br>
        <p class="signup"><a href="signup.php">  Sign up</a> </p>
    </div>
    </form>
</div>
</body>
</html>
