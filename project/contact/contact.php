<?php
  require_once("veprime.php");
  ?>

<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
  
<h2>Contact Us</h2>

  <form class="form" action="fq_contact.php" method="POST">

    <p class="username">
      <input type="text" name="name" id="name" placeholder="Enter your name" >

    </p>

    <p class="useremail">
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
    </p>

    <p class="usertext">
      <textarea name="text" placeholder="Write something to us" ></textarea>
    </p>

    <?php
    if (isset($_SESSION['error'])) {
      echo '<p style="color:red">'. htmlentities($_SESSION['error'])."</p>\n";
      unset($_SESSION['error']);//e fshim
    }
     ?>

    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
</body>
</html>
