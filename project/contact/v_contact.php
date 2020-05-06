<?php
  //creating connection to database

  require_once('../database/database.php');
  session_start();

  $connection = CreateDatabase();

if((isset($_POST['submit']))){
  createData();
}

function createData(){

  $Name = mysqli_real_escape_string($GLOBALS['connection'], $_POST['name']);
  $Email = mysqli_real_escape_string($GLOBALS['connection'], $_POST['email']);
  $comments = mysqli_real_escape_string($GLOBALS['connection'], $_POST['comment']);
    //query to insert the variable data into the database
    if(empty($Name) || empty($Email) || empty($comments)){
      $_SESSION['error'] = "Complete the form";
      header("Location: contact.php");
      exit();
    }

  $sql="INSERT INTO contacte (name, email, comments) VALUES ('$Name','$Email', '$comments')";
    mysqli_query($GLOBALS['connection'], $sql);
    $_SESSION['error'] = "Mesage sent, thank you for contacting us!";
        header("Location: contact.php");
        exit();
  }


?>
