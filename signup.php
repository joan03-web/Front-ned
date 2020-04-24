<?php

require_once("veprime.php");

 ?>

<html>
    <head>
        <title> Sign up </title>
        <link rel="stylesheet" href="style1.css">
</head>

<body>
    <form id="box-signup" method="POST">
        <div class="signup">
            <div class="djathtas">
                <img src="logo1.png"alt="Wander around Tirana"style="width:80px;height:75px" class="logo">
                <p class="sign-up">Create an account</p>
                <div class="emer">
                    <input type="text" placeholder="First name" name="first_name" value="">
                </div>
                <br>
                <div class="mbiemer">
                    <input type="text" placeholder="Last name" name="last_name" value="">
                </div>
                     <br>
                 <div class="email">
                    <input type="email" placeholder="E-mail" name="email" value="">
                 </div>
                <br>
                 <div class="email">
                    <input type="password" placeholder="Password" name="password" value="">
                 </div>
                <br>
                <div class="email">
                    <input type="password" placeholder="Confirm password" name="password" value="">
                </div>
                <br>
                <button type="submit" name="SignUp">SignUp</button>
            </div>
            <div class="majtas">

            </div>
        </div>
    </form>
</body>

</html>
