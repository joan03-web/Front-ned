<?php require_once("veprime.php"); ?>

<html>
    <head>
        <title> Login </title>
    </head>
<style>
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
html {
  background: url('bg.jpg') no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
}
p{
    height: 10px;
}
#box {
  border-radius: 25px;
  background: #FFFFFF;
  padding: 20px;
  width: 400px;
  height: 650px;
  margin-left: 550px;
  position: relative;
}
.login-box{
    text-align: center;
}
.login{
    text-align: center;
    font-size:40px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-variant: small-caps;
    letter-spacing: 2px;
}
.email-part{
    width: 80%;
    overflow: hidden;
    font-size: 14px;
    padding: 5px 0;
    margin: 5px 0;
    border-bottom: 1px solid #C0C0C0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    display: inline-block;

}
.email-part i{
    width: 26px;
    float: left;
    text-align: center;
}
.email-part input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 14px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.btn{
    border: none;
    text-align: center;
    margin: 60px;
    padding: 16px;
    width: 270px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-transform: uppercase;
    border-radius: 30px;
    cursor: pointer;
    color: #fff;
    background-image: linear-gradient(to left, #f1c40f,#EE5A24, #f1c40f);
    background-size: 200%;
    transition: 0.4s;
    vertical-align: middle;
}
.btn:hover{
    background-position: right;
}
.forgot-pass{
    text-align: center;
    font-size: 13px;
    cursor: pointer;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-variant: small-caps;
    color: grey;
    margin: 0 120px;
    letter-spacing: 1px;
}
.forgot-pass:hover{
    color:black;
}
.signup{
    text-align: center;
    font-size: 18px;
    cursor: pointer;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-variant: small-caps;
    margin: 0 20px;
    letter-spacing: 1px;
}
.signup:hover{
    color: orange;
}
.img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    cursor: pointer;
}
</style>
<body>
    <br><br><br>
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "login=emptyfields") == true) {
      echo '<p class="loginerror">Plotesoni te dy fushat</p>';
    }
    if(strpos($fullUrl, "login=nouserfound") == true) {
      echo '<p class="loginerror">Ju nuk jeni regjistruar me pare</p>';
    }
    if(strpos($fullUrl, "login=pswnotmatch") == true) {
      echo '<p class="loginerror">Ju lutem vendosni fjalekalimin e sakte</p>';
    }
    if(strpos($fullUrl, "login=error") == true) {
      echo '<p class="loginerror">Ju duhet te logoheni me pare</p>';
    }
    if(strpos($fullUrl, "login=success") == true) {
      echo '<p class="loginerror">Ju u log-uat me sukses!</p>';
    }
    ?>
<form id="box" method="post">
    <div class="login-box">
        <img src="logo1.png"alt="Wander around Tirana"style="width:80px;height:75px" class="img">
        <p class="login"> <strong> login </strong> </p>
        <div class="email-part">
            <p style="text-align: left">E-mail</p>
            <br>
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Type your e-mail" name="email" value="">
        </div>

        <div class="email-part">
            <p style="text-align: left">Password</p>
            <br>
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Type your password" name="password" value="">
        </div>
         <input class="btn" type="submit" name="SignIn" value="Login">
        <p class="forgot-pass"> Forgot password?</p> <br> <br> <br>
        <p href="signup.php" class="signup">  sign up </p>
    </div>
    </form>
</div>
</body>
</html>
