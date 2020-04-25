<head>
<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
<?php

require_once("database.php");

$connection = CreateDatabase(); //CreateDatabase na jep nje connection string te cilen e ruajme tek variabli

// SIGN UP

if (isset($_POST["SignUp"])) {
  createData();
}

function createData(){
  $first_name = textValue("first_name");
  $last_name = textValue("last_name");
  $email = textValue("email");
  $password = textValue("password");
  //tani kemi te ruajt te dhenat nga forma te variablat e mesiperm

//kontrollojm nqs variablat kane data
  if ($first_name && $last_name && $email && $password ) {

//kontrollojm nqs user eshte regjistruar njehere
      $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
      $result = mysqli_query($GLOBALS['connection'], $user_check_query);
      $same_email = mysqli_fetch_assoc($result);


      if ($same_email) { // if user exists
        echo '<p class="error">  Email i vendosur eshte aktive  </p>' ;

      }else{//nqs user nuk ekziston ekzekutojme queryn, e shtojme ne databaze dhe kalojme tek log in
          $password_hash = password_hash($password, PASSWORD_BCRYPT);
          $sql = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password_hash')";
          if (mysqli_query($GLOBALS['connection'], $sql)) {
            header("location: login.php");
          }
          else {
            echo "Error";
          }
      }

    } else {
      echo '<p class="error"> Forma eshte e pa plotosuar </p>' ;

  }

}

//LOGIN

if (isset($_POST["SignIn"])) {
  checkLogin();
}


function checkLogin(){
  //marrim te dhenat nga forma
  $email = textValue("email");
  $password = textValue("password");

  //$con = $GLOBALS['connection']; prove

  //kontrollojm nqs forma u plotesua/variablat kane data
   if ($email && $password) {
     //kontrollojm nqs email dhe pass ekziston ne databaze

     $password_check_query = "SELECT password FROM users WHERE email='$email'";//ktu ruajm passwordin hash te ruajtur ne databaze
     $result = mysqli_query($GLOBALS['connection'], $password_check_query);

     if (mysqli_num_rows($result) > 0) {

       $row = mysqli_fetch_array($result);
       $password_hash = $row['password'];

       if (password_verify($password, $password_hash)) {
         // nqs passwordi eshte i sakte
         header('location: hi.php');
       }else {
         echo '<p class="error"> Gabim! Email/Password i pa sakt </p>' ;
       }

     }



   }else {
     echo '<p class="error"> Email/Password i nevojshme </p>' ;
   }
}


//mer nga forma textin
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
