<?php

require_once('../../database/database.php');


$connection = CreateDatabase(); //CreateDatabase na jep nje connection string te cilen e ruajme tek variabli


if (isset($_POST['reset_password'])) {
  pass_reset();
}



function pass_reset(){
  $email = mysqli_real_escape_string($GLOBALS['connection'], $_POST['email']);

  $sql = "SELECT email FROM users WHERE email = '$email'";
  $conn = mysqli_query($GLOBALS['connection'], $sql);
  $count = mysqli_num_rows($conn);

  if ($count == 1) {
    $row = mysqli_fetch_assoc($conn);
    $to = $row['email'];

    $pass= rand(999, 99999);
    $password_hash = md5($pass);

    $subject = "Your recovered password";
    $message = "use this password to login " . $password_hash;


    if (mail($to, $subject, $message)) {
      echo "Your password was sent to your email";
    }else {
      echo "Try again";
    }

    $u_sql = "UPDATE users SET password = '$password_hash' WHERE email = '$email' ";
    $res = mysqli_query($GLOBALS['connection'], $u_sql);
  }
}

?>
