<?php
require_once("veprime.php");
?>
<html>
    <head>
        <title> Sign up </title>
</head>
<style>
html {
    background: url('s7-4.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 100%;
    overflow: hidden;
}
#box-signup{
    border-radius: 20px;
    background: #FFFFFF;
    padding: 20px;
    width: 830px;
    height: 530px;
    margin-top: 130px;
    margin-left: 320px;
    position: relative;

}
.djathtas{
    width: 55%;
    float: right;
    text-align: center;
    right: 25%;
}
.logo {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  cursor: pointer;
}
.sign-up{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 25px;
    text-align: center;
    font-variant: small-caps;
    letter-spacing: 2px;
}
.emer{
    width: 70%;
    overflow: hidden;
    font-size: 14px;
    padding: 8px 0;
    margin: 8px 0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    border-bottom: 1px solid #C0C0C0;
    display: inline-block;
}
.emer i{
    width: 26px;
    float: left;
    text-align: center;
}
.emer input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 15px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.mbiemer{
    width: 70%;
    overflow: hidden;
    padding: 8px 0;
    margin: 8px 0;
    font-size: 14px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    border-bottom: 1px solid #C0C0C0;
    display: inline-block;
}
.mbiemer i{
    width: 26px;
    float: left;
    text-align: center;
}
.mbiemer input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 15px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.email{
    width: 70%;
    overflow: hidden;
    font-size: 14px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #C0C0C0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    display: inline-block;
}
.email i{
    width: 26px;
    float: left;
    text-align: center;
}
.email input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 15px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.btn{
    border: none;
    text-align: center;
    margin: 30px;
    padding: 16px;
    width: 240px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-transform: uppercase;
    border-radius: 30px;
    cursor: pointer;
    color: #fff;
    background-image: linear-gradient(to left, #f78fb3,#25CCF7,#f78fb3);
    background-size: 200%;
    transition: 0.4s;

}
.btn:hover{
    background-position: right;
}
.majtas{
    background: url("16 The Plaza Hotel.jpg");
    width: 45%;
    position: absolute;
    left: 0px;
    top: 0px;
    bottom: 0px;
    right: 0px;
    height: 100%;
    background-size:cover;
    background-repeat: no-repeat;
    border-bottom-left-radius: 20px;
    border-top-left-radius: 20px;
}
.pyetja{
    text-align: center;
    color: black;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size:14px;
    padding-top: -50px;
    width:50%;
    display: table-cell;
    padding-left: 100px;
    padding-right: 5px;
    padding-bottom: 30px;
}
.member{
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 15px;
    font-variant: small-caps;
    color: black;
    width:50%;
    display: table-cell;
    padding-right: 100px;

}
.member:hover{
    color: #3867d6;
}
</style>



<body>
  <?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($fullUrl, "error=emptyfields") == true) {
    echo '<p class="signuperror">Plotesoni te gjitha fushat</p>';
  }
  if(strpos($fullUrl, "error=invaliduid") == true) {
    echo '<p class="signuperror">Vendosni emer/mbiemer te sakte</p>';
  }
  if(strpos($fullUrl, "error=invalidmailfirst_namelastname") == true) {
    echo '<p class="signuperror">Vendosni emer/mbiemer/email te sakte</p>';
  }
  if(strpos($fullUrl, "error=invalidmail") == true) {
    echo '<p class="signuperror">Vendosni email te sakte</p>';
  }
  if(strpos($fullUrl, "error=usedemail") == true) {
    echo '<p class="signuperror">Vendosni nje email qe nuk eshte perdorur me pare</p>';
  }
  if(strpos($fullUrl, "error=shortpwd") == true) {
  echo '<p class="signuperror">Fjalekalimi juaj duhet te permbaje te pakten 6 karaktere</p>';
 }
  if(strpos($fullUrl, "error=paswordcheck") == true) {
    echo '<p class="signuperror">Fjalekalimet nuk perputhen me njeri tjetrin</p>';
  }
  if(strpos($fullUrl, "error=weakpwd") == true) {
    echo '<p class="signuperror">Password should be at least 8 characters in length and should include at least
    one upper case letter, one number, and one special character!</p>';
  }
  if(strpos($fullUrl, "signup=success") == true) {
    echo '<p class="signuperror">Ju u regjistruat me sukses!</p>';
  }

   ?>
    <form method="post" id="box-signup">
        <div class="signup">
            <div class="djathtas">
                <img src="logo1.png" alt="Wander around Tirana" style="width:80px;height:75px" class="logo">
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
                    <input type="text" placeholder="E-mail" name="email" value="">
                 </div>
                <br>
                 <div class="email">
                    <input type="password" placeholder="Password" name="password" >
                 </div>
                <br>
                <div class="email">
                    <input type="password" placeholder="Confirm password" name="confirmPassword" >
                </div>
                <br>
                <input class="btn" type="submit" name="SignUp" value="Sign Up">
                <p style="text-align: center; color: black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size:14px;padding-top: -50px; width:50%; display: table-cell; padding-left: 100px;
                padding-right: 5px;padding-bottom: 30px;"> Already a member?</p>
                <p class="member"> Login </p>
            </div>
            <div class="majtas">    </div>
        </div>
    </form>
</body>

</html>
