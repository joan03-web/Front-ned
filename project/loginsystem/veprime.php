<?php

require_once('../database/database.php');
session_start();
$connection = CreateDatabase(); //CreateDatabase na jep nje connection string te cilen e ruajme tek variabli

//------------------------------------------------------------- SIGN UP
if (isset($_POST["SignUp"])) {
  createData();
}

function createData(){

$first_name = textValue("first_name");
$last_name = textValue("last_name");
$email = textValue("email");
$password = textValue("password");
$confirmPassword = textValue("confirmPassword");

  //Kontrollojme per empty fields
  if($first_name && $last_name && $email && $password && $confirmPassword)
    {
    //header function qe e dergon userin perseri ne faqen sign-up
    //pjesa mbas empty fields ruan inf qe useri kishte shkruar me pare qe  mos ti fshihen dhe ato qe kishte shkruar ne rregull
    // kontrollon per valid firstname&lastname
    //kontrollojme nese input characters are valid(brenda thonjezave specifikojme cf karakteresh do lejojme si input)
      if(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name))
      {
        $_SESSION['error'] = "Use a valid Name/Last Name";
          header("Location: signup.php");
          exit();
      }
      else if (filter_var($email, FILTER_VALIDATE_EMAIL))
      {
            //kontrollojm nqs user eshte regjistruar njehere
            $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($GLOBALS['connection'], $user_check_query);
            $same_email = mysqli_fetch_assoc($result);

            if ($same_email) {
               // if user exists
              $_SESSION['error'] = "The email is already in use";
              header("Location: signup.php");
              exit();
              }

      }
        else
        {
            $_SESSION['error'] = "Put a valid Name/Last Name/email";
            header("Location: signup.php");
            exit();
        }
        //kontrollojme sigurine e pasw
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
        {
          $_SESSION['error'] = "Password should be at least 8 characters in length and should include at least
          one upper case letter, one number, and one special character!";
          header("Location: signup.php");
          exit();
        }

      //kontrollojme nese pasw dhe conf-pasw jane njesoj
       else if($password !== $confirmPassword)
       {
        $_SESSION['error'] = "Passwords don't match";
        header("Location: signup.php");
        exit();
      }

      //kontrollon nese kemi email dhe first&last name te sakte
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $first_name ) && !preg_match("/^[a-zA-Z]*$/", $last_name))
      {
        $_SESSION['error'] = "Put a valid Name/Last Name/Email";
        header("Location: signup.php");
        exit();
      }

      else
      {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name','$last_name', '$email', '$password_hash');";
           mysqli_query($GLOBALS['connection'], $sql);
           header("Location: login.php");
           //header("Location: login.php?signup=success"); ose e kalojme ne log in
           exit();
      }


    }else {
      $_SESSION['error'] = "Complete the form";
      header("Location: signup.php");
      exit();
    }

}

//--------------------------------------------------------------------LOGIN
if (isset($_POST["SignIn"])) {
  checkLogin();
}

function checkLogin(){
  //marrim te dhenat nga forma
  $email = mysqli_real_escape_string($GLOBALS['connection'], $_POST['email']);
  $password = mysqli_real_escape_string($GLOBALS['connection'], $_POST['password']);

  //Error handlers
  //kontrollojme nqs jane lene bosh  fushat e inputit
  if(empty($email) || empty($password)){
    $_SESSION['error']= "Empty fields";
    header("Location: login.php");
    exit();
  }
  else{
    //kontrollojme nese useri eshte i regjistruar
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      $_SESSION['error'] = "User not found";
      header("Location: login.php");
      exit();
    } else {
      //kontrollojme nese pasw qe shkr useri eshte i njejte me ate ne db
      if($row = mysqli_fetch_assoc($result)){
        //De-hashing the password
        $hashedPwdCheck = password_verify($password, $row['password']);
        if($hashedPwdCheck == false){
          $_SESSION['error'] = "Incorrect password";
          header("Location: login.php");
          exit();
        } else if($hashedPwdCheck == true){
          //log in the user
          $_SESSION['u_id'] = $row['id'];
          $_SESSION['u_first_name'] = $row['first_name'];
          $_SESSION['u_last_name'] = $row['last_name'];
          $_SESSION['u_email'] = $row['email'];
          header("Location: homepage.php?login=success");
          exit();
        }
      }
    }
  }
}



function textValue($value){
  $text = mysqli_real_escape_string($GLOBALS['connection'], trim($_POST[$value]));// trim funksion per te na mbrojtur nga sql injections,
                                                                                  // me ane te globals marrim connection e databazes
  if (empty($text)) {// nqs nuk eshte forma e plotesuar
    return false;
  }else {
    return $text; // nqs plotesohet nga kthehet texti
  }

}

?>
