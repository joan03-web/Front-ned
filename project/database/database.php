<?php

function CreateDatabase(){

  //percaktojm variablat per databazen
  $servername = "localhost";
  $username = "root";
  $password = "joanbena2020";
  $dbname = "perdorues";

//create connection
  $connection = mysqli_connect($servername, $username, $password); //opens a new connection to our sql server, e krijojm pa emrin e databazes, emrin e vendosim kur e krijojm

  //kontrollojm connection
  if(!$connection){
    die("connection failed : ".mysqli_connect_error());
  }

  //krijojme databasen
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname"; //ky query krijon nje databaz nqs nuk ekziston

  if(mysqli_query($connection, $sql)){
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    //krijojme tabelen
    $sql = "
      CREATE TABLE IF NOT EXISTS users(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(256) NOT NULL,
        last_name VARCHAR(256) NOT NULL,
        email VARCHAR(256) NOT NULL,
        password VARCHAR(256),
        join_date DATE NOT NULL
        )";

      if(mysqli_query($connection, $sql)){// nqs tabela krijohet
        return $connection;
      }else {
        echo "error";
      }

  }else {
    echo "Error ".mysqli_error($connection);//nqs nuk krijon shfaq errorin
  }

}

 ?>
