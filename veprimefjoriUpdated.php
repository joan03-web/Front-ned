<!-- <head>
<link rel="stylesheet" href="style1.css" type="text/css"/>
</head> -->

<?php

require_once("database.php");

$connection = CreateDatabase(); //CreateDatabase na jep nje connection string te cilen e ruajme tek variabli

// SIGN UP
if (isset($_POST["SignUp"])) {
  createData();
}

function createData(){
  /*
$first_name = textValue("first_name");
$last_name = textValue("last_name");
$email = textValue("email");
$password = textValue("password");
$confirmPassword = textValue("confirmPassword");
*/
  $first_name = mysqli_real_escape_string($GLOBALS['connection'], $_POST['first_name']);
  $last_name = mysqli_real_escape_string($GLOBALS['connection'], $_POST['last_name']);
  $email = mysqli_real_escape_string($GLOBALS['connection'], $_POST['email']);
  $password = mysqli_real_escape_string($GLOBALS['connection'], $_POST['password']);
  $confirmPassword =mysqli_real_escape_string($GLOBALS['connection'], $_POST['confirmPassword']);
  //tani kemi ruajtur te dhenat nga forma te variablat e mesiperm

  //Kontrollojme per empty fields
  if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirmPassword)){
    //header function qe e dergon userin perseri ne faqen sign-up
    //pjesa mbas empty fields ruan inf qe useri kishte shkruar me pare qe  mos ti fshihen dhe ato qe kishte shkruar ne rregull
    header("Location: signup.php?error=emptyfields&first_name=".$first_name."&last_name=".$last_name."&mail=".$email);
    exit(); //ndalon scriptin se beri run
    }

  // kontrollon per valid firstname&lastname
  //kontrollojme nese input characters are valid(brenda thonjezave specifikojme cf karakteresh do lejojme si input)
        else  if(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)){
            header("Location: signup.php?error=invaliduid&mail=".$email);
            exit();
          }


      //kontrollon nese kemi email dhe first&last name te sakte
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $first_name ) && !preg_match("/^[a-zA-Z]*$/", $last_name)){
        header("Location: signup.php?error=invalidmailfirst_namelastname");
        exit();
      }

      else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          //kontrollojm nqs user eshte regjistruar njehere
                $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
                $result = mysqli_query($GLOBALS['connection'], $user_check_query);
                $same_email = mysqli_fetch_assoc($result);


                if ($same_email) {
                   // if user exists
                  header("Location: signup.php?error=usedemail&first_name=".$first_name."&last_name=".$last_name);
                  exit();
                }

          } else {
            header("Location: signup.php?error=invalidmail&first_name=".$first_name."&last_name=".$last_name);
            exit();
          }
      //kontrollojme sigurine e pasw
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      $number    = preg_match('@[0-9]@', $password);
      $specialChars = preg_match('@[^\w]@', $password);

      if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        header("Location: signup.php?error=weakpwd");
        exit();
      }

    //kontrollojme nese pasw dhe conf-pasw jane njesoj
     else if($password !== $confirmPassword){
      header("Location: signup.php?error=paswordcheck&first_name=".$first_name."&last_name=".$last_name."&mail=".$email);
      exit();
    }

    else {
      $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name',
           '$last_name', '$email', '$password_hash');";
         mysqli_query($connection, $sql);
         header("Location: login.php?signup=success");
         //header("Location: login.php?signup=success"); ose e kalojme ne log in
         exit();
    }

  }

//LOGIN

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
    header("Location: login.php?login=emptyfields");
    exit();
  }
  else{
    //kontrollojme nese useri eshte i regjistruar
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($GLOBALS['connection'], $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      header("Location: login.php?login=nouserfound");
      exit();
    } else {
      //kontrollojme nese pasw qe shkr useri eshte i njejte me ate ne db
      if($row = mysqli_fetch_assoc($result)){
        //De-hashing the password
        $hashedPwdCheck = password_verify($password, $row['password']);
        if($hashedPwdCheck == false){
          header("Location: login.php?login=pswnotmatch");
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


?>
