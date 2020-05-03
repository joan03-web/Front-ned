<?php
require_once("veprime.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Comptatible" content="ie=edge"> <!-- perdoret per te lejuar perdorues te zgjedhin ca versioni i Internet Explorer do paraqitet -->
      <link rel="stylesheet" href="signup.css">
        <title> Sign up </title>
</head>

<body style="background-image: url('s7-4.jpg')">

<form method="post" id="box-signup">
  <div class="signup">
   <div class="djathtas">
    <img src="logo1.png" alt="Wander around Tirana" style="width:80px;height:75px" class="logo">
      <p class="sign-up">Create an account</p>
        <div class="emer">
        <input type="text" placeholder="First name" name="first_name" >
         </div>
         <br>
       <div class="mbiemer">
      <input type="text" placeholder="Last name" name="last_name">
        </div>
         <br>
        <div class="email">
          <input type="text" placeholder="E-mail" name="email">
        </div>
         <br>
        <div class="email">
         <input type="password" placeholder="Password" name="password" >
        </div>
        <br>
        <div class="email">
          <input type="password" placeholder="Confirm password" name="confirmPassword" >
        </div>

        <?php
        if (isset($_SESSION['error'])) {
          echo '<p style="color:red">'. htmlentities($_SESSION['error'])."</p>\n";
          unset($_SESSION['error']);//e fshim
        }
         ?>

        <br>
        <input class="btn" type="submit" name="SignUp" value="Sign Up">
         <p style="text-align: center; color: black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size:14px;padding-top: -50px; width:50%; display: table-cell; padding-left: 100px;
                padding-right: 5px;padding-bottom: 30px;"> Already a member?</p>
         <p class="member"><a href="login.php"> Login </a></p>

        </div>
        <div class="majtas">    </div>
      </div>
  </form>
</body>
</html>
