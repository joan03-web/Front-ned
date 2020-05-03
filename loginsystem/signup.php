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
  <?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($fullUrl, "error=emptyfields") == true) {
    echo '<p class="signuperror">Plotesoni te gjitha fushat</p>';
  }
  if(strpos($fullUrl, "error=invaliduid") == true) {
    echo '<p class="signuperror">Vendosni emer/mbiemer te sakte</p>';
  }
  if(strpos($fullUrl, "error=invalidmailfirst_namelastname") == true) {
    echo '<p class="signuperror">Vendosni emer/mbiemer/email te sakte</p>';
  }
  if(strpos($fullUrl, "error=invalidmail") == true) {
    echo '<p class="signuperror">Vendosni email te sakte</p>';
  }
  if(strpos($fullUrl, "error=usedemail") == true) {
    echo '<p class="signuperror">Vendosni nje email qe nuk eshte perdorur me pare</p>';
  }
  if(strpos($fullUrl, "error=shortpwd") == true) {
  echo '<p class="signuperror">Fjalekalimi juaj duhet te permbaje te pakten 6 karaktere</p>';
 }
  if(strpos($fullUrl, "error=paswordcheck") == true) {
    echo '<p class="signuperror">Fjalekalimet nuk perputhen me njeri tjetrin</p>';
  }
  if(strpos($fullUrl, "error=weakpwd") == true) {
    echo '<p class="signuperror">Password should be at least 8 characters in length and should include at least
    one upper case letter, one number, and one special character!</p>';
  }
  if(strpos($fullUrl, "signup=success") == true) {
    echo '<p class="signuperror">Ju u regjistruat me sukses!</p>';
  }

   ?>

<form method="post" id="box-signup">
  <div class="signup">
   <div class="djathtas">
    <img src="logo1.png" alt="Wander around Tirana" style="width:80px;height:75px" class="logo">
      <p class="sign-up">Create an account</p>
        <div class="emer">
         <?php
         if(isset($_GET['first_name'])){
         $first_name = $_GET['first_name'];
           echo '<input type="text" placeholder="First name" name="first_name" value="'.$first_name.'">';
          }
        else{
           echo '<input type="text" placeholder="First name" name="first_name">';
            }
          ?>
         </div>
         <br>
       <div class="mbiemer">
        <?php
        if(isset($_GET['last_name'])){
        $last_name = $_GET['last_name'];
          echo '<input type="text" placeholder="Last name" name="last_name" value="'.$last_name.'">';
         }
      else{
          echo '<input type="text" placeholder="Last name" name="last_name">';
            }
        ?>
        </div>
         <br>
        <div class="email">
          <input type="text" placeholder="E-mail" name="email" value="">
        </div>
         <br>
        <div class="email">
         <input type="password" placeholder="Password" name="password" >
        </div>
        <br>
        <div class="email">
          <input type="password" placeholder="Confirm password" name="confirmPassword" >
        </div>
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
