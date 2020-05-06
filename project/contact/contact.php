<?php
  require_once("v_contact.php");
  ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=decive-width, initial-scale=1.0">
  <meta http-http-equiv="X-UA-Compatible" content="ie-edge">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700"
   rel="stylesheet">


  <link rel="stylesheet" href="contact.css">
  </head>

  <body>
    <div class="wrapper">
      <div class = "homepage">
            <img class="logo" src="../loginsystem/foto_login_signup/logo transparente.png" alt="Wander Around Tirana">
        <p class="Wat"> Wander Around Tirana</p>
        <p class="Wat2">In Tirana there is always more than what meets the eye</p>
        <div class="list">
            <ul>
                <li> <a href="/project/loginsystem/Homepage.php">
                    <div class="icon">
                        <i class="fa fa-home"></i>
                        <i class="fa fa-home"></i>
                    </div>
                    Home </a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                        <i class="fa fa-users"></i>
                    </div>
                    About us </a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                        <i class="fa fa-map-marker"></i>
                    </div>
                    Explore Tirana </a>
                </li>
                <li> <a href="contact.php">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                        <i class="fa fa-envelope"></i>
                    </div>
                    Contact us</a>
                </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-user"></i>
                    </div>
                    Profile </a>
                 </li>
                <li> <a href="#">
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                        <i class="fa fa-user-plus"></i>
                    </div>
                    Be a member </a>
                    <ul>
                        <li> <a href="/project/loginsystem/signup.php"> Sign Up </a></li>
                        <li> <a href="/project/loginsystem/login.php"> Login </a></li>
                    </ul>
                </li>
            </ul>
        </div>

         <div class="header">
        <h1>Let us help you</h1>
      </div>
      <div class="forma">
        <form class="form" action="contact.php" method="POST">
          <input type="text" name="name" placeholder="Name" required/>
            <input type="text" name="email" placeholder="E-mail" required/>
            <textarea id="msg" rows="6" cols="100" name="comment">Message</textarea>
            <?php
            if (isset($_SESSION['error'])) {
              echo '<p style="color:red">'. htmlentities($_SESSION['error'])."</p>\n";
              unset($_SESSION['error']);//e fshim
            }
             ?>
             <button type="submit" name="submit"class="button">SEND</button>

        </form>
     </div>
    </div>
</body>
</html>
