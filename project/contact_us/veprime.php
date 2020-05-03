<?php
  //creating connection to database

  require_once('../database/database.php');
  session_start();

  $connection = CreateDatabase();
  //check whether submit button is pressed or not
if((isset($_POST['submit']))){
  createData();
}

function createData(){
  //fetching and storing the form data in variables

  $Name = mysqli_real_escape_string($GLOBALS['connection'], $_POST['name']);
  $Email = mysqli_real_escape_string($GLOBALS['connection'], $_POST['email']);
  $comments = mysqli_real_escape_string($GLOBALS['connection'], $_POST['text']);
    //query to insert the variable data into the database
    if(empty($Name) || empty($Email) || empty($comments)){
      $_SESSION['error'] = "Complete the form";
      header("Location: fq_contact.php");
      exit();
    }

  $sql="INSERT INTO contacte (name, email, comments) VALUES ('$Name','$Email', '$comments')";
    //Execute the query and returning a message
    mysqli_query($GLOBALS['connection'], $sql);
        header("Location: fq_contact.php");
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        exit();
  }


?>
